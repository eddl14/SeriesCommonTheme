<?php

namespace src\OCUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('srcOCUserBundle:Default:index.html.twig');
    }
}
