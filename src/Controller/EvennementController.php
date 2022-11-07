<?php

namespace App\Controller;

use App\Entity\Evennement;
use App\Repository\EvennementRepository;
use App\Form\EvennementType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/evennement')]
class EvennementController extends AbstractController
{
    #[Route('/', name: 'app_evennement_index', methods: ['GET'])]
    public function index(EvennementRepository $evennementRepository): Response
    {
        return $this->render('evennement/index.html.twig', [
            'evennements' => $evennementRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_evennement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EvennementRepository $evennementRepository): Response
    {
        $evennement = new Evennement();
        $form = $this->createForm(EvennementType::class, $evennement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evennementRepository->save($evennement, true);

            return $this->redirectToRoute('app_evennement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evennement/new.html.twig', [
            'evennement' => $evennement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evennement_show', methods: ['GET'])]
    public function show(Evennement $evennement): Response
    {
        return $this->render('evennement/show.html.twig', [
            'evennement' => $evennement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_evennement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evennement $evennement, EvennementRepository $evennementRepository): Response
    {
        $form = $this->createForm(EvennementType::class, $evennement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evennementRepository->save($evennement, true);

            return $this->redirectToRoute('app_evennement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evennement/edit.html.twig', [
            'evennement' => $evennement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evennement_delete', methods: ['POST'])]
    public function delete(Request $request, Evennement $evennement, EvennementRepository $evennementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evennement->getId(), $request->request->get('_token'))) {
            $evennementRepository->remove($evennement, true);
        }

        return $this->redirectToRoute('app_evennement_index', [], Response::HTTP_SEE_OTHER);
    }
}
