<?php

// src/OCUserBundle/Controller/RegistrationController.php
namespace OCUserBundle\Controller;

use AppBundle\Form\UtilisateurType;
use AppBundle\Entity\Utilisateur;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request)
    {
        // 1) build the form
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $mdp = $this->get('security.password_encoder')
                ->encodePassword($utilisateur, $utilisateur->getPlainMdpUtilisateur());
            $utilisateur->setMdpUtilisateur($mdp);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateur);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('homepage');
        }

        return $this->render(
            'OCUserBundle::register.html.twig',
            array('form' => $form->createView())
        );
    }
}