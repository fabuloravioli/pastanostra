<?php

namespace App\Controller\Admin;

use App\Entity\Cottura;
use App\Entity\Pasta;
use Doctrine\Persistence\ManagerRegistry;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Pastanostra');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
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


}
