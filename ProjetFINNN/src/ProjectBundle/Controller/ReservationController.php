<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Jaime;
use ProjectBundle\Entity\Reservation;
use ProjectBundle\Entity\Evenement;
use ProjectBundle\Form\ReservationType;
use Swift_Message;
use Swift_SmtpTransport;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

// Load Composer's autoloader



class ReservationController extends Controller
{
    public function participerEvenementAction($reference, Request $Request)
    {
        $reservation = new Reservation();


        $em = $this->getDoctrine()->getManager();

        $evenement = $em->getRepository('ProjectBundle:Evenement')->find($reference);

        $evenement->setNbParticipant($evenement->getNbParticipant() + 1);

        $reservation->setIdEvenement($evenement);
        $user = $this->getUser();
        $reservation->setIdUser($user);
        $em = $this->getDoctrine()->getManager();
        $em->persist($reservation);
        $em->flush();
        // Instantiation and passing `true` enables exceptions


        $message = \Swift_Message::newInstance()
            ->setSubject('participation ajouté')
            ->setCharset('utf-8')
            ->setFrom('mrejeb114@gmail.com')
            ->setTo('mohamed.rejeb@esprit.tn')
            ->setBody(
                $this->renderView(
                    '@Project/SwiftMailer/mailAdmin.html.twig',
                    array('reference' => $reference)
                ));

        $this->get('mailer')->send($message);

        return $this->redirectToRoute('afficherEvenement', array('reference' => $reference));
    }

    public function abandonnerEvenementAction($reference)
    {

        $user = $this->getUser();
        $idUser = $user->getId();
        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository("ProjectBundle:Reservation")->findOneBy(array("idUser" => $idUser, "idEvenement" => $reference));
        $em = $this->getDoctrine()->getManager();

        $evenement = $em->getRepository('ProjectBundle:Evenement')->find($reference);

        $evenement->setNbParticipant($evenement->getNbParticipant() - 1);
        $em->remove($reservation);
        $em->flush();

        return $this->redirectToRoute('afficherEvenement', array('reference' => $reference));
    }

    public function afficherReservationAction()
    {
        $idUser = $this->getUser();
        if ($idUser != null) {

            $reservation = $this->getDoctrine()
                ->getRepository(Reservation::class)
                ->findAll();

            if ($idUser->getRoles()[0] == 'ROLE_ASSO') {
                return $this->render('@Project/Reservation/AfficherReservations.html.twig',
                    array('reservation' => $reservation));
            }
            else if ($idUser->getRoles()[0] == 'ROLE_ADMIN')
            {
                return $this->render('@Project/Back/ReservationBack.html.twig',
                    array('reservation' => $reservation));
            }
            }
    }
    public function supprimerReservationAction($ref)
    {


        $reservation = $this->getDoctrine()->getRepository(Reservation::class)->find($ref);
        $em = $this->getDoctrine()->getManager();
        $em->remove($reservation);
        $em->flush();
        return $this->redirectToRoute('afficherReservations');

    }

    public function affichermesparticipationAction()
    {
        $idUser = $this->getUser();

        if ($idUser->getRoles()[0] == 'ROLE_VOLUN') {
            $evenements1 = array();
            $idUser = $this->getUser();
            $em = $this->getDoctrine()->getManager();
            $evenements = $em->getRepository(Evenement::class)->findAll();

            $em1 = $this->getDoctrine()->getManager();
            $reservation = $em1->getRepository(Reservation::class)->findBy(array("idUser" => $idUser));


            foreach ($reservation as $reservations) {
                foreach ($evenements as $evenement) {
                    if ($reservations->getIdEvenement() == $evenement) {
                        array_push($evenements1, $evenement);
                    }
                }

            }
        }

            return $this->render('@Project/Evenement/mes_participation.html.twig', array(

                    'evenements' => $evenements1,
                )
            );


    }

    public function AimerEvenementAction($reference, Request $Request)
    {
        $jaime = new Jaime();


        $em = $this->getDoctrine()->getManager();

        $evenement = $em->getRepository('ProjectBundle:Evenement')->find($reference);


        $jaime->setIdEvenement($evenement);
        $user = $this->getUser();
        $jaime->setIdUser($user);
        $em = $this->getDoctrine()->getManager();
        $em->persist($jaime);
        $em->flush();
        // Instantiation and passing `true` enables exceptions
        return $this->redirectToRoute('afficherEvenement', array('reference' => $reference));
    }
    public function dislikeAction($reference)
    {

        $user = $this->getUser();
        $idUser = $user->getId();
        $em = $this->getDoctrine()->getManager();
        $jaime = $em->getRepository("ProjectBundle:Jaime")->findOneBy(array("idUser" => $idUser, "idEvenement" => $reference));
        $em = $this->getDoctrine()->getManager();
        $em->remove($jaime);
        $em->flush();

        return $this->redirectToRoute('afficherEvenement', array('reference' => $reference));
    }
    public function ajouterReservationAction(Request $request)
    {
        $reservation = new Reservation();
        $user=$this->getUser();
        $Form = $this->createForm(ReservationType::class, $reservation);

        $Form->handleRequest($request);
        if ($Form->isSubmitted() && $Form->isValid()) {
            $reservation = $Form->getData();
            $reservation->setIdUser($user);
            $em = $this->getDoctrine()->getManager();

            $em->persist($reservation);
            $em->flush();
            return $this->redirectToRoute('afficherReservations');
        }
        return $this->render('@Project/Reservation/AjouterReservation.html.twig',
            array('f'=>$Form->createView()));
    }
    public function modifierReservationAction(Request $request, $ref)
    {
        $reservation=$this->getDoctrine()->getRepository(Reservation::class)->find($ref);
        $form = $this->createForm(ReservationType::class,$reservation);
        $form->handleRequest($request);
        $em=$this->getDoctrine()->getManager();
        if($form->isSubmitted())
        {
            $em->persist($reservation);
            $em->flush();
            return $this->redirectToRoute('afficherReservations');
        }

        return $this->render('@Project/Reservation/ModifierReservation.html.twig',array('f'=>$form->createView()));
    }
}