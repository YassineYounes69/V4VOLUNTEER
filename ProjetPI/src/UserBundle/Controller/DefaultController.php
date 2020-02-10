<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
<<<<<<< HEAD

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
=======
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
>>>>>>> dfd40a50d5e94cfc507b4f4a4b8d231355233b8b
    }
}
