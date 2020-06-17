<?php

namespace ProjectBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $demandes = $em->getRepository('ProjectBundle:Demande')->findAll();

        return $this->render('demande/index.html.twig', array(
            'demandes' => $demandes,
        ));
    }

}
