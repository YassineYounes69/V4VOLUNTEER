<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Agee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Agee controller.
 *
 * @Route("agee")
 */
class AgeeController extends Controller
{
    /**
     * Lists all agee entities.
     *
     * @Route("/", name="agee_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $agees = $em->getRepository('ProjectBundle:Agee')->findAll();

        return $this->render('agee/index.html.twig', array(
            'agees' => $agees,
        ));
    }

    /**
     * Creates a new agee entity.
     *
     * @Route("/new", name="agee_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $agee = new Agee();
        $form = $this->createForm('ProjectBundle\Form\AgeeType', $agee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agee);
            $em->flush();

            return $this->redirectToRoute('agee_show', array('cin' => $agee->getCin()));
        }

        return $this->render('agee/new.html.twig', array(
            'agee' => $agee,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a agee entity.
     *
     * @Route("/{cin}", name="agee_show")
     * @Method("GET")
     */
    public function showAction(Agee $agee)
    {
        $deleteForm = $this->createDeleteForm($agee);

        return $this->render('agee/show.html.twig', array(
            'agee' => $agee,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing agee entity.
     *
     * @Route("/{cin}/edit", name="agee_edit")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @param Agee $agee
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, Agee $agee)
    {
        $deleteForm = $this->createDeleteForm($agee);
        $editForm = $this->createForm('ProjectBundle\Form\AgeeType', $agee);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('agee_edit', array('cin' => $agee->getCin()));
        }

        return $this->render('agee/edit.html.twig', array(
            'agee' => $agee,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a agee entity.
     *
     * @Route("/{cin}", name="agee_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Agee $agee)
    {
        $form = $this->createDeleteForm($agee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($agee);
            $em->flush();
        }

        return $this->redirectToRoute('agee_index');
    }

    /**
     * Creates a form to delete a agee entity.
     *
     * @param Agee $agee The agee entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Agee $agee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('agee_delete', array('cin' => $agee->getCin())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
