<?php

namespace App\Controller;

use App\Entity\Candidature;
use App\Entity\Entretien;
use App\Form\EntretienType;
use App\Repository\CandidatureRepository;
use App\Repository\EntretienRepository;
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
            'entretiens' => $entretienRepository->findBy(['iduser' => 8]),
        ]);
    }

    #[Route('/new/{id}', name: 'app_entretien_new', methods: ['GET', 'POST'])]
    public function new(CandidatureRepository $candidatureRepository,UtilisateurRepository $utilisateurRepository, Candidature $idCandidature, Request $request, EntretienRepository $entretienRepository): Response
    {

        $entretien = new Entretien();
        $form = $this->createForm(EntretienType::class, $entretien);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            foreach ($entretienRepository->findAll() as $ent) {
                if ($ent->getIdCandidature()->getId() === $idCandidature->getId()) {
                    $this->addFlash('warning', 'Vous avez deja prévu un entretien avec ce candidat le' . $ent->getDate() . ' a ' . $ent->getHeure());
                    return $this->redirectToRoute('app_entretien_index');
                }
                if ($ent->getDate() === $entretien->getDate() and $ent->getHeure() === $entretien->getHeure()) {
                    $this->addFlash('warning', 'Vous avez deja prévu un entretien avec un autre candidat a cette date et heure ci');
                    return $this->renderForm('entretien/new.html.twig', [
                        'entretien' => $entretien,
                        'form' => $form,
                    ]);                }

            }

            if ($entretien->getDate() <= date('Y-m-d')) {
                $this->addFlash('warning', 'date invlide');
                return $this->redirectToRoute('app_entretien_new');
            }

            if ($entretien->getHeure() < '07:00:00' || $entretien->getHeure() > '18:00:00') {
                $this->addFlash('warning', 'Veuillez respecter les horraires de travail ');
                return $this->redirectToRoute('app_entretien_new');
            }
            $entretien->setIdCandidature($idCandidature);
            $entretien->setIduser($utilisateurRepository->find(8));
            $entretien->setQrCode('uploads/qrcode/qr-code1.png');
            $entretienRepository->save($entretien, true);
            $cand=$candidatureRepository->find($entretien->getIdCandidature());
            $cand->setStatut('Entretien');

            $candidatureRepository->save($cand,true);
            $this->addFlash('warning', 'Entretien ajouté avec succées ');
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

    #[Route('/remove/{id}', name: 'app_entretien_delete')]
    public function delete(Request $request, Entretien $entretien, EntretienRepository $entretienRepository): Response
    {

        $entretienRepository->remove($entretien, true);
        $this->addFlash('warning', 'Entretien supprimé avec succées ');


        return $this->redirectToRoute('app_entretien_index', [], Response::HTTP_SEE_OTHER);
    }
}
