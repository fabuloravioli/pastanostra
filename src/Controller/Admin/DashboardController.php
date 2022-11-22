<?php

namespace App\Controller\Admin;

use App\Entity\Cottura;
use App\Entity\Member;
use App\Entity\Pasta;
use App\Entity\Placard;
use Doctrine\Persistence\ManagerRegistry;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        // redirect to some CRUD controller
        $routeBuilder = $this->container->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(PastaCrudController::class)->generateUrl();
        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Pasta Admin');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Pastas', 'fas fa-list', Pasta::class);
        yield MenuItem::linkToCrud('Cotturas', 'fas fa-list', Cottura::class);
        yield MenuItem::linkToCrud('Members', 'fas fa-list', Member::class);
        yield MenuItem::linkToCrud('Placards', 'fas fa-list', Placard::class);
    }


}
