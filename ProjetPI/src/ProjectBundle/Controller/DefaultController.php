<?php

namespace ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectBundle:Default:index.html.twig');
    }

    public function volMenuAction()
    {
        return $this->render('volMenu.html.twig');
    }
}
