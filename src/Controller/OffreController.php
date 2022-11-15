<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Entity\Test;
use App\Form\OffreEmploiType;
use App\Form\OffreFreelancerType;
use App\Form\OffreStageType;
use App\Repository\OffreRepository;
use App\Repository\TestRepository;
use App\Repository\UtilisateurRepository;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/offre')]
class OffreController extends AbstractController
{
    public static string $type = '';
    private string $resultat = "";


    #[Route('/', name: 'app_offre_index', methods: ['GET'])]
    public function index(OffreRepository $offreRepository): Response
    {   $offres=$offreRepository->findBy(['idSoc'=>'8']);
        foreach ($offres as $o){
            $o->setNbCandidature($offreRepository->findByIdAndCountCand($o->getId()));
        }
        return $this->render('offre/index.html.twig', [
            'offres' => $offres,
        ]);
    }
    #[Route('/{id}', name: 'app_offre_cand', methods: ['GET'])]
    public function showCand(Offre $offre,OffreRepository $offreRepository,UtilisateurRepository $utilisateurRepository): Response
    {
        $candidatures=$offreRepository->findAllCandidates3($offre->getId());
        var_dump($candidatures[1]);
//        foreach ($candidatures as $can)
//        {
//
//        }
        return $this->render('societe_candidature/index.html.twig', [
            'candidatures' => $candidatures,
        ]);
    }

    #[Route('/type', name: 'app_offre_show_typeOffre', methods: ['GET'])]
    public function index1(): Response
    {
        return $this->render('offre/newOffre.html.twig', ['types' => ['Stage', 'Emploi', 'Freelancer']]);
    }


    #[Route('/new/{type}', name: 'app_offre_new', methods: ['GET', 'POST'])]
    public function new($type, Request $request, OffreRepository $offreRepository,
                        UtilisateurRepository $repository, TestRepository $repositorytest): Response
    {
        if ($type === 'Stage') {
            $offre = new Offre();
            $form1 = $this->createForm(OffreStageType::class, $offre);

            $form1->handleRequest($request);

            if ($form1->isSubmitted() && $form1->isValid()) {
                //get user
                $soc = $repository->find(8);
                $offre->setIdSoc($soc);

                //get request values
                $requete1 = $request->request->all();

                //create test
                $test = new Test();
                $test->setIdSoc($soc);
                $test->setLien($requete1['offre_stage']['test'][0]['lien']);
                $test->setTitre($offre->getTitre());
                $repositorytest->save($test, true);

                //create offer
                $offre->setDomaine('Info');
                $offre->setTypeoffre('Stage');
                $offre->setDateajout(date('Y-m-d'));
                $offreRepository->save($offre, true);
                $this->resultat = "";

                return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->renderForm('offre/new.html.twig', [
                'offre' => $offre,
                'form' => $form1,
                'type' => $type
            ]);

        }

        if ($type === 'Emploi') {
            echo $type;
            $offre = new Offre();
            $form1 = $this->createForm(OffreEmploiType::class, $offre);
            $form1->handleRequest($request);

            if ($form1->isSubmitted() && $form1->isValid()) {
                //get user
                $soc = $repository->find(8);
                $offre->setIdSoc($soc);

                //get request values
                $requete1 = $request->request->all();

                //create test
                $test = new Test();
                $test->setIdSoc($soc);
                $test->setLien($requete1['offre_emploi']['test'][0]['lien']);
                $test->setTitre($offre->getTitre());
                $repositorytest->save($test, true);

                //create offer
                $offre->setDomaine('Info');
                $offre->setTypeoffre('Emploi');
                $offre->setDateajout(date('Y-m-d'));
                $offreRepository->save($offre, true);

                return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);
            }

            // $this->resultat="Emploi";
            return $this->renderForm('offre/new.html.twig', [
                'offre' => $offre,
                'form' => $form1,
                'type' => $type

            ]);

        }

        if ($type === 'Freelancer') {
            echo $type;
            $offre = new Offre();
            $form1 = $this->createForm(OffreFreelancerType::class, $offre);
            $form1->handleRequest($request);


            if ($form1->isSubmitted() && $form1->isValid()) {
                //get user
                $soc = $repository->find(8);
                $offre->setIdSoc($soc);

                //get request values
                $requete1 = $request->request->all();

                //create test
                $test = new Test();
                $test->setIdSoc($soc);
                $test->setLien($requete1['offre_freelancer']['test'][0]['lien']);
                $test->setTitre($offre->getTitre());
                $repositorytest->save($test, true);

                //create offer
                $offre->setDomaine('Info');
                $offre->setTypeoffre('Freelancer');
                $offre->setDateajout(date('Y-m-d'));
                $offreRepository->save($offre, true);

                return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);
            }

            // $this->resultat="Freelancer";
            return $this->renderForm('offre/new.html.twig', [
                'offre' => $offre,
                'form' => $form1,
                'type' => $type

            ]);

        }
        echo '1';
        return new Response();
    }


    #[Route('/{id}', name: 'app_offre_show', methods: ['GET'])]
    public function show(Offre $offre): Response
    {
        if($offre->getTest()){
            $testOrnull=$offre->getTest()->getLien();
        }
        else {
            $testOrnull = "pas de test";
        }
        echo $testOrnull;
        return $this->render('offre/show.html.twig', [
            'offre' => $offre,
            'test' =>$testOrnull
        ]);
    }

    #[Route('/{id}/edit', name: 'app_offre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Offre $offre,TestRepository $testRepository, OffreRepository $offreRepository): Response
    {
    if($offre->getTypeoffre() === "Freelancer"){
        $form = $this->createForm(OffreFreelancerType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $requete1 = $request->request->all();
            if($requete1['offre_freelancer']['test'][0]['lien']){
            //create test
            $test = new Test();
            $test->setIdSoc($offre->getIdSoc());
            $test->setLien($requete1['offre_freelancer']['test'][0]['lien']);
            $test->setTitre($offre->getTitre());
            $testRepository->save($test, true);
                $offre->setTest($test);}


            $offreRepository->save($offre, true);

            return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);
        }}

        if($offre->getTypeoffre() === "Stage"){
            $form = $this->createForm(OffreStageType::class, $offre);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $requete1 = $request->request->all();
                if($requete1['offre_stage']['test'][0]['lien']){
                    //create test
                    $test = new Test();
                    $test->setIdSoc($offre->getIdSoc());
                    $test->setLien($requete1['offre_stage']['test'][0]['lien']);
                    $test->setTitre($offre->getTitre());
                    $testRepository->save($test, true);
                    $offre->setTest($test);}

                $offreRepository->save($offre, true);

                return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);
            }}

        if($offre->getTypeoffre() === "Emploi"){
            $form = $this->createForm(OffreEmploiType::class, $offre);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $requete1 = $request->request->all();
                if($requete1['offre_emlpoi']['test'][0]['lien']){
                    //create test
                    $test = new Test();
                    $test->setIdSoc($offre->getIdSoc());
                    $test->setLien($requete1['offre_emlpoi']['test'][0]['lien']);
                    $test->setTitre($offre->getTitre());
                    $testRepository->save($test, true);
                    $offre->setTest($test);}

                $offreRepository->save($offre, true);

                return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);
            }}
            if($offre->getTest()){
                $testOrnull=$offre->getTest()->getId();
            }
            else {
                $testOrnull = -1;
            }
            echo $testOrnull;
        return $this->renderForm('offre/edit.html.twig', [
            'offre' => $offre,
            'form' => $form,
            'type'=>$offre->getTypeoffre(),
            'test'=>$testOrnull
        ]);
    }

    #[Route('/{id}', name: 'app_offre_delete', methods: ['POST'])]
    public function delete(Request $request, Offre $offre, OffreRepository $offreRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $offre->getId(), $request->request->get('_token'))) {
            $offreRepository->remove($offre, true);
        }

        return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}', name: 'app_offre_ajout_test', methods: ['POST'])]
    public function newTest(Request $request, Offre $offre, OffreRepository $offreRepository): Response
    {
        $offre->setTest();

        return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);

    }
}
