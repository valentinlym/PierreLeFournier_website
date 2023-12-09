<?php

namespace App\Controller;

use App\Entity\OffreDeStage;
use App\Entity\Candidature;
use App\Form\CandidatureType;
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

    #[Route('/{id}', name: 'app_offre_de_stage_show', methods: ['GET', 'POST'])]
    public function show(Request $request, EntityManagerInterface $entityManager,OffreDeStage $offreDeStage): Response
    {
        if ($offreDeStage->isBrouillon()) {
            return $this->redirectToRoute('app_offre_de_stage_index');
        }
        $candidature = new Candidature();
        $candidature->setIdOffreDeStage($offreDeStage);
        $form = $this->createForm(CandidatureType::class, $candidature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($candidature);
            $entityManager->flush();
            return $this->redirectToRoute('app_offre_de_stage_show', array('id' => $offreDeStage->getId()), Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dynamic/offre_de_stage--show.html.twig', [
            'candidature' => $candidature,
            'form' => $form,
            'offre_de_stage' => $offreDeStage,
        ]);
    }
}
