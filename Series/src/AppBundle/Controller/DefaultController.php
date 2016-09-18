<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {   
        $user=$this->getUser();
        
        // replace this example code with whatever you need
        return $this->render('@App/default/index.html.twig', ['background' => 'Img/AHS.png','user'=>$user]);
    }
}
