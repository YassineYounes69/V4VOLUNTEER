<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Aide;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Aide controller.
 *
 * @Route("aide")
 */
class AideController extends Controller
{
    /**
     * Lists all aide entities.
     *
     * @Route("/", name="aide_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $aides = $em->getRepository('ProjectBundle:Aide')->findAll();

        return $this->render('aide/index.html.twig', array(
            'aides' => $aides,
        ));
    }

    /**
     * Creates a new aide entity.
     *
     * @Route("/new", name="aide_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $aide = new Aide();
        $form = $this->createForm('ProjectBundle\Form\AideType', $aide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($aide);
            $em->flush();

            return $this->redirectToRoute('aide_show', array('id' => $aide->getId()));
        }

        return $this->render('aide/new.html.twig', array(
            'aide' => $aide,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a aide entity.
     *
     * @Route("/{id}", name="aide_show")
     * @Method("GET")
     */
    public function showAction(Aide $aide)
    {
        $deleteForm = $this->createDeleteForm($aide);

        return $this->render('aide/show.html.twig', array(
            'aide' => $aide,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing aide entity.
     *
     * @Route("/{id}/edit", name="aide_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Aide $aide)
    {
        $deleteForm = $this->createDeleteForm($aide);
        $editForm = $this->createForm('ProjectBundle\Form\AideType', $aide);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('aide_edit', array('id' => $aide->getId()));
        }

        return $this->render('aide/edit.html.twig', array(
            'aide' => $aide,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a aide entity.
     *
     * @Route("/{id}", name="aide_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Aide $aide)
    {
        $form = $this->createDeleteForm($aide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($aide);
            $em->flush();
        }

        return $this->redirectToRoute('aide_index');
    }

    /**
     * Creates a form to delete a aide entity.
     *
     * @param Aide $aide The aide entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Aide $aide)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('aide_delete', array('id' => $aide->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
