<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Donation;
use ProjectBundle\Entity\Demande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Donation controller.
 *
 * @Route("donation")
 */
class DonationController extends Controller
{
    /**
     * Lists all donation entities.
     *
     * @Route("/back", name="donation_back_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $donations = $em->getRepository('ProjectBundle:Donation')->findAll();

        return $this->render('donation/index_back.html.twig', array(
            'donations' => $donations,
        ));
    }


    /**
     * Lists all donation entities.
     *
     * @Route("/filtre/{id}", name="donationfiltre_index")
     * @Method("GET")
     */
    public function indexfiltreAction(Demande $demande)
    {
        $em = $this->getDoctrine()->getManager();

        $donations = $em->getRepository('ProjectBundle:Donation')->findByDemandeDonation($demande);

        return $this->render('donation/index.html.twig', array(
            'donations' => $donations,
        ));
    }






    /**
     * Creates a new donation entity.
     *
     * @Route("/new", name="donation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $donation = new Donation();
        $form = $this->createForm('ProjectBundle\Form\DonationType', $donation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($donation);
            $em->flush();

            return $this->redirectToRoute('donation_show', array('id' => $donation->getId()));
        }

        return $this->render('donation/new.html.twig', array(
            'donation' => $donation,
            'form' => $form->createView(),
        ));
    }




    /**
     * Creates a new donation entity.
     *
     * @Route("/new/{id}", name="donation_neww")
     * @Method({"GET", "POST"})
     */
    public function newwAction(Request $request,Demande $demande)
    {
        $donation = new Donation($demande,$this->getUser(),0,$demande->getTypeDemande());
        $form = $this->createForm('ProjectBundle\Form\DonationType', $donation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($donation);
            $em->flush();

            return $this->redirectToRoute('donation_show', array('id' => $donation->getId()));
        }

        return $this->render('donation/new.html.twig', array(
            'donation' => $donation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a donation entity.
     *
     * @Route("/show/{id}", name="donation_show")
     * @Method("GET")
     */
    public function showAction(Donation $donation)
    {
        $deleteForm = $this->createDeleteForm($donation);

        return $this->render('donation/show.html.twig', array(
            'donation' => $donation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing donation entity.
     *
     * @Route("/{id}/edit", name="donation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Donation $donation)
    {
        $deleteForm = $this->createDeleteForm($donation);
        $editForm = $this->createForm('ProjectBundle\Form\DonationType', $donation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('donation_show', array('id' => $donation->getId()));
        }

        return $this->render('donation/edit.html.twig', array(
            'donation' => $donation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }







    /**
     * Lists all donation entities.
     *
     * @Route("/pdf", name="liste_donation_pdf")
     */
    public function pdfAction()
    {
        $em = $this->getDoctrine()->getManager();

        $donations = $em->getRepository('ProjectBundle:Donation')->findAll();
        $snappy = $this->get('knp_snappy.pdf');

        $html = $this->renderView('donation/pdf.html.twig', array(
            //..Send some data to your view if you need to //
            'donations' => $donations,
        ));

        $filename = 'myFirstSnappyPDF';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }











    /**
     * Deletes a donation entity.
     *
     * @Route("/{id}/delete", name="donation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Donation $donation)
    {

            $em = $this->getDoctrine()->getManager();
            $em->remove($donation);
            $em->flush();


        return $this->redirectToRoute('donation_back_index');
    }

    /**
     * Creates a form to delete a donation entity.
     *
     * @param Donation $donation The donation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Donation $donation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('donation_delete', array('id' => $donation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
