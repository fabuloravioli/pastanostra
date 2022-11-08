<?php
/**
 * Gestion de la page d'accueil de l'application
 *
 * @copyright  2017-2022 Telecom SudParis
 * @license    "MIT/X" License - cf. LICENSE file at project root
 */

namespace App\Controller;

use App\Entity\Cottura;
use App\Entity\Pasta;
use App\Form\PastaType;
use App\Repository\CotturaRepository;
use App\Form\CotturaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\EntityManagerInterface;


/**
 * Controleur cottura
 * @Route("/cottura")
 */
class CotturaController extends AbstractController
{
    /**
     * @Route("/", name = "home", methods="GET")
     */
    public function indexAction()
    {
        return $this->render('index.html.twig',
            ['welcome' => "théophole je t'aime"]
        );
    }

    /**
     * Lists all cottura entities.
     *
     * @Route("/list", name = "cottura_list", methods="GET")
     */
    public function listAction(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $cotturas = $entityManager->getRepository(cottura::class)->findAll();
        $pastas = $entityManager->getRepository(Pasta::class)->findAll();

        dump($cotturas);

        return $this->render('cottura/index.html.twig',
            ['cotturas' => $cotturas,
                'pastas' => $pastas]
        );
    }

    /**
     * Finds and displays a cottura entity.
     *
     * @Route("/{id}", name="cottura_show", requirements={ "id": "\d+"}, methods="GET")
     */
    public function showAction(cottura $cottura): Response
    {
        return $this->render('cottura/show.html.twig',
            ['cottura' => $cottura]
        );
    }


    /**
     * @Route("/new", name="app_cottura_new", methods={"GET", "POST"})
     */
    public function new(Request $request, cotturaRepository $cotturaRepository): Response
    {
        $cottura = new cottura();
        $form = $this->createForm(cotturaType::class, $cottura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cotturaRepository->add($cottura, true);

            return $this->redirectToRoute('cottura_list', [], Response::HTTP_SEE_OTHER);
            $entityManager->persist($cottura);
            $entityManager->flush();

            // Make sure message will be displayed after redirect
            $this->addFlash('message', 'bian ajouté');
            // $this->addFlash() is equivalent to $request->getSession()->getFlashBag()->add()
            // or to $this->get('session')->getFlashBag()->add();

            return $this->redirectToRoute('cottura_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cottura/new.html.twig', [
            'cottura' => $cottura,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="cottura_edit", requirements={ "id": "\d+"}, methods={"GET", "POST"})
     */
    public function edit(Request $request, cottura $cottura, cotturaRepository $cotturaRepository): Response
    {

        $form = $this->createForm(cotturaType::class, $cottura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cotturaRepository->add($cottura, true);

            return $this->redirectToRoute('cottura_list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cottura/edit.html.twig', [
            'cottura' => $cottura,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_cottura_delete", methods={"POST"})
     */
    public function delete(Request $request, cottura $cottura, cotturaRepository $cotturaRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $cottura->getId(), $request->request->get('_token'))) {
            $cotturaRepository->remove($cottura, true);
        }

        return $this->redirectToRoute('cottura_list', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/newinpasta/{id}", name="cottura_newinpasta", methods={"GET", "POST"})
     */
    public function newInPasta(Request $request, cotturaRepository $cotturaRepository, Pasta $pasta): Response
    {
        $cottura = new Cottura();
        // already set a pasta, so as to not need add that field in the form (in CotturaType)
        $cottura->setPasta($pasta);

        $form = $this->createForm(CotturaType::class, $cottura,
        ['display_pasta' => false,
            ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cotturaRepository->add($cottura, true);

            return $this->redirectToRoute('pasta_show', array('id' => $pasta->getId()));
            $entityManager->persist($cottura);
            $entityManager->flush();

        }

        return $this->render('cottura/newinpasta.html.twig', [
            'pasta' => $pasta,
            'cottura' => $cottura,
            'form' => $form->createView(),
        ]);

    }

}

