<?php

namespace App\Controller;

use App\Entity\QuestionReponse;
use App\Repository\QuestionReponseRepository;
use App\Form\QuestionReponseType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/question/reponse')]
class QuestionReponseController extends AbstractController
{
    #[Route('/', name: 'app_question_reponse_index', methods: ['GET'])]
    public function index(QuestionReponseRepository $questionReponseRepository): Response
    {
        return $this->render('question_reponse/index.html.twig', [
            'question_reponses' => $questionReponseRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_question_reponse_new', methods: ['GET', 'POST'])]
    public function new(Request $request, QuestionReponseRepository $questionReponseRepository): Response
    {
        $questionReponse = new QuestionReponse();
        $form = $this->createForm(QuestionReponseType::class, $questionReponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $questionReponseRepository->save($questionReponse, true);

            return $this->redirectToRoute('app_question_reponse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('question_reponse/new.html.twig', [
            'question_reponse' => $questionReponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_question_reponse_show', methods: ['GET'])]
    public function show(QuestionReponse $questionReponse): Response
    {
        return $this->render('question_reponse/show.html.twig', [
            'question_reponse' => $questionReponse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_question_reponse_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, QuestionReponse $questionReponse, QuestionReponseRepository $questionReponseRepository): Response
    {
        $form = $this->createForm(QuestionReponseType::class, $questionReponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $questionReponseRepository->save($questionReponse, true);

            return $this->redirectToRoute('app_question_reponse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('question_reponse/edit.html.twig', [
            'question_reponse' => $questionReponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_question_reponse_delete', methods: ['POST'])]
    public function delete(Request $request, QuestionReponse $questionReponse, QuestionReponseRepository $questionReponseRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$questionReponse->getId(), $request->request->get('_token'))) {
            $questionReponseRepository->remove($questionReponse, true);
        }

        return $this->redirectToRoute('app_question_reponse_index', [], Response::HTTP_SEE_OTHER);
    }
}
