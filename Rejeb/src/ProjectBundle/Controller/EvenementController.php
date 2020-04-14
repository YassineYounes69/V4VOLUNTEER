<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Evenement;
use AppBundle\Entity\User;

use ProjectBundle\Entity\Jaime;
use ProjectBundle\Entity\Reservation;
use ProjectBundle\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class EvenementController extends Controller
{
    public function afficherEvenementsAction()
    {
        $idUser = $this->getUser();
        if ($idUser != null) {
                    $evenement = $this->getDoctrine()
                    ->getRepository(Evenement::class)
                    ->findAll();
            if ($idUser->getRoles()[0] == 'ROLE_ASSO')
            {
                return $this->render('@Project/Evenement/AfficherListe.html.twig',
                    array('evenement' => $evenement));
            }
            else if ($idUser->getRoles()[0] == 'ROLE_ADMIN')
            {
                return $this->render('@Project/Back/AfficherListe.html.twig',
                    array('evenement' => $evenement));
            }
            else if ($idUser->getRoles()[0] == 'ROLE_VOLUN') {
                $em2 = $this->getDoctrine()->getManager();
                $evenementbest = $em2->getRepository(Evenement::class)->findbest();
                $em1 = $this->getDoctrine()->getManager();
                $reservation=$em1->getRepository(Reservation::class)->findBy(array("idUser"=>$idUser));
                $em3 = $this->getDoctrine()->getManager();
                $jaime=$em3->getRepository(Jaime::class)->findBy(array("idUser"=>$idUser));
                return $this->render('@Project/Evenement/AfficherVol.html.twig',
                    array('evenement' => $evenement,
                        'evenementbest' => $evenementbest,
                        'reservation'=>$reservation));

            }
        }
      else {

          return $this->render('@Project/Evenement/Error.html.twig');
      }

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
            return $this->redirectToRoute('afficherListe');
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
            return $this->redirectToRoute('afficherListe');
        }

        return $this->render('@Project/Evenement/ModifierEvenement.html.twig',array('f'=>$form->createView()));
    }
    public function supprimerEvenementAction($reference)
    {
        $evenement=$this->getDoctrine()->getRepository(Evenement::class)->find($reference);
        $em = $this->getDoctrine()->getManager();
        $em->remove($evenement);
        $em->flush();
        return $this->redirectToRoute('afficherListe');

    }
    public function afficherEvenementAction(Evenement $evenement)
    {
        $idUser=$this->getUser();



        $em1 = $this->getDoctrine()->getManager();
        $reservation=$em1->getRepository(Reservation::class)->findBy(array("idUser"=>$idUser));
        $em3 = $this->getDoctrine()->getManager();
        $jaime=$em3->getRepository(Jaime::class)->findBy(array("idUser"=>$idUser));
        $mention=count($jaime);



        return $this->render('@Project/evenement/AfficherEvenement.html.twig', array(
            'evenement' => $evenement,
            'jaime' => $jaime,
            'mention' => $mention,
            'reservation'=>$reservation,
        ));
    }
    public function searchAjaxAction(Request $request){
        if($request->isXmlHttpRequest()){
            $name=$request->get('nom');
            $event=$this->getDoctrine()->getRepository(Evenement::class)->mefind($name);
            //initialisation of serializer
            $se=new Serializer(array(new ObjectNormalizer()));
            //normalizer les listes
            $data=$se->normalize($event);
            return new JsonResponse($data);
        }
    }

}


