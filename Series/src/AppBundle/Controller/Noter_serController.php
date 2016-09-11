<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Noter_ser;
use AppBundle\Form\Noter_serType;

/**
 * Noter_ser controller.
 *
 * @Route("/noter_ser")
 */
class Noter_serController extends Controller
{
    /**
     * Lists all Noter_ser entities.
     *
     * @Route("/", name="noter_ser_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $noter_sers = $em->getRepository('AppBundle:Noter_ser')->findAll();

        return $this->render('@App/noter_ser/index.html.twig', array(
            'noter_sers' => $noter_sers,
        ));
    }

    /**
     * Creates a new Noter_ser entity.
     *
     * @Route("/new", name="noter_ser_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $noter_ser = new Noter_ser();
        $form = $this->createForm('AppBundle\Form\Noter_serType', $noter_ser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
             if($this->getDoctrine->getRepository('AppBundle:Noter_ser')->noter_serDoesNotExists($noter_ser)){
                $em = $this->getDoctrine()->getManager();
                $em->persist($noter_ser);
                $em->flush();
            }else{
          
                  $session=$request->getSession();
                  $session->getFlashBag()->add('info_noter_ser','Vous avez déjà noté cette série !');
                  
                  return $this->render('@App/noter_ser/new.html.twig',array('form' => $form->createView(),));
            }
            return $this->redirectToRoute('noter_ser_show', array('id' => $noter_ser->getId()));
        }

        return $this->render('@App/noter_ser/new.html.twig', array(
            'noter_ser' => $noter_ser,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Noter_ser entity.
     *
     * @Route("/{id}", name="noter_ser_show")
     * @Method("GET")
     */
    public function showAction(Noter_ser $noter_ser)
    {
        $deleteForm = $this->createDeleteForm($noter_ser);

        return $this->render('@App/noter_ser/show.html.twig', array(
            'noter_ser' => $noter_ser,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Noter_ser entity.
     *
     * @Route("/{id}/edit", name="noter_ser_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Noter_ser $noter_ser)
    {
        $deleteForm = $this->createDeleteForm($noter_ser);
        $editForm = $this->createForm('AppBundle\Form\Noter_serType', $noter_ser);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($noter_ser);
            $em->flush();

            return $this->redirectToRoute('noter_ser_index', array('id' => $noter_ser->getId()));
        }

        return $this->render('@App/noter_ser/edit.html.twig', array(
            'noter_ser' => $noter_ser,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Noter_ser entity.
     *
     * @Route("/{id}", name="noter_ser_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Noter_ser $noter_ser)
    {
        $form = $this->createDeleteForm($noter_ser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($noter_ser);
            $em->flush();
        }

        return $this->redirectToRoute('noter_ser_index');
    }

    /**
     * Creates a form to delete a Noter_ser entity.
     *
     * @param Noter_ser $noter_ser The Noter_ser entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Noter_ser $noter_ser)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('noter_ser_delete', array('id' => $noter_ser->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
