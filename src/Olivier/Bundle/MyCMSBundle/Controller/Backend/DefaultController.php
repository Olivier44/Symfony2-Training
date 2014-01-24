<?php

namespace Olivier\Bundle\MyCMSBundle\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OlivierMyCMSBundle:Backend:index.html.twig', array('name' => 'okkk'));
    }
}
