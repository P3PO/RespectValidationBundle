<?php

namespace Respect\ValidationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('RespectValidationBundle:Default:index.html.twig', array('name' => $name));
    }
}
