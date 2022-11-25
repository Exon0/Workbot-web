<?php

namespace App\Controller;

use App\Entity\Candidature;
use App\Entity\Entretien;
use App\Form\EntretienType;
use App\Repository\CandidatureRepository;
use App\Repository\EntretienRepository;
use App\Repository\UtilisateurRepository;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/entretien')]
class EntretienController extends AbstractController
{
    #[Route('/', name: 'app_entretien_index', methods: ['GET'])]
    public function index(EntretienRepository $entretienRepository): Response
    {
        return $this->render('entretien/index.html.twig', [
            'entretiens' => $entretienRepository->findBy(['iduser' => 8]),
        ]);
    }

    #[Route('/new/{id}', name: 'app_entretien_new', methods: ['GET', 'POST'])]
    public function new(CandidatureRepository $candidatureRepository, UtilisateurRepository $utilisateurRepository, Candidature $idCandidature, Request $request, EntretienRepository $entretienRepository): Response
    {

        $entretien = new Entretien();
        $form = $this->createForm(EntretienType::class, $entretien);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            foreach ($entretienRepository->findAll() as $ent) {
                if ($ent->getIdCandidature()->getId() === $idCandidature->getId()) {
                    $this->addFlash('warning', 'Vous avez deja prévu un entretien avec ce candidat le' . $ent->getDate() . ' a ' . $ent->getHeure());
                    return $this->redirectToRoute('app_entretien_index');
                }
                if ($ent->getDate() === $entretien->getDate() and $ent->getHeure() === $entretien->getHeure()) {
                    $this->addFlash('warning', 'Vous avez deja prévu un entretien avec un autre candidat a cette date et heure ci');
                    return $this->renderForm('entretien/new.html.twig', [
                        'entretien' => $entretien,
                        'form' => $form,
                    ]);
                }

            }

            if ($entretien->getDate() <= date('Y-m-d')) {
                $this->addFlash('warning', 'date invlide');
                return $this->renderForm('entretien/new.html.twig', [
                    'entretien' => $entretien,
                    'form' => $form,
                ]);
            }

            if ($entretien->getHeure() < '07:00:00' || $entretien->getHeure() > '18:00:00') {
                $this->addFlash('warning', 'Veuillez respecter les horraires de travail ');
                return $this->renderForm('entretien/new.html.twig', [
                    'entretien' => $entretien,
                    'form' => $form,
                ]);
            }
            $entretien->setIdCandidature($idCandidature);
            $entretien->setIduser($utilisateurRepository->find(8));

            //create QR-code with meet link
            $result = Builder::create()
                ->writer(new PngWriter())
                ->writerOptions([])
                ->data($entretien->getLienmeet())
                ->encoding(new Encoding('UTF-8'))
                ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
                ->size(300)
                ->margin(10)
                ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
                //->logoPath(__DIR__.'/assets/logo.png')
                ->labelText(' GoogleMeet')
                ->labelFont(new NotoSans(20))
                ->labelAlignment(new LabelAlignmentCenter())
                ->validateResult(false)
                ->build();



            //save Qr-code file
            //il faut changer le chemin avant l'integration avec l'equipe workbot
            $result->saveToFile('C:/Users/Exon/Desktop/workbot-web2/Workbot-web/public/uploads/qrcode/qrcode' . $entretien->getIdCandidature()->getId() . '.png');

            $entretien->setQrCode('uploads/qrcode/qrcode' . $entretien->getIdCandidature()->getId() . '.png');
            $entretienRepository->save($entretien, true);

            //update candidature status
            $cand = $candidatureRepository->find($entretien->getIdCandidature());
            $cand->setStatut('Entretien');
            $candidatureRepository->save($cand, true);

            $soc = $utilisateurRepository->find($idCandidature->getIdcondidat());
            $this->addFlash('warning', 'Entretien ajouté avec succées ');
//            $sms = new SmsMessage(
//                // the phone number to send the SMS message to
//                $soc->getTel(),
//                // the message
//                'Entretien prévu le '.$entretien->getDate() . ' a ' .$entretien->getHeure()
//        .' https://mail.google.com/mail'
//            );


            return $this->redirectToRoute('app_entretien_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('entretien/new.html.twig', [
            'entretien' => $entretien,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'app_entretien_show', methods: ['GET'])]
    public function show(Entretien $entretien): Response
    {
        return $this->render('entretien/show.html.twig', [
            'entretien' => $entretien,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_entretien_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Entretien $entretien, EntretienRepository $entretienRepository): Response
    {
        $form = $this->createForm(EntretienType::class, $entretien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entretienRepository->save($entretien, true);

            return $this->redirectToRoute('app_entretien_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('entretien/edit.html.twig', [
            'entretien' => $entretien,
            'form' => $form,
        ]);
    }

    #[Route('/remove/{id}', name: 'app_entretien_delete')]
    public function delete(CandidatureRepository $candidatureRepository, Request $request, Entretien $entretien, EntretienRepository $entretienRepository): Response
    {

        $entretienRepository->remove($entretien, true);
        $cand = $candidatureRepository->find($entretien->getIdCandidature());
        $cand->setStatut('Non traité');
        $candidatureRepository->save($cand,true);

        $this->addFlash('warning', 'Entretien supprimé avec succées ');


        return $this->redirectToRoute('app_entretien_index', [], Response::HTTP_SEE_OTHER);
    }
}
