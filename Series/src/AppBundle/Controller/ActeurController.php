<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Acteur;
use AppBundle\Form\ActeurType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Acteur controller.
 *
 * @Route("/acteur")
 */
class ActeurController extends Controller
{
    /**
     * Lists all Acteur entities.
     *
     * @Route("/", name="acteur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $acteurs = $em->getRepository('AppBundle:Acteur')->findAll();

        return $this->render('@App/acteur/index.html.twig', array(
            'acteurs' => $acteurs,
        ));
    }

    /**
     * Creates a new Acteur entity.
     *
     * @Route("/new", name="acteur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $acteur = new Acteur();
        $form = $this->createForm(ActeurType::class, $acteur);
        $form->handleRequest($request);
        
                    
        if ($form->isSubmitted() && $form->isValid()) {
      
            if($this->getDoctrine()->getRepository('AppBundle:Acteur')->actorDoesNotExists($acteur)){
                $em = $this->getDoctrine()->getManager();
                $em->persist($acteur);
                $em->flush();
            }
            else{
          
                  $session=$request->getSession();
                  $session->getFlashBag()->add('info_acteur','Cet acteur a déjà été ajouté !');
                  
                  return $this->render('@App/acteur/new.html.twig',array('form' => $form->createView(),));
            }
            
            

            return $this->redirectToRoute('acteur_index', array('id' => $acteur->getId()));
        }

        return $this->render('@App/acteur/new.html.twig', array(
            'acteur' => $acteur,
            'form' => $form->createView(),
        ));
    }
    
    
    /**
     * Finds and displays a Acteur entity.
     *
     * @Route("/{id}", name="acteur_show")
     * @Method("GET")
     */
    public function showAction(Acteur $acteur)
    {
        $deleteForm = $this->createDeleteForm($acteur);

        return $this->render('@App/acteur/show.html.twig', array(
            'acteur' => $acteur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Acteur entity.
     *
     * @Route("/{id}/edit", name="acteur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Acteur $acteur)
    {
        $deleteForm = $this->createDeleteForm($acteur);
        $editForm = $this->createForm(ActeurType::class, $acteur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acteur);
            $em->flush();

            return $this->redirectToRoute('acteur_index', array('id' => $acteur->getId()));
        }

        return $this->render('@App/acteur/edit.html.twig', array(
            'acteur' => $acteur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Acteur entity.
     *
     * @Route("/{id}/delete", name="acteur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Acteur $acteur)
    {
        $form = $this->createDeleteForm($acteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($acteur);
            $em->flush();
        }

        return $this->redirectToRoute('acteur_index');
    }

    /**
     * Creates a form to delete a Acteur entity.
     *
     * @param Acteur $acteur The Acteur entity
     *
     * @return Form The form
     */
    private function createDeleteForm(Acteur $acteur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('acteur_delete', array('id' => $acteur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
