<?php

namespace App\Controller;

use App\Entity\Certification;
use App\Entity\Cours;
use App\Repository\CertificationRepository;
use App\Repository\CoursRepository;
use App\Form\CoursType;
use App\Repository\QuizRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;







#[Route('/cours')]
class CoursController extends AbstractController
{
    #[Route('/', name: 'app_cours_index', methods: ['GET'])]
    public function index(CoursRepository $coursRepository,CertificationRepository $cer,QuizRepository $qu): Response
    {
        $cours=count($coursRepository->findAll());
        $certif=count($cer->findAll());
        $quiz=count($qu->findAll());

        $stat=$coursRepository->stat_count_cours();
        return $this->render('cours/index.html.twig', [
            'cours' => $coursRepository->findAll(),
            'stat'=>$stat,
            'q'=>$quiz,
            'co'=>$cours,
            'ce'=>$certif,
        ]);
    }


    #[Route('/u', name: 'app_cours_indexU', methods: ['GET'])]
    public function indexU(CoursRepository $coursRepository): Response
    {
        return $this->render('cours/indexU.html.twig', [
            'cours' => $coursRepository->findAll(),
        ]);
    }

    #[Route('/pdf', name: 'pdf_cours',methods: ['GET'])]
    public function pdf_cours(CoursRepository $Repository): Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        // Instantiate Dompdf with our options
        $dompdf =new Dompdf($pdfOptions);

        $cours = $Repository->findAll();

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('cours/pdf.html.twig', [
            'cours' => $cours,
        ]);
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("njr.pdf", ["Attachment" => true]);
        exit;
    }


    #[Route('/new', name: 'app_cours_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CoursRepository $coursRepository): Response
    {
        $cour = new Cours();
        $form = $this->createForm(CoursType::class, $cour);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() && $form->get('chemin')->getData()!=null)
        {

            $brochureFile = $form->get('chemin')->getData();
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $path ="C:/htmlcours/" . $originalFilename . '.html';
                $cour->setChemin($path);
            }
            var_dump($cour);
            $coursRepository->save($cour, true);
            return $this->redirectToRoute('app_cours_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('cours/new.html.twig', [
            'cour' => $cour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cours_show', methods: ['GET'])]
    public function show(Cours $cour): Response
    {
        return $this->render('cours/show.html.twig', [
            'cour' => $cour,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_cours_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cours $cour, CoursRepository $coursRepository): Response
    {
        $form = $this->createForm(CoursType::class, $cour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && $form->get('chemin')->getData()!=null) {

            $brochureFile = $form->get('chemin')->getData();
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $path ="C:/htmlcours/" . $originalFilename . '.html';
                $cour->setChemin($path);
            }
            $coursRepository->save($cour, true);

            return $this->redirectToRoute('app_cours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cours/edit.html.twig', [
            'cour' => $cour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cours_delete', methods: ['POST'])]
    public function delete(Request $request, Cours $cour, CoursRepository $coursRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cour->getId(), $request->request->get('_token'))) {
            $coursRepository->remove($cour, true);
        }

        return $this->redirectToRoute('app_cours_index', [], Response::HTTP_SEE_OTHER);
    }



}
