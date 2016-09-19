<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {   
       
        // replace this example code with whatever you need
        return $this->render('@App/default/index.html.twig', ['background' => 'Img/AHS.png']);
    }
    
    /**
     * @Route("/admin")
     */
    public function adminAction(Response $response)
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
    
}
