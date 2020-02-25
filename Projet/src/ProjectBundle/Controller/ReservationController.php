<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Reservation;
use Swift_Message;
use Swift_SmtpTransport;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Symfony\Component\HttpFoundation\Request;

// Load Composer's autoloader
require '../vendor/autoload.php';


class ReservationController extends Controller
{
    public function participerEvenementAction($reference,Request $Request)
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
        $em = $this->getDoctrine()->getManager();

        $evenement = $em->getRepository('ProjectBundle:Evenement')->find($reference);

        $evenement->setNbParticipant($evenement->getNbParticipant()-1);
        $em->remove($reservation);
        $em->flush();

        return $this->redirectToRoute('afficherEvenement', array('reference' => $reference));
    }


}
