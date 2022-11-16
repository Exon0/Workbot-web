<?php

namespace App\Controller;

use App\Entity\Ads;
use App\Entity\Utilisateur;
use App\Form\AdsNombreType;
use App\Repository\AdsRepository;
use App\Form\AdsType;
use App\Repository\UtilisateurRepository;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('utilisateur/ads')]
class AdsController extends AbstractController
{
    #[Route('/', name: 'app_ads_index', methods: ['GET'])]
    public function index(AdsRepository $adsRepository): Response
    {
        return $this->render('ads/index.html.twig', [
            'ads' => $adsRepository->findonlyValid(),'adss' => $adsRepository->findonlyValidd(),
        ]);
    }
    #[Route('/ads/s/{id}', name: 'app_ads_status', methods: ['GET'])]
    public function status(AdsRepository $adsRepository,Ads $ads,$id): Response
    {

        $u=$adsRepository->findonlyValid($id);
        $ads->setStatus(0);
        $adsRepository->save($ads, true);
        return $this->redirectToRoute('app_ads_index');
    }


    #[Route('/new', name: 'app_ads_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AdsRepository $adsRepository,SluggerInterface $slugger): Response
    {
        $ad = new Ads();
        $form = $this->createForm(AdsType::class, $ad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /////////
            $adsphot = $form->get('photo')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded

            if ($adsphot) {
                $originalFilename = pathinfo($adsphot->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$adsphot ->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $adsphot ->move(
                        $this->getParameter('ads_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $ad->setPhoto($newFilename);
            }
                $ad->setStatus(1);

             $ad->setNombreAds(1);
            $adsRepository->save($ad, true);

            return $this->redirectToRoute('app_ads_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ads/new.html.twig', [
            'ad' => $ad,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'app_ads_show', methods: ['GET'])]
    public function show(Ads $ad,AdsRepository $adsRepository,String $id): Response
    {

        return $this->render('ads/show.html.twig', [
            'ads' => $adsRepository->find($id),
        ]);

    }

       //  $a=$adsrepository->find($id);
       // $uti=$ads->setNombreAds(2);



    #[Route('/ads/{id}', name: 'app_utilisateur_adsnumber')]
    public function  adsNumberr(Request $request, Ads $ads, AdsRepository $adsrepo,ManagerRegistry $doctrine,$id): Response
    {

        $em = $doctrine->getManager();
        $a=$adsrepo->find($id);
        $uti=$ads->getNombreAds($id);
        $c=$ads->getNombreAds($id);
        if($uti=1)
        {
        $uti=$ads->setNombreAds(2);
        $em->flush();
        }
       else{
           $uti=$ads->setNombreAds(4);
           $em->flush();
       }

        return $this->redirectToRoute('app_ads_index');
    }

    #[Route('/edit', name: 'app_ads_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ads $ads, AdsRepository $adsRepository): Response
    {
            $form = $this->createForm(AdsType::class, $ads);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $adsRepository->save($ads, true);
            return $this->redirectToRoute('app_ads_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ads/index.html.twig', [
            'ads' => $ads,
            'form' => $form,
        ]);
    }

    #[Route('/ads/{id}', name: 'deleteads')]
    public function deleteads(Request $request, Ads $ads, AdsRepository $adsrepo,ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $em->remove($ads);
        $em->flush();
        return $this->redirectToRoute('app_ads_index');
    }
    #[Route('/show/showads/', name: 'app_ads_showads', methods: ['GET'])]
    public function showads(AdsRepository $adsRepository,Request $request): Response
    {
        $u=$adsRepository->findonlyValid();
        return $this->render('ads/afAds.html.twig',['ads'=>$u]);
    }

}
