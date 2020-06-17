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
        $user=$this->getUser();
        $agee = new Agee();
        $form = $this->createForm('ProjectBundle\Form\AgeeType', $agee);
        $agee->setIdMembre($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agee);
            $em->flush();

            return $this->redirectToRoute('agee_show', array('id' => $agee->getId()));
        }

        return $this->render('agee/new.html.twig', array(
            'agee' => $agee,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a agee entity.
     *
     * @Route("/{id}", name="agee_show")
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
     * @Route("/edit", name="agee_edit")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @param Agee $agee
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request)
    {
        $id=$request->get('id');
        $agee=$this->getDoctrine()->getManager()->getRepository(Agee::class)->find($id);
        $deleteForm = $this->createDeleteForm($agee);
        $editForm = $this->createForm('ProjectBundle\Form\AgeeType', $agee);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('agee_show', array('id' => $agee->getId()));
        }

        return $this->render('agee/edit.html.twig', array(
            'agee' => $agee,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to delete an existing agee entity.
     *
     * @Route("/delete", name="agee_delete")
     */
    public function deleteAction(Request $request)
    {
        $id=$request->get('id');

        dump($id);
        die("zz");
        $agee=$this->getDoctrine()->getManager()->getRepository(Agee::class)->find($id);


            $em = $this->getDoctrine()->getManager();
            $em->remove($agee);
            $em->flush();


        return $this->render('agee/index.html.twig');
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
            ->setAction($this->generateUrl('agee_delete', array('id' => $agee->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
