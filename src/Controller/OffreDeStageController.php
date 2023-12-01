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

#[Route('/offredestage', name: 'offre_de_stage')]
class OffreDeStageController extends AbstractController
{
    #[Route('/', name: 'app_offre_de_stage_index', methods: ['GET'])]
    public function index(OffreDeStageRepository $offreDeStageRepository): Response
    {
        return $this->render('offre_de_stage/index.html.twig', [
            'offre_de_stages' => $offreDeStageRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_offre_de_stage_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offreDeStage = new OffreDeStage();
        $form = $this->createForm(OffreDeStageType::class, $offreDeStage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($offreDeStage);
            $entityManager->flush();

            return $this->redirectToRoute('app_offre_de_stage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offre_de_stage/new.html.twig', [
            'offre_de_stage' => $offreDeStage,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_offre_de_stage_show', methods: ['GET'])]
    public function show(OffreDeStage $offreDeStage): Response
    {
        return $this->render('offre_de_stage/show.html.twig', [
            'offre_de_stage' => $offreDeStage,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_offre_de_stage_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, OffreDeStage $offreDeStage, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OffreDeStageType::class, $offreDeStage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_offre_de_stage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offre_de_stage/edit.html.twig', [
            'offre_de_stage' => $offreDeStage,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_offre_de_stage_delete', methods: ['POST'])]
    public function delete(Request $request, OffreDeStage $offreDeStage, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offreDeStage->getId(), $request->request->get('_token'))) {
            $entityManager->remove($offreDeStage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_offre_de_stage_index', [], Response::HTTP_SEE_OTHER);
    }
}
