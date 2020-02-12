<?php

namespace ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Project/Default/index.html.twig');

    }
    public function perAction()
    {
        return $this->render('@Project/Default/new.html.twig');
    }



}



