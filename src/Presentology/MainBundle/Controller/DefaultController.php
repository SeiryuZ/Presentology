<?php

namespace Presentology\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('PresentologyMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
