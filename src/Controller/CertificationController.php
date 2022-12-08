<?php

namespace App\Controller;

use App\Entity\Certification;
use App\Repository\CertificationRepository;
use App\Form\CertificationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/certification')]
class CertificationController extends AbstractController
{
    #[Route('/', name: 'app_certification_index', methods: ['GET'])]
    public function index(CertificationRepository $certificationRepository): Response
    {
        return $this->render('certification/index.html.twig', [
            'certifications' => $certificationRepository->findAll(),
        ]);
    }


    #[Route('/u', name: 'app_certification_indexu', methods: ['GET'])]
    public function indexu(CertificationRepository $certificationRepository): Response
    {
        return $this->render('certification/indexU.html.twig', [
            'certifications' => $certificationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_certification_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CertificationRepository $certificationRepository): Response
    {
        $certification = new Certification();
        $form = $this->createForm(CertificationType::class, $certification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $certificationRepository->save($certification, true);

            return $this->redirectToRoute('app_certification_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('certification/newRT.html.twig', [
            'certification' => $certification,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_certification_show', methods: ['GET'])]
    public function show(Certification $certification): Response
    {
        return $this->render('certification/show.html.twig', [
            'certification' => $certification,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_certification_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Certification $certification, CertificationRepository $certificationRepository): Response
    {
        $form = $this->createForm(CertificationType::class, $certification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $certificationRepository->save($certification, true);

            return $this->redirectToRoute('app_certification_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('certification/edit.html.twig', [
            'certification' => $certification,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_certification_delete', methods: ['POST'])]
    public function delete(Request $request, Certification $certification, CertificationRepository $certificationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$certification->getId(), $request->request->get('_token'))) {
            $certificationRepository->remove($certification, true);
        }

        return $this->redirectToRoute('app_certification_index', [], Response::HTTP_SEE_OTHER);
    }
}
