<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Commentaire;
use ProjectBundle\Entity\Publication;
use ProjectBundle\Form\PublicationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PublicationController extends Controller
{

    public function afficherPublicationsAction()
    {
        $idUser = $this->getUser();
        if ($idUser != null) {
            $publication = $this->getDoctrine()
                ->getRepository(Publication::class)
                ->findAll();
            if ($idUser->getRoles()[0] == 'ROLE_ASSO')
            {
                return $this->render('@Project/Publication/AfficherListePub.html.twig',
                    array('publication' => $publication));
            }
            else if ($idUser->getRoles()[0] == 'ROLE_ADMIN')
            {
                return $this->render('@Project/Back/ListePub.html.twig',
                    array('publication' => $publication));
            }
            else if ($idUser->getRoles()[0] == 'ROLE_VOLUN') {
                $em1 = $this->getDoctrine()->getManager();
                $commentaire=$em1->getRepository(Commentaire::class)->findBy(array("idUser"=>$idUser));
                return $this->render('@Project/Publication/AfficherPublications.html.twig',
                    array('publication' => $publication,
                        'commentaire'=>$commentaire));

            }
        }
    }
    public function ajouterPublicationAction(Request $request)
    {
        $publication = new Publication();
        $user=$this->getUser();
        $Form = $this->createForm(PublicationType::class, $publication);

        $Form->handleRequest($request);
        if ($Form->isSubmitted() && $Form->isValid()) {



            $publication = $Form->getData();
            $publication->setIdMembre($user);
            $em = $this->getDoctrine()->getManager();

            $em->persist($publication);
            $em->flush();
            return $this->redirectToRoute('afficherPub');
        }
        return $this->render('@Project/Publication/AjouterPub.html.twig',
            array('f'=>$Form->createView()));
    }

    public function modifierEvenementAction(Request $request, $id)
    {
        $publication=$this->getDoctrine()->getRepository(Publication::class)->find($id);
        $form = $this->createForm(PublicationType::class,$publication);
        $form->handleRequest($request);
        $em=$this->getDoctrine()->getManager();
        if($form->isSubmitted())
        {
            $em->persist($publication);
            $em->flush();
            return $this->redirectToRoute('afficherPub');
        }

        return $this->render('@Project/Publication/ModifierPub.html.twig',array('f'=>$form->createView()));
    }
    public function supprimerPublicationAction($id)
    {
        $publication=$this->getDoctrine()->getRepository(Publication::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($publication);
        $em->flush();
        return $this->redirectToRoute('afficherPub');

    }
    public function afficherPubAction(Publication $publication)
    {
        $idUser = $this->getUser();


        $em1 = $this->getDoctrine()->getManager();
        $commentaire = $em1->getRepository(Commentaire::class)->findBy(array("idUser" => $idUser));


        return $this->render('@Project/evenement/AfficherPub.html.twig', array(
            'publication' => $publication,
            'commentaire' => $commentaire,
        ));
        }
        public function modifierPublicationAction(Request $request, $id)
        {
        $publication=$this->getDoctrine()->getRepository(Publication::class)->find($id);
        $form = $this->createForm(PublicationType::class,$publication);
        $form->handleRequest($request);
        $em=$this->getDoctrine()->getManager();
        if($form->isSubmitted())
        {
            $em->persist($publication);
            $em->flush();
            return $this->redirectToRoute('afficherPub');
        }

        return $this->render('@Project/Publication/ModifierPub.html.twig',array('f'=>$form->createView()));
    }











}
