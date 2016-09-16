<?php

namespace OCUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        if($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')){
            return $this->redirectToRoute('oc_platform_accueil');
        }
        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');

         return $this->render('OCUserBundle::login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
                'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
    }
}
