<?php
/**
 * Gestion de la page d'accueil de l'application
 *
 * @copyright  2017-2022 Telecom SudParis
 * @license    "MIT/X" License - cf. LICENSE file at project root
 */

namespace App\Controller;

use Doctrine\Common\Collections\Criteria;
use App\Entity\Member;
use App\Entity\Cottura;
use App\Entity\Pasta;
use App\Repository\PastaRepository;
use App\Form\PastaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Controleur Pasta
 * @Route("/pasta")
 */
class PastaController extends AbstractController
{    
    /**
     * @Route("/", name = "home", methods="GET")
     */
    public function indexAction()
    {
        return $this->render('index.html.twig',
            [ 'welcome' => "Partagez vos pates préférées en toute simplicité" ]
        );
    }

    /**
     * Lists all pasta entities.
     *
     * @Route("/list", name = "pasta_list", methods="GET")
     */
    public function listAction(ManagerRegistry $doctrine): Response
    {
        $entityManager= $doctrine->getManager();
        $pastas = $entityManager->getRepository(Pasta::class)->findAll();

        dump($pastas);

        return $this->render('pasta/index.html.twig',
            [ 'pastas' => $pastas ]
        );
    }

    /**
     * Finds and displays a pasta entity.
     *
     * @Route("/{id}", name="pasta_show", requirements={ "id": "\d+"}, methods="GET")
     */
    public function showAction(Pasta $pasta, ManagerRegistry $doctrine): Response
    {

        //$criteria = new \Doctrine\Common\Collections\Criteria();
        //$criteria->where(\Doctrine\Common\Collections\Criteria::expr()->eq('pasta', $pasta->getNome()));

        //$entityManager= $doctrine->getManager();
        //$cotturas = $entityManager->getRepository(cottura::class)->findBy([$criteria]);

        $entityManager= $doctrine->getManager();
        $cotturas = $entityManager->getRepository(cottura::class)->findAll();

        return $this->render('pasta/show.html.twig',
            [ 'pasta' => $pasta,
              'cotturas' => $cotturas]
        );
    }


    /**
     * @Route("/new/{id}", name="app_pasta_new", methods={"GET", "POST"})
     */
    public function new(Request $request, PastaRepository $pastaRepository, ManagerRegistry $doctrine, $id): Response
    {
        $pasta = new Pasta();
        if ( $id != null) {
            $entityManager = $doctrine->getManager();
            $member = $entityManager->getRepository(Member::class)->findOneBy(['id' => $id]);
            $pasta->setMember($member);
        }
        $form = $this->createForm(PastaType::class, $pasta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pastaRepository->add($pasta, true);

            return $this->redirectToRoute('pasta_list', [], Response::HTTP_SEE_OTHER);
            $entityManager->persist($pasta);
            $entityManager->flush();

            // Make sure message will be displayed after redirect
            $this->addFlash('message', 'bian ajouté');
            // $this->addFlash() is equivalent to $request->getSession()->getFlashBag()->add()
            // or to $this->get('session')->getFlashBag()->add();

            return $this->redirectToRoute('pasta_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pasta/new.html.twig', [
            'pasta' => $pasta,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pasta_edit", requirements={ "id": "\d+"}, methods={"GET", "POST"})
     */
    public function edit(Request $request, Pasta $pasta, PastaRepository $pastaRepository): Response
    {

        $form = $this->createForm(PastaType::class, $pasta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pastaRepository->add($pasta, true);

            return $this->redirectToRoute('pasta_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pasta/edit.html.twig', [
            'pasta' => $pasta,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_pasta_delete", methods={"POST"})
     */
    public function delete(Request $request, Pasta $pasta, PastaRepository $pastaRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pasta->getId(), $request->request->get('_token'))) {
            $pastaRepository->remove($pasta, true);
        }

        return $this->redirectToRoute('pasta_list', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * Mark a pasta as current priority in the user's session
     *
     * @Route("/mark/{id}", name="pasta_mark", requirements={ "id": "\d+"}, methods="GET")
     */
    public function markAction(Request $request, Pasta $pasta): Response
    {

        $favoris = $request->getSession()->get('favoris');
        if( ! is_array($favoris) ) {
            $favoris = array();
        }

        $id = $pasta->getId();

        // si l'identifiant n'est pas présent dans le tableau des favoris, l'ajouter
        if (! in_array($id, $favoris) )
        {
            $favoris[] = $id;
        }
        else
// sinon, le retirer du tableau
        {
            $favoris = array_diff($favoris, array($id));
        }

        $request->getSession()->set('favoris', $favoris);

        dump($pasta);
        return $this->redirectToRoute('pasta_show',
            ['id' => $pasta->getId()]);

    }



}
