<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Commentaire;
use ProjectBundle\Entity\Publication;
use ProjectBundle\Form\CommentaireType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CommentaireController extends Controller
{
    public function CommenterAction(Publication $publication, Request $request)
    {
        $commentaire = new Commentaire();
        $user=$this->getUser();
        $Form = $this->createForm(CommentaireType::class, $commentaire);

        $Form->handleRequest($request);
        if ($Form->isSubmitted() && $Form->isValid()) {
            $commentaire = $Form->getData();
            $commentaire->setIdUser($user);
            $commentaire->setIdPublication($publication);
            $em = $this->getDoctrine()->getManager();

            $em->persist($commentaire);
            $em->flush();
            return $this->redirectToRoute('afficherPub');
        }
        return $this->render('@Project/Publication/Commentaire.html.twig',
            array('f'=>$Form->createView()));
    }




}
