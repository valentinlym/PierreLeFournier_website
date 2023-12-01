<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('static/accueil.html.twig', [
            'controller_name' => 'StaticController',
        ]);
    }

    #[Route('/presentation', name: 'static_presentation')]
    public function page1(): Response
    {
        return $this->render('static/presentation.html.twig', [
            'controller_name' => 'StaticController',
        ]);
    }
    #[Route('/douce_saveur', name: 'static_douce_saveur')]
    public function page2(): Response
    {
        return $this->render('static/douce_saveur.html.twig', [
            'controller_name' => 'StaticController',
        ]);
    }
    #[Route('/traiteur', name: 'static_traiteur')]
    public function page3(): Response
    {
        return $this->render('static/traiteur.html.twig', [
            'controller_name' => 'StaticController',
        ]);
    }
}
