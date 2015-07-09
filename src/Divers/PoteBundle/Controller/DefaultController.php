<?php

namespace Divers\PoteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DiversPoteBundle:Default:index.html.twig', array('name' => $name));
    }
}
