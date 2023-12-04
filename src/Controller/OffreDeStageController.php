<?php

namespace App\Controller;

use App\Entity\OffreDeStage;
use App\Form\OffreDeStageType;
use App\Repository\OffreDeStageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/offre_de_stage')]
class OffreDeStageController extends AbstractController
{
    #[Route('/', name: 'app_offre_de_stage_index', methods: ['GET'])]
    public function index(OffreDeStageRepository $offreDeStageRepository): Response
    {
        return $this->render('dynamic/offre_de_stage--index.html.twig', [
            'offre_de_stages' => $offreDeStageRepository->findNoBrouillon(),
        ]);
    }

    #[Route('/{id}', name: 'app_offre_de_stage_show', methods: ['GET'])]
    public function show(OffreDeStage $offreDeStage): Response
    {
        return $this->render('dynamic/offre_de_stage--show.html.twig', [
            'offre_de_stage' => $offreDeStage,
        ]);
    }
}
