<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Noter_crit;
use AppBundle\Form\Noter_critType;

/**
 * Noter_crit controller.
 *
 * @Route("/noter_crit")
 */
class Noter_critController extends Controller
{
    /**
     * Lists all Noter_crit entities.
     *
     * @Route("/", name="noter_crit_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $noter_crits = $em->getRepository('AppBundle:Noter_crit')->findAll();

        return $this->render('noter_crit/index.html.twig', array(
            'noter_crits' => $noter_crits,
        ));
    }

    /**
     * Creates a new Noter_crit entity.
     *
     * @Route("/new", name="noter_crit_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $noter_crit = new Noter_crit();
        $form = $this->createForm('AppBundle\Form\Noter_critType', $noter_crit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($noter_crit);
            $em->flush();

            return $this->redirectToRoute('noter_crit_show', array('id' => $noter_crit->getId()));
        }

        return $this->render('noter_crit/new.html.twig', array(
            'noter_crit' => $noter_crit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Noter_crit entity.
     *
     * @Route("/{id}", name="noter_crit_show")
     * @Method("GET")
     */
    public function showAction(Noter_crit $noter_crit)
    {
        $deleteForm = $this->createDeleteForm($noter_crit);

        return $this->render('noter_crit/show.html.twig', array(
            'noter_crit' => $noter_crit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Noter_crit entity.
     *
     * @Route("/{id}/edit", name="noter_crit_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Noter_crit $noter_crit)
    {
        $deleteForm = $this->createDeleteForm($noter_crit);
        $editForm = $this->createForm('AppBundle\Form\Noter_critType', $noter_crit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($noter_crit);
            $em->flush();

            return $this->redirectToRoute('noter_crit_edit', array('id' => $noter_crit->getId()));
        }

        return $this->render('noter_crit/edit.html.twig', array(
            'noter_crit' => $noter_crit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Noter_crit entity.
     *
     * @Route("/{id}", name="noter_crit_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Noter_crit $noter_crit)
    {
        $form = $this->createDeleteForm($noter_crit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($noter_crit);
            $em->flush();
        }

        return $this->redirectToRoute('noter_crit_index');
    }

    /**
     * Creates a form to delete a Noter_crit entity.
     *
     * @param Noter_crit $noter_crit The Noter_crit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Noter_crit $noter_crit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('noter_crit_delete', array('id' => $noter_crit->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
