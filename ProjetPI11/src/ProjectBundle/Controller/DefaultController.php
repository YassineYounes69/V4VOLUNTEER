<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Refugies;
use ProjectBundle\Form\RefugiesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Project/Default/dashboard.html.twig');
    }

    public function indexFrontAction()
    {
        return $this->render('@Project/Default/base.html.twig');
    }

    public function TempAction()
    {
        return $this->render('@Project/Default/ref.html.twig');
    }


    public function AjouterRefAction(Request $request)
    {
        //1.a creation d'un objet
        $Refugies=new Refugies();
        //1.b creation de formulaire
        $form=$this->createForm(RefugiesType::class,$Refugies);
        //2.a recuperation des donnees
        $form=$form->handleRequest($request);

        //3 sauvegarde de donnees

        if($form->isValid())
        {
            //3.a creation entity manager
            $em=$this->getDoctrine()->getManager();
            //3.b persister l'objet dans l'orm
            $em->persist($Refugies);
            //3.c sauvegarde dans la bd
            $em->flush();
            //3.d redirection
            //   return $this->redirectToRoute('these_afficher');
        }
        //1.c l'envoi de formulaire a notre utilisateur
        return $this->render('@Project/Default/index.html.twig',array('form'=>$form->createView()));
    }


    public function AfficherRefAction()
    {
        $em = $this->getDoctrine()->getManager();

        $Refugies = $em->getRepository(Refugies::class)->findAll();

        return $this->render('@Project/Default/Afficher.html.twig', array('Refugies' => $Refugies));
    }

    public function ModifierRefAction($idref, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Refugies = $em->getRepository(Refugies::class)->find($idref);
        $form=$this->createForm(RefugiesType::class,$Refugies);
        //2.a recuperation des donnees
        $form=$form->handleRequest($request);
        if ($form->isSubmitted()){
            $em->persist($Refugies);
            $em->flush();
            return $this->redirectToRoute("project_AfficherRef");

        }
        return $this->render('@Project/Default/Modifier.html.twig',array('form'=>$form->createView()));
    }


    public function SupprimerRefAction($idref, Request $request)
    {
        $Refugies=new Refugies();
        $em = $this->getDoctrine()->getManager();
        $Refugies = $em->getRepository(Refugies::class)->find($idref);
        $em->remove($Refugies);
        $em->flush();
        return $this->redirectToRoute("project_AfficherRef");
    }

}
