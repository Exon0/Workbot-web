<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\AdminType;
use App\Form\ClientType;
use App\Repository\UtilisateurRepository;
use App\Form\UtilisateurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/utilisateur')]
class UtilisateurController extends AbstractController
{
    #[Route('/', name: 'app_utilisateur_index', methods: ['GET'])]
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurRepository->findAll(),
        ]);
    }

    #[Route('/mouh', name: 'app_utilisateur_indexxxx', methods: ['GET'])]
    public function test(UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('utilisateur/Dashbord/testtemplate.html.twig');
    }
    /*
     *administrateur Affichage
     */
    #[Route('/Admin', name: 'app_utilisateur_appadmin', methods: ['GET'])]
    public function adminAf(UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('utilisateur/Admin/show.html.twig', [
            'utilisateurs' => $utilisateurRepository->findadmin(),
        ]);
    }
    #[Route('/newAdmin', name: 'app_utilisateur_new_Admin', methods: ['GET', 'POST'])]
    public function newAdmin(Request $request, UtilisateurRepository $utilisateurRepository): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(AdminType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateurRepository->save($utilisateur, true);

            return $this->redirectToRoute('app_utilisateur_appadmin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('utilisateur/Admin/new.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }


/////////////edit admin
    #[Route('/{id}/edit', name: 'app_utilisateur_edit_admin', methods: ['GET', 'POST'])]
    public function editt(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository): Response
    {
        $form = $this->createForm(AdminType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateurRepository->save($utilisateur, true);

            return $this->redirectToRoute('app_utilisateur_appadmin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('utilisateur/Admin/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }

/////////delete admin
    #[Route('/{id}', name: 'app_utilisateur_delete_admin', methods: ['POST'])]
    public function deletee(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->request->get('_token'))) {
            $utilisateurRepository->remove($utilisateur, true);
        }

        return $this->redirectToRoute('app_utilisateur_appadmin', [], Response::HTTP_SEE_OTHER);
    }





    //////////////////////////////
    /*
     *client Affichage
     */
    #[Route('/client', name: 'app_utilisateur_appclient', methods: ['GET'])]
    public function ClientAf(UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('utilisateur/client/show.html.twig', [
            'utilisateurs' => $utilisateurRepository->findclient(),
        ]);
    }





    //////////////////////

        #[Route('/new', name: 'app_utilisateur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UtilisateurRepository $utilisateurRepository): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateurRepository->save($utilisateur, true);

            return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('utilisateur/new.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_utilisateur_show', methods: ['GET'])]
    public function show(Utilisateur $utilisateur): Response
    {
        return $this->render('utilisateur/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_utilisateur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository): Response
    {
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateurRepository->save($utilisateur, true);

            return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('utilisateur/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_utilisateur_delete', methods: ['POST'])]
    public function delete(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->request->get('_token'))) {
            $utilisateurRepository->remove($utilisateur, true);
        }

        return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
    }
    ////////////////////Registration

}
