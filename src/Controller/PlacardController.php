<?php

namespace App\Controller;

use App\Entity\Member;
use App\Entity\Placard;
use App\Entity\Pasta;
use App\Form\PlacardType;
use App\Repository\PlacardRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/placard")
 */
class PlacardController extends AbstractController
{
    /**
     * @Route("/", name="app_placard_index", methods={"GET"})
     */
    public function index(PlacardRepository $placardRepository): Response
    {
        return $this->render('placard/index.html.twig', [
            'placards' => $placardRepository->findBy(['publiee'=>true]),
        ]);
    }

    /**
     * @Route("/new/{id}", name="app_placard_new", methods={"GET", "POST"})
     */
    public function new(Request $request, PlacardRepository $placardRepository, ManagerRegistry $doctrine, $id): Response
    {
        $placard = new Placard();
        $entityManager = $doctrine->getManager();
        $member = $entityManager->getRepository(Member::class)->findOneBy(['id' => $id]);
        $placard->setMember($member);
        $form = $this->createForm(PlacardType::class, $placard);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $placardRepository->add($placard, true);

            return $this->redirectToRoute('app_placard_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('placard/new.html.twig', [
            'placard' => $placard,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_placard_show", methods={"GET"})
     */
    public function show(Placard $placard): Response
    {
        return $this->render('placard/show.html.twig', [
            'placard' => $placard,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_placard_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Placard $placard, PlacardRepository $placardRepository): Response
    {
        $form = $this->createForm(PlacardType::class, $placard);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $placardRepository->add($placard, true);

            return $this->redirectToRoute('app_placard_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('placard/edit.html.twig', [
            'placard' => $placard,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_placard_delete", methods={"POST"})
     */
    public function delete(Request $request, Placard $placard, PlacardRepository $placardRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$placard->getId(), $request->request->get('_token'))) {
            $placardRepository->remove($placard, true);
        }

        return $this->redirectToRoute('app_placard_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/{placard_id}/pasta/{pasta_id}", name="app_placard_pasta_show", methods={"GET"})
     * @ParamConverter("placard", options={"id" = "placard_id"})
     * @ParamConverter("pasta", options={"id" = "pasta_id"})
     */
    public function PastaShow(Placard $placard, Pasta $pasta): Response
{
    if(! $placard->getPastas()->contains($pasta)) {
        throw $this->createNotFoundException("Couldn't find such a pasta in this placard!");
    }

    if(! $placard->isPubliee()) {
        throw $this->createAccessDeniedException("You cannot access the requested ressource!");
    }

    return $this->render('placard/pasta_show.html.twig', [
        'pasta' => $pasta,
        'placard' => $placard
    ]);
}


}
