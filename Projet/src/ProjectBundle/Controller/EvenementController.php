<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Evenement;
use AppBundle\Entity\User;

use ProjectBundle\Entity\Reservation;
use ProjectBundle\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;


class EvenementController extends Controller
{
    public function afficherEvenementsAction(){
        $evenement=$this->getDoctrine()
            ->getRepository(Evenement::class)
            ->findAll();
        return $this->render('@Project/Evenement/AfficherListe.html.twig',
            array('evenement'=>$evenement));
    }

    public function ajouterEvenementAction(Request $request)
    {
        $evenement = new Evenement();
        $user=$this->getUser();
        $Form = $this->createForm(EvenementType::class, $evenement);

        $Form->handleRequest($request);
        if ($Form->isSubmitted() && $Form->isValid()) {
            /**
             * @var UploadedFile $file
             */
            //  $file = $evenement->getPhotoEvenement();
            // $file = $Form->get('photoEvenement')->getData();
            // $filename= md5(uniqid()) . '.' . $file->guessExtension();
            // $file->move($this->getParameter('photos_directory'), $filename);
            // $evenement->setPhotoEvenement($filename);
            $evenement->setNbParticipant(0);
            $evenement = $Form->getData();
            $evenement->setCreateur($user->getUsername());
            $evenement->setIdMembre($user);
            $em = $this->getDoctrine()->getManager();

            $em->persist($evenement);
            $em->flush();
            return $this->redirectToRoute('afficherEvenement');
        }
        return $this->render('@Project/Evenement/AjouterEvenement.html.twig',
            array('f'=>$Form->createView()));
    }

    public function modifierEvenementAction(Request $request, $reference)
    {
        $evenement=$this->getDoctrine()->getRepository(Evenement::class)->find($reference);
        $form = $this->createForm(EvenementType::class,$evenement);
        $form->handleRequest($request);
        $em=$this->getDoctrine()->getManager();
        if($form->isSubmitted())
        {
            $em->persist($evenement);
            $em->flush();
            return $this->redirectToRoute('afficherEvenement');
        }

        return $this->render('@Project/Evenement/ModifierEvenement.html.twig',array('f'=>$form->createView()));
    }
    public function supprimerEvenementAction($reference)
    {
        $evenement=$this->getDoctrine()->getRepository(Evenement::class)->find($reference);
        $em = $this->getDoctrine()->getManager();
        $em->remove($evenement);
        $em->flush();
        return $this->redirectToRoute('afficherEvenement');

    }
    public function afficherEvenementAction(Evenement $evenement)
    {
        $id_user=$this->getUser();



        $em1 = $this->getDoctrine()->getManager();
        $reservation=$em1->getRepository(Reservation::class)->findBy(array("id_user"=>$id_user));





        return $this->render('@Project/evenement/AfficherEvenement.html.twig', array(
            'evenement' => $evenement,
            'reservation'=>$reservation,
        ));
    }


}


