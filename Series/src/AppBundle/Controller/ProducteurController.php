<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Producteur;
use AppBundle\Form\ProducteurType;

/**
 * Producteur controller.
 *
 * @Route("/producteur")
 */
class ProducteurController extends Controller
{
    /**
     * Lists all Producteur entities.
     *
     * @Route("/", name="producteur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $producteurs = $em->getRepository('AppBundle:Producteur')->findAll();

        return $this->render('@App/producteur/index.html.twig', array(
            'producteurs' => $producteurs,
        ));
    }

    /**
     * Creates a new Producteur entity.
     *
     * @Route("/new", name="producteur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $producteur = new Producteur();
        $form = $this->createForm('AppBundle\Form\ProducteurType', $producteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            if($this->getDoctrine->getRepository('AppBundle:Producteur')->producteurDoesNotExists($producteur)){
                $em = $this->getDoctrine()->getManager();
                $em->persist($producteur);
                $em->flush();
            }else{
          
                  $session=$request->getSession();
                  $session->getFlashBag()->add('info_producteur','Ce producteur a déjà été ajouté !');
                  
                  return $this->render('@App/producteur/new.html.twig',array('form' => $form->createView(),));
            }

            return $this->redirectToRoute('producteur_show', array('id' => $producteur->getId()));
        }

        return $this->render('@App/producteur/new.html.twig', array(
            'producteur' => $producteur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Producteur entity.
     *
     * @Route("/{id}", name="producteur_show")
     * @Method("GET")
     */
    public function showAction(Producteur $producteur)
    {
        $deleteForm = $this->createDeleteForm($producteur);

        return $this->render('@App/producteur/show.html.twig', array(
            'producteur' => $producteur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Producteur entity.
     *
     * @Route("/{id}/edit", name="producteur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Producteur $producteur)
    {
        $deleteForm = $this->createDeleteForm($producteur);
        $editForm = $this->createForm('AppBundle\Form\ProducteurType', $producteur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($producteur);
            $em->flush();

            return $this->redirectToRoute('producteur_index', array('id' => $producteur->getId()));
        }

        return $this->render('@App/producteur/edit.html.twig', array(
            'producteur' => $producteur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Producteur entity.
     *
     * @Route("/{id}", name="producteur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Producteur $producteur)
    {
        $form = $this->createDeleteForm($producteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($producteur);
            $em->flush();
        }

        return $this->redirectToRoute('producteur_index');
    }

    /**
     * Creates a form to delete a Producteur entity.
     *
     * @param Producteur $producteur The Producteur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Producteur $producteur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('producteur_delete', array('id' => $producteur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
