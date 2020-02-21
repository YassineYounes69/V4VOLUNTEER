<?php

namespace ProjectBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
<<<<<<< HEAD
        $em = $this->getDoctrine()->getManager();

        $demandes = $em->getRepository('ProjectBundle:Demande')->findAll();

        return $this->render('demande/index.html.twig', array(
            'demandes' => $demandes,
        ));
=======
        return $this->render('ProjectBundle:Default:index.html.twig');
>>>>>>> de496a788e2b14d8a651b75af972c22c59fe7911
    }
}
