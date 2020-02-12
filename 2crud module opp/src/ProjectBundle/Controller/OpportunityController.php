<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Opportunity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Opportunity controller.
 *
 */
class OpportunityController extends Controller
{
    /**
     * Lists all opportunity entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $opportunities = $em->getRepository('ProjectBundle:Opportunity')->findAll();

        return $this->render('opportunity/index.html.twig', array(
            'opportunities' => $opportunities,
        ));
    }

    /**
     * Creates a new opportunity entity.
     *
     */
    public function newAction(Request $request)
    {
        $opportunity = new Opportunity();
        $form = $this->createForm('ProjectBundle\Form\OpportunityType', $opportunity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($opportunity);
            $em->flush();

            return $this->redirectToRoute('opportunity_show', array('id' => $opportunity->getId()));
        }

        return $this->render('opportunity/new.html.twig', array(
            'opportunity' => $opportunity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a opportunity entity.
     *
     */
    public function showAction(Opportunity $opportunity)
    {
        $deleteForm = $this->createDeleteForm($opportunity);

        return $this->render('opportunity/show.html.twig', array(
            'opportunity' => $opportunity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing opportunity entity.
     *
     */
    public function editAction(Request $request, Opportunity $opportunity)
    {
        $deleteForm = $this->createDeleteForm($opportunity);
        $editForm = $this->createForm('ProjectBundle\Form\OpportunityType', $opportunity);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('opportunity_edit', array('id' => $opportunity->getId()));
        }

        return $this->render('opportunity/edit.html.twig', array(
            'opportunity' => $opportunity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a opportunity entity.
     *
     */
    public function deleteAction(Request $request, Opportunity $opportunity)
    {
        $form = $this->createDeleteForm($opportunity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($opportunity);
            $em->flush();
        }

        return $this->redirectToRoute('opportunity_index');
    }

    /**
     * Creates a form to delete a opportunity entity.
     *
     * @param Opportunity $opportunity The opportunity entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Opportunity $opportunity)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('opportunity_delete', array('id' => $opportunity->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
