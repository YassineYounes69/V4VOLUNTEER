<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Reservation;
<<<<<<< HEAD
use ProjectBundle\Entity\Evenement;
use Swift_Message;
use Swift_SmtpTransport;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

// Load Composer's autoloader

=======
use Swift_Message;
use Swift_SmtpTransport;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Symfony\Component\HttpFoundation\Request;

// Load Composer's autoloader
require '../vendor/autoload.php';
>>>>>>> de496a788e2b14d8a651b75af972c22c59fe7911


class ReservationController extends Controller
{
<<<<<<< HEAD
    public function participerEvenementAction($reference, Request $Request)
=======
    public function participerEvenementAction($reference,Request $Request)
>>>>>>> de496a788e2b14d8a651b75af972c22c59fe7911
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


<<<<<<< HEAD
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
=======
            $message= \Swift_Message::newInstance()
                ->setSubject('hello')
                ->setCharset('utf-8')
                ->setFrom('mrejeb114@gmail.com')
                ->setTo('mohamed.rejeb@esprit.tn')
                ->setBody(
                    $this->renderView(
                        '@Project/SwiftMailer/mailAdmin.html.twig',
                        array('reference'=>$reference)
                    ));

            $this->get('mailer')->send($message);

        return $this->redirectToRoute('afficherEvenement', array('reference' => $reference));
    }
    public function abandonnerEvenementAction($reference)
    {

        $user=$this->getUser();
        $id_user=$user->getId();
        $em = $this->getDoctrine()->getManager();
        $reservation=$em->getRepository("ProjectBundle:Reservation")->findOneBy(array("id_user"=>$id_user,"id_evenement"=>$reference));
>>>>>>> de496a788e2b14d8a651b75af972c22c59fe7911
        $em = $this->getDoctrine()->getManager();

        $evenement = $em->getRepository('ProjectBundle:Evenement')->find($reference);

<<<<<<< HEAD
        $evenement->setNbParticipant($evenement->getNbParticipant() - 1);
=======
        $evenement->setNbParticipant($evenement->getNbParticipant()-1);
>>>>>>> de496a788e2b14d8a651b75af972c22c59fe7911
        $em->remove($reservation);
        $em->flush();

        return $this->redirectToRoute('afficherEvenement', array('reference' => $reference));
    }

<<<<<<< HEAD
    public function afficherReservationAction()
    {
        $reservation = $this->getDoctrine()
            ->getRepository(Reservation::class)
            ->findAll();
        return $this->render('@Project/Reservation/AfficherReservations.html.twig',
            array('reservation' => $reservation));
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
    }
=======

}
>>>>>>> de496a788e2b14d8a651b75af972c22c59fe7911
