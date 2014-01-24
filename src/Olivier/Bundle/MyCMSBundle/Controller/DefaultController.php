<?php

namespace Olivier\Bundle\MyCMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OlivierMyCMSBundle:Default:index.html.twig', array('name' => $name));
    }
}
