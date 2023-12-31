<?php

namespace App\Controller\Admin;

use App\Entity\Candidature;
use App\Entity\Devis;
use App\Entity\OffreDeStage;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $routeBuilder = $this->container->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(DevisCrudController::class)->generateUrl();
        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Pierre LeFournier <br> Back office');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Devis', 'fa fa-handshake-o', Devis::class);
        yield MenuItem::linkToCrud('Offre de stage', 'fa fa-tag', OffreDeStage::class);
        yield MenuItem::linkToCrud('Candidature', 'fa fa-envelope', Candidature::class);
        if($this->isGranted('ROLE_ADMIN')) {
            yield MenuItem::linkToCrud('Utilisateur', 'fas fa-user', Utilisateur::class);
        }
    }
}
