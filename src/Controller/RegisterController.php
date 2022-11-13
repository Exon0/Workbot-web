<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\UserType;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegisterController extends AbstractController
{
    private $passwordEncoder;
    #[Route('/s', name: 'app_registeree')]
    public function login(Request $request,UserPasswordHasherInterface $userPasswordHasher,UtilisateurRepository $utilisateurRepository)
    {
        $user = new Utilisateur();

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Encode the new users password
            $user->setMdp(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('mdp')->getData()
                )
            );

            // Save
            $utilisateurRepository->save($user, true);

            return $this->redirectToRoute('app_login');
        }

        return $this->render('register/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
