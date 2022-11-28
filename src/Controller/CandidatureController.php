<?php

namespace App\Controller;
use App\Entity\Offre;
use App\Entity\Candidature;
use App\Repository\OffreRepositoryRepository;
use App\Repository\CandidatureRepository;
use App\Form\CandidatureType;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/candidature')]
class CandidatureController extends AbstractController
{

    #[Route('/admin/candidat/', name: 'app_candidature_dashboard', methods: ['GET'])]
    public function dashboardcandidat(CandidatureRepository $candidatureRepository): Response
    {

        return $this->render('utilisateur/Dashbord/candidature/index.html.twig', [
            'nonTraitees' => $candidatureRepository->findBy(["statut"=>'non traité']),
                'acceptees' => $candidatureRepository->findBy(["statut"=>'acceptée']),
            'nonAcceptees' => $candidatureRepository->findBy(["statut"=>'refusée'])
        ]);
    }
    #[Route('/', name: 'app_candidature_index', methods: ['GET'])]
    public function index(CandidatureRepository $candidatureRepository): Response
    {
        return $this->render('candidature/index.html.twig', [
            'candidatures' => $candidatureRepository->findBy(["idcondidat"=>12]),
        ]);
    }

    #[Route('/new/{id}', name: 'app_candidature_new', methods: ['GET', 'POST'])]
    public function new(Offre $offre,Request $request, CandidatureRepository $candidatureRepository, UtilisateurRepository $utilisateurRepository): Response
    {
        $candidature = new Candidature();
        $form = $this->createForm(CandidatureType::class, $candidature);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $candidature->setIdOffre($offre);
            $candidat = $utilisateurRepository->findOneBy(["id"=>12]);
            $candidature->setIdcondidat($candidat);
            $candidature->setStatut("non traité");
            $candidature->setTitre($offre->getTitre());
            $candidature->setDateexpiration($offre->getDateexpiration());
            $candidature->setDateajout(date('Y-m-d'));
            $candidatureRepository->save($candidature, true);

            return $this->redirectToRoute('app_candidature_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('candidature/new.html.twig', [
            'candidature' => $candidature,
            'form' => $form,
        ]);
    }
    #[Route('/adminCondidat/{id}', name: 'app_candidature_show_admin', methods: ['GET'])]
    public function showAdmin(Candidature $candidature): Response
    {
        return $this->render('utilisateur/Dashbord/candidature/show.html.twig', [
            'candidature' => $candidature,
        ]);
    }
    #[Route('/{id}', name: 'app_candidature_show', methods: ['GET'])]
    public function show(Candidature $candidature): Response
    {
        return $this->render('candidature/show.html.twig', [
            'candidature' => $candidature,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_candidature_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Candidature $candidature, CandidatureRepository $candidatureRepository): Response
    {
        $form = $this->createForm(CandidatureType::class, $candidature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $candidatureRepository->save($candidature, true);

            return $this->redirectToRoute('app_candidature_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('candidature/edit.html.twig', [
            'candidature' => $candidature,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_candidature_delete', methods: ['POST'])]
    public function delete(Request $request, Candidature $candidature, CandidatureRepository $candidatureRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$candidature->getId(), $request->request->get('_token'))) {
            $candidatureRepository->remove($candidature, true);
        }

        return $this->redirectToRoute('app_candidature_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('refuserCandidature/{id}', name: 'refuser_candidature', methods: ['GET'])]
    public function refuserCandidature(int $id, CandidatureRepository $candidatureRepository): Response
    {
        $candidature = $candidatureRepository->findOneBy(["id"=>$id]);
        $candidature->setStatut("refusée");
        $candidatureRepository->save($candidature, true);
        return $this->render('utilisateur/Dashbord/candidature/index.html.twig', [
            'nonTraitees' => $candidatureRepository->findBy(["statut"=>'non traité']),
            'acceptees' => $candidatureRepository->findBy(["statut"=>'acceptée']),
            'nonAcceptees' => $candidatureRepository->findBy(["statut"=>'refusée'])
        ]);
    }
}
