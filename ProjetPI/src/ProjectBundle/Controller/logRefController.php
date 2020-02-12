<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Logement;
use ProjectBundle\Form\LogementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class logRefController extends Controller
{

    public function AjouterLogAction(Request $request)
    {
        //1.a creation d'un objet
        $Logement=new Logement();
        //1.b creation de formulaire
        $form=$this->createForm(LogementType::class,$Logement);
        //2.a recuperation des donnees
        $form=$form->handleRequest($request);

        //3 sauvegarde de donnees

        if($form->isValid())
        {
            //3.a creation entity manager
            $em=$this->getDoctrine()->getManager();
            //3.b persister l'objet dans l'orm
            $em->persist($Logement);
            //3.c sauvegarde dans la bd
            $em->flush();
            //3.d redirection
            //   return $this->redirectToRoute('these_afficher');
        }
        //1.c l'envoi de formulaire a notre utilisateur
        return $this->render('@Project/Default/index.html.twig',array('form'=>$form->createView()));
    }

    public function AfficherLogAction()
    {
        $em = $this->getDoctrine()->getManager();

        $Logement = $em->getRepository(logement::class)->findAll();

        return $this->render('@Project/Default/AfficherLog.html.twig', array('Logement' => $Logement));
    }

    public function ModifierLogAction($idlog, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $Logement = $em->getRepository(Logement::class)->find($idlog);
        $form = $this->createForm(LogementType::class, $Logement);
        //2.a recuperation des donnees
        $form = $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em->persist($Logement);
            $em->flush();
            return $this->redirectToRoute("project_AfficherLog");
        }
        return $this->render('@Project/Default/ModifierLog.html.twig',array('form'=>$form->createView()));

    }

    public function SupprimerLogAction($idlog, Request $request)
    {
        $Logement=new Logement();
        $em = $this->getDoctrine()->getManager();
        $Logement = $em->getRepository(Logement::class)->find($idlog);
        $em->remove($Logement);
        $em->flush();
        return $this->redirectToRoute("project_AfficherLog");
    }


}
