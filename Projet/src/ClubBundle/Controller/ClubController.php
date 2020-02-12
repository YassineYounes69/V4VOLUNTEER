<?php

namespace ClubBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ClubController extends Controller
{

public  function homeAction()
{
$classe='3A' ;

return $this->render("@Club/Club/homePage.html.twig",array('classe'=>$classe) ) ;
}
}