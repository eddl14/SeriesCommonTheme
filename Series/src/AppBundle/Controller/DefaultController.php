<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\User\User;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {   
       $user=$this->getUser();

       if (null === $user) {
  // Ici, l'utilisateur est anonyme ou l'URL n'est pas derrière un pare-feu
           return $this->render('@App/default/index.html.twig', ['background' => 'Img/AHS.png']);
       } else {
  // Ici, $user est une instance de notre classe User
           return $this->render('@App/default/index.html.twig', ['background' => 'Img/AHS.png','user'=>$user]);
       }
        // replace this example code with whatever you need
        
    }
    
    /**
     * @Route("/admin")
     */
    public function adminAction(Response $response)
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
    
}
