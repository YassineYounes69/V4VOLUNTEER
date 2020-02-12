<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Postulations;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Postulation controller.
 *
 */
class PostulationsController extends Controller
{
    /**
     * Lists all postulation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $postulations = $em->getRepository('ProjectBundle:Postulations')->findAll();

        return $this->render('postulations/index.html.twig', array(
            'postulations' => $postulations,
        ));
    }

    /**
     * Creates a new postulation entity.
     *
     */
    public function newAction(Request $request)
    {
        $postulation = new Postulations();
        $form = $this->createForm('ProjectBundle\Form\PostulationsType', $postulation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($postulation);
            $em->flush();

            return $this->redirectToRoute('postulations_show', array('id' => $postulation->getId()));
        }

        return $this->render('postulations/new.html.twig', array(
            'postulation' => $postulation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a postulation entity.
     *
     */
    public function showAction(Postulations $postulation)
    {
        $deleteForm = $this->createDeleteForm($postulation);

        return $this->render('postulations/show.html.twig', array(
            'postulation' => $postulation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing postulation entity.
     *
     */
    public function editAction(Request $request, Postulations $postulation)
    {
        $deleteForm = $this->createDeleteForm($postulation);
        $editForm = $this->createForm('ProjectBundle\Form\PostulationsType', $postulation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('postulations_edit', array('id' => $postulation->getId()));
        }

        return $this->render('postulations/edit.html.twig', array(
            'postulation' => $postulation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a postulation entity.
     *
     */
    public function deleteAction(Request $request, Postulations $postulation)
    {
        $form = $this->createDeleteForm($postulation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($postulation);
            $em->flush();
        }

        return $this->redirectToRoute('postulations_index');
    }

    /**
     * Creates a form to delete a postulation entity.
     *
     * @param Postulations $postulation The postulation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Postulations $postulation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('postulations_delete', array('id' => $postulation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
