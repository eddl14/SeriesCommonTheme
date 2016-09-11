<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\CritiqueUtilisateur;
use AppBundle\Form\CritiqueUtilisateurType;

/**
 * CritiqueUtilisateur controller.
 *
 * @Route("/critiqueutilisateur")
 */
class CritiqueUtilisateurController extends Controller
{
    /**
     * Lists all CritiqueUtilisateur entities.
     *
     * @Route("/", name="critiqueutilisateur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $critiqueUtilisateurs = $em->getRepository('AppBundle:CritiqueUtilisateur')->findAll();

        return $this->render('@App/critiqueutilisateur/index.html.twig', array(
            'critiqueUtilisateurs' => $critiqueUtilisateurs,
        ));
    }

    /**
     * Creates a new CritiqueUtilisateur entity.
     *
     * @Route("/new", name="critiqueutilisateur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $critiqueUtilisateur = new CritiqueUtilisateur();
        $form = $this->createForm('AppBundle\Form\CritiqueUtilisateurType', $critiqueUtilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($critiqueUtilisateur);
            $em->flush();

            return $this->redirectToRoute('critiqueutilisateur_show', array('id' => $critiqueUtilisateur->getId()));
        }

        return $this->render('@App/critiqueutilisateur/new.html.twig', array(
            'critiqueUtilisateur' => $critiqueUtilisateur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CritiqueUtilisateur entity.
     *
     * @Route("/{id}", name="critiqueutilisateur_show")
     * @Method("GET")
     */
    public function showAction(CritiqueUtilisateur $critiqueUtilisateur)
    {
        $deleteForm = $this->createDeleteForm($critiqueUtilisateur);

        return $this->render('@App/critiqueutilisateur/show.html.twig', array(
            'critiqueUtilisateur' => $critiqueUtilisateur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CritiqueUtilisateur entity.
     *
     * @Route("/{id}/edit", name="critiqueutilisateur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, CritiqueUtilisateur $critiqueUtilisateur)
    {
        $deleteForm = $this->createDeleteForm($critiqueUtilisateur);
        $editForm = $this->createForm('AppBundle\Form\CritiqueUtilisateurType', $critiqueUtilisateur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($critiqueUtilisateur);
            $em->flush();

            return $this->redirectToRoute('critiqueutilisateur_edit', array('id' => $critiqueUtilisateur->getId()));
        }

        return $this->render('@App/critiqueutilisateur/edit.html.twig', array(
            'critiqueUtilisateur' => $critiqueUtilisateur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a CritiqueUtilisateur entity.
     *
     * @Route("/{id}", name="critiqueutilisateur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, CritiqueUtilisateur $critiqueUtilisateur)
    {
        $form = $this->createDeleteForm($critiqueUtilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($critiqueUtilisateur);
            $em->flush();
        }

        return $this->redirectToRoute('critiqueutilisateur_index');
    }

    /**
     * Creates a form to delete a CritiqueUtilisateur entity.
     *
     * @param CritiqueUtilisateur $critiqueUtilisateur The CritiqueUtilisateur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CritiqueUtilisateur $critiqueUtilisateur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('critiqueutilisateur_delete', array('id' => $critiqueUtilisateur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
