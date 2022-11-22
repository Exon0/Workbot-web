<?php

namespace App\Controller;

use App\Entity\Badge;
use App\Entity\Certification;
use App\Repository\BadgeRepository;
use App\Repository\CertificationRepository;
use App\Form\CertificationType;
use App\Repository\QuizRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/certification')]
class CertificationController extends AbstractController
{
    #[Route('/', name: 'app_certification_index', methods: ['GET'])]
    public function index(CertificationRepository $certificationRepository,BadgeRepository $br): Response
    {
        $b=count($br->findAll());

        $sem=$certificationRepository->stat_semaine_stat() ;
        $stat=$certificationRepository->stat_count_certif();
        $uc=count($certificationRepository->stat_count_user());
        $moy=($b/$uc);
        $f=$certificationRepository->cert_all();

        return $this->render('certification/index.html.twig', [
            'certifications' => $certificationRepository->cert_all(),
            'stat'=>$stat,
            'uc'=>$uc,
            'sem'=>$sem,
            'badge'=>$b,
            'moy'=>$moy,
        ]);
    }

    #[Route('/u', name: 'app_certification_indexu', methods: ['GET'])]
    public function indexu(CertificationRepository $certificationRepository): Response
    {
        $session = new Session();
        var_dump(null);
        return $this->render('certification/indexU.html.twig', [
            'certif' => $certificationRepository->cert_aff($session->getId()),
        ]);
    }

    #[Route('/aff/{id}', name: 'app_quiz_afficher', methods: ['GET'])]
    public function certif_aff(CertificationRepository $certificationRepository,QuizRepository $qr,$id): Response
    {
        $k=$id;
        $quiz=$qr->findAll();
        return $this->render('certification/affecterquiz.html.twig', [
            'quiz'=>$quiz,
            'cer'=>$k
        ]);
    }


    #[Route('/new', name: 'app_certification_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CertificationRepository $certificationRepository): Response
    {
        $certification = new Certification();
        $form = $this->createForm(CertificationType::class, $certification);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $time = new \DateTime();
            $t=$time->format('Y/m/d');
            var_dump($t);
            $certification->setDateajout($t);
            $certificationRepository->save($certification, true);

            return $this->redirectToRoute('app_certification_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('certification/new.html.twig', [
            'certification' => $certification,
            'form' => $form,
        ]);
    }


    #[Route('/{id}/edit', name: 'app_certification_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Certification $certification, CertificationRepository $certificationRepository): Response
    {
        $form = $this->createForm(CertificationType::class, $certification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $time = new \DateTime();
            $t=$time->format('Y/m/d');
            $certification->setDateajout($t);
            $certificationRepository->save($certification, true);

            return $this->redirectToRoute('app_certification_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('certification/edit.html.twig', [
            'certification' => $certification,
            'form' => $form,
        ]);
    }



    #[Route('/{id}/{idc}', name: 'app_quiz_affecter', methods: ['GET'])]
    public function quiz_aff(CertificationRepository $certificationRepository,$id,$idc,QuizRepository $qr): Response
    {
        $quiz=$qr->find($id);
        $certif=$certificationRepository->find($idc);
        $certif->setIdQuiz($quiz);
        $certificationRepository->save($certif,true);
        return $this->redirectToRoute('app_certification_index');
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
