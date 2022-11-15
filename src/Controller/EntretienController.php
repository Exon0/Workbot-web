<?php

namespace App\Controller;

use App\Entity\Candidature;
use App\Entity\Entretien;
use App\Entity\Utilisateur;
use App\Repository\CandidatureRepository;
use App\Repository\EntretienRepository;
use App\Form\EntretienType;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/entretien')]
class EntretienController extends AbstractController
{
    #[Route('/', name: 'app_entretien_index', methods: ['GET'])]
    public function index(EntretienRepository $entretienRepository): Response
    {
        return $this->render('entretien/index.html.twig', [
            'entretiens' => $entretienRepository->findBy(['iduser'=>8]),
        ]);
    }

    #[Route('/new/{id}', name: 'app_entretien_new', methods: ['GET', 'POST'])]
    public function new(UtilisateurRepository $utilisateurRepository,Candidature $idCandidature,Request $request, EntretienRepository $entretienRepository): Response
    {
        $entretien = new Entretien();
        $form = $this->createForm(EntretienType::class, $entretien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entretien->setIdCandidature($idCandidature);
            $entretien->setIduser($utilisateurRepository->find(8));
            $entretienRepository->save($entretien, true);

            return $this->redirectToRoute('app_entretien_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('entretien/new.html.twig', [
            'entretien' => $entretien,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_entretien_show', methods: ['GET'])]
    public function show(Entretien $entretien): Response
    {
        return $this->render('entretien/show.html.twig', [
            'entretien' => $entretien,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_entretien_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Entretien $entretien, EntretienRepository $entretienRepository): Response
    {
        $form = $this->createForm(EntretienType::class, $entretien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entretienRepository->save($entretien, true);

            return $this->redirectToRoute('app_entretien_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('entretien/edit.html.twig', [
            'entretien' => $entretien,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_entretien_delete', methods: ['POST'])]
    public function delete(Request $request, Entretien $entretien, EntretienRepository $entretienRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$entretien->getId(), $request->request->get('_token'))) {
            $entretienRepository->remove($entretien, true);
        }

        return $this->redirectToRoute('app_entretien_index', [], Response::HTTP_SEE_OTHER);
    }
}
