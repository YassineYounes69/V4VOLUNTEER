<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Evenement;
use AppBundle\Entity\User;

use ProjectBundle\Entity\Reservation;
use ProjectBundle\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
<<<<<<< HEAD

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
=======
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
>>>>>>> de496a788e2b14d8a651b75af972c22c59fe7911


class EvenementController extends Controller
{
<<<<<<< HEAD
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
                return $this->render('@Project/Evenement/AfficherVol.html.twig',
                    array('evenement' => $evenement,
                        'evenementbest' => $evenementbest,
                        'reservation'=>$reservation));

            }
        }
    }
=======
    public function afficherEvenementsAction(){
        $evenement=$this->getDoctrine()
            ->getRepository(Evenement::class)
            ->findAll();
        return $this->render('@Project/Evenement/AfficherListe.html.twig',
            array('evenement'=>$evenement));
    }

>>>>>>> de496a788e2b14d8a651b75af972c22c59fe7911
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
<<<<<<< HEAD

=======
>>>>>>> de496a788e2b14d8a651b75af972c22c59fe7911
            $evenement = $Form->getData();
            $evenement->setCreateur($user->getUsername());
            $evenement->setIdMembre($user);
            $em = $this->getDoctrine()->getManager();

            $em->persist($evenement);
            $em->flush();
<<<<<<< HEAD
            return $this->redirectToRoute('afficherListe');
=======
            return $this->redirectToRoute('afficherEvenement');
>>>>>>> de496a788e2b14d8a651b75af972c22c59fe7911
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
<<<<<<< HEAD
            return $this->redirectToRoute('afficherListe');
=======
            return $this->redirectToRoute('afficherEvenement');
>>>>>>> de496a788e2b14d8a651b75af972c22c59fe7911
        }

        return $this->render('@Project/Evenement/ModifierEvenement.html.twig',array('f'=>$form->createView()));
    }
    public function supprimerEvenementAction($reference)
    {
        $evenement=$this->getDoctrine()->getRepository(Evenement::class)->find($reference);
        $em = $this->getDoctrine()->getManager();
        $em->remove($evenement);
        $em->flush();
<<<<<<< HEAD
        return $this->redirectToRoute('afficherListe');
=======
        return $this->redirectToRoute('afficherEvenement');
>>>>>>> de496a788e2b14d8a651b75af972c22c59fe7911

    }
    public function afficherEvenementAction(Evenement $evenement)
    {
<<<<<<< HEAD
        $idUser=$this->getUser();
=======
        $id_user=$this->getUser();
>>>>>>> de496a788e2b14d8a651b75af972c22c59fe7911



        $em1 = $this->getDoctrine()->getManager();
<<<<<<< HEAD
        $reservation=$em1->getRepository(Reservation::class)->findBy(array("idUser"=>$idUser));
=======
        $reservation=$em1->getRepository(Reservation::class)->findBy(array("id_user"=>$id_user));
>>>>>>> de496a788e2b14d8a651b75af972c22c59fe7911





        return $this->render('@Project/evenement/AfficherEvenement.html.twig', array(
            'evenement' => $evenement,
            'reservation'=>$reservation,
        ));
    }
<<<<<<< HEAD
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('p');
        $posts =  $em->getRepository(Evenement::class)->findEntitiesByString($requestString);
        if(!$posts) {
            $result['posts']['error'] = "Post Not found :( ";
        } else {
            $result['posts'] = $this->getRealEntities($posts);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($posts){
        foreach ($posts as $posts){
            $realEntities[$posts->getReference()] = [$posts->getNom()];

        }
        return $realEntities;
    }
=======

>>>>>>> de496a788e2b14d8a651b75af972c22c59fe7911

}


