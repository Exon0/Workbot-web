<?php

namespace App\Controller;

use App\Entity\ReclamationAvis;
use App\Repository\ReclamationAvisRepository;
use App\Form\ReclamationAvisType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reclamation/avis')]
class ReclamationAvisController extends AbstractController
{
    #[Route('/', name: 'app_reclamation_avis_index', methods: ['GET'])]
    public function index(ReclamationAvisRepository $reclamationAvisRepository): Response
    {
        return $this->render('reclamation_avis/index.html.twig', [
            'reclamation_avis' => $reclamationAvisRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reclamation_avis_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReclamationAvisRepository $reclamationAvisRepository): Response
    {
        $reclamationAvi = new ReclamationAvis();
        $form = $this->createForm(ReclamationAvisType::class, $reclamationAvi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationAvisRepository->save($reclamationAvi, true);

            return $this->redirectToRoute('app_reclamation_avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation_avis/new.html.twig', [
            'reclamation_avi' => $reclamationAvi,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_avis_show', methods: ['GET'])]
    public function show(ReclamationAvis $reclamationAvi): Response
    {
        return $this->render('reclamation_avis/show.html.twig', [
            'reclamation_avi' => $reclamationAvi,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reclamation_avis_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReclamationAvis $reclamationAvi, ReclamationAvisRepository $reclamationAvisRepository): Response
    {
        $form = $this->createForm(ReclamationAvisType::class, $reclamationAvi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationAvisRepository->save($reclamationAvi, true);

            return $this->redirectToRoute('app_reclamation_avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation_avis/edit.html.twig', [
            'reclamation_avi' => $reclamationAvi,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_avis_delete', methods: ['POST'])]
    public function delete(Request $request, ReclamationAvis $reclamationAvi, ReclamationAvisRepository $reclamationAvisRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamationAvi->getId(), $request->request->get('_token'))) {
            $reclamationAvisRepository->remove($reclamationAvi, true);
        }

        return $this->redirectToRoute('app_reclamation_avis_index', [], Response::HTTP_SEE_OTHER);
    }
}
