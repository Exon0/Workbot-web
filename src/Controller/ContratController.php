<?php

namespace App\Controller;

use App\Entity\Candidature;
use App\Entity\Contrat;
use App\Repository\CandidatureRepository;
use App\Repository\ContratRepository;
use Symfony\Component\Mercure\HubInterface;
use App\Form\ContratType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Annotation\Route;

    #[Route('/contrat')]
class ContratController extends AbstractController
{
    #[Route('/', name: 'app_contrat_index', methods: ['GET'])]
    public function index(ContratRepository $contratRepository, CandidatureRepository $candidatureRepository): Response
    {
        $allContrats = $contratRepository->findAll();
        $contrats = [];
        $i = 0;
        foreach ($allContrats as $contrat) {
            $candidature = $candidatureRepository->findOneBy(["id"=>$contrat->getIdCandidature()->getId()]);
            if($candidature->getIdcondidat()->getId() == 12) {
                $contrats[$i++]=$contrat;
            }
        }
        return $this->render('contrat/index.html.twig', [
            'contrats' => $contrats,
        ]);
    }

        #[Route('/admin/contrats', name: 'app_contrat_admin', methods: ['GET'])]
        public function contratAdmin(ContratRepository $contratRepository, CandidatureRepository $candidatureRepository): Response
        {
            $allContrats = $contratRepository->findAll();
            $i = 0;
            foreach ($allContrats as $contrat) {
                $candidature = $candidatureRepository->findOneBy(["id"=>$contrat->getIdCandidature()->getId()]);
                $contrat->setIdCandidature($candidature);
                $contrats[$i++]=$contrat;
            }
            return $this->render('utilisateur/Dashbord/contrat/index.html.twig', [
                'contrats' => $contrats,
            ]);
        }

        function callMercure(HubInterface $publisher, int $id, int $contratId){

            $update = new Update("http://127.0.0.1:8000/addContract/".$id, $contratId);
            $publisher->publish($update);
        }

    #[Route('/new/{id}', name: 'app_contrat_new', methods: ['GET', 'POST'])]
    public function new(HubInterface  $publisher, Candidature $candidature,Request $request, ContratRepository $contratRepository, CandidatureRepository $candidatureRepository): Response
    {
        $contrat = new Contrat();
        $contrat->setIdCandidature($candidature);
        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);
        $contrat->setDatecreation(date_create(date('Y-m-d')));
        if ($form->isSubmitted() && $form->isValid()) {
            $contrat->setIdCandidature($candidature);
            $candidature->setStatut('acceptée');
            $candidatureRepository->save($candidature, true);
            $contratRepository->save($contrat, true);
            $this->callMercure($publisher, $candidature->getIdcondidat()->getId(), $contrat->getId());
            return $this->render('utilisateur/Dashbord/candidature/index.html.twig', [
                'nonTraitees' => $candidatureRepository->findBy(["statut"=>'non traité']),
                'acceptees' => $candidatureRepository->findBy(["statut"=>'acceptée']),
                'nonAcceptees' => $candidatureRepository->findBy(["statut"=>'refusée'])
            ]);
        }

        return $this->renderForm('contrat/new.html.twig', [
            'contrat' => $contrat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_contrat_show', methods: ['GET'])]
    public function show(Contrat $contrat): Response
    {
        return $this->render('contrat/show.html.twig', [
            'contrat' => $contrat,
        ]);
    }

        #[Route('adminshow/{id}', name: 'app_contrat_admin_show', methods: ['GET'])]
        public function adminShow(Contrat $contrat): Response
        {
            return $this->render('utilisateur/Dashbord/contrat/show.html.twig', [
                'contrat' => $contrat,
            ]);
        }

    #[Route('/{id}/edit', name: 'app_contrat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Contrat $contrat, ContratRepository $contratRepository): Response
    {
        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contratRepository->save($contrat, true);

            return $this->redirectToRoute('app_contrat_admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('utilisateur/Dashbord/contrat/edit.html.twig', [
            'contrat' => $contrat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_contrat_delete', methods: ['POST'])]
    public function delete(Request $request, Contrat $contrat, ContratRepository $contratRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contrat->getId(), $request->request->get('_token'))) {
            $contratRepository->remove($contrat, true);
        }

        return $this->redirectToRoute('app_contrat_index', [], Response::HTTP_SEE_OTHER);
    }

}
