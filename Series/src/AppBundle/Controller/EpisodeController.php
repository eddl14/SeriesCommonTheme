<?php

namespace AppBundle\Controller;

use AppBundle\Form\EpisodeType;
use AppBundle\Entity\Episode;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

/**
 * Episode controller.
 *
 * @Route("/episode")
 */
class EpisodeController extends Controller
{
    /**
     * Lists all Episode entities.
     *
     * @Route("/", name="episode_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $episodes = $em->getRepository('AppBundle:Episode')->findAll();

        return $this->render('@App/episode/index.html.twig', array(
            'episodes' => $episodes,
        ));
    }

    /**
     * Creates a new Episode entity.
     *
     * @Route("/new", name="episode_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $episode = new Episode();
        $form = $this->createForm('AppBundle\Form\EpisodeType', $episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            if($this->getDoctrine->getRepository('AppBundle:Episode')->episodeDoesNotExists($episode)){
                $em = $this->getDoctrine()->getManager();
                $em->persist($episode);
                $em->flush();
            }else{
          
                  $session=$request->getSession();
                  $session->getFlashBag()->add('info_episode','Cet episode a déjà été ajouté !');
                  
                  return $this->render('@App/episode/new.html.twig',array('form' => $form->createView(),));
            }
            return $this->redirectToRoute('episode_show', array('id' => $episode->getId()));
        }

        return $this->render('@App/episode/new.html.twig', array(
            'episode' => $episode,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Episode entity.
     *
     * @Route("/{id}", name="episode_show")
     * @Method("GET")
     */
    public function showAction(Episode $episode)
    {
        $deleteForm = $this->createDeleteForm($episode);

        return $this->render('@App/episode/show.html.twig', array(
            'episode' => $episode,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Episode entity.
     *
     * @Route("/{id}/edit", name="episode_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Episode $episode)
    {
        $deleteForm = $this->createDeleteForm($episode);
        $editForm = $this->createForm('AppBundle\Form\EpisodeType', $episode);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($episode);
            $em->flush();

            return $this->redirectToRoute('episode_index', array('id' => $episode->getId()));
        }

        return $this->render('@App/episode/edit.html.twig', array(
            'episode' => $episode,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Episode entity.
     *
     * @Route("/{id}", name="episode_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Episode $episode)
    {
        $form = $this->createDeleteForm($episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($episode);
            $em->flush();
        }

        return $this->redirectToRoute('episode_index');
    }

    /**
     * Creates a form to delete a Episode entity.
     *
     * @param Episode $episode The Episode entity
     *
     * @return Form The form
     */
    private function createDeleteForm(Episode $episode)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('episode_delete', array('id' => $episode->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
