<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Demande;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Demande controller.
 *
 * @Route("demande")
 */
class DemandeController extends Controller
{
    /**
     * Lists all demande entities.
     *
     * @Route("/", name="demande_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $demandes = $em->getRepository('ProjectBundle:Demande')->findAll();

        return $this->render('demande/index.html.twig', array(
            'demandes' => $demandes,
        ));
    }





    /**
     * Lists all demande entities.
     *
     * @Route("/back", name="demande_back_index")
     * @Method("GET")
     */
    public function index_backAction()
    {
        $em = $this->getDoctrine()->getManager();

        $demandes = $em->getRepository('ProjectBundle:Demande')->findAll();

        return $this->render('demande/index_back.html.twig', array(
            'demandes' => $demandes,
        ));
    }


    /**
     * Lists all demande entities.
     *
     * @Route("/pdf", name="liste_demande_pdf")
     */
    public function pdfAction()
    {
        $em = $this->getDoctrine()->getManager();

        $demandes = $em->getRepository('ProjectBundle:Demande')->findAll();
        $snappy = $this->get('knp_snappy.pdf');

        $html = $this->renderView('demande/pdf.html.twig', array(
            //..Send some data to your view if you need to //
            'demandes' => $demandes,
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
     * Lists all demande entities.
     *
     * @Route("/pdf/{id}", name="demande_pdf")
     */
    public function pdfshowAction(Demande $demande)
    {


        $snappy = $this->get('knp_snappy.pdf');

        $html = $this->renderView('demande/pdf_show.html.twig', array(
            //..Send some data to your view if you need to //
            'demande' => $demande
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
     * Creates a new demande entity.
     *
     * @Route("/new", name="demande_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $demande = new Demande();
        $form = $this->createForm('ProjectBundle\Form\DemandeType', $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            /**
             * @var UploadedFile $file
             */
            $file = $demande->getPhotoDemande();
            $filename= md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('photos_directory'), $filename);
            $demande->setPhotoDemande($filename);
            $em->persist($demande);
            $em->flush();

            return $this->redirectToRoute('demande_show', array('id' => $demande->getId()));
        }

        return $this->render('demande/new.html.twig', array(
            'demande' => $demande,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a demande entity.
     *
     * @Route("/{id}", name="demande_show")
     * @Method("GET")
     */
    public function showAction(Demande $demande)
    {
        $deleteForm = $this->createDeleteForm($demande);

        return $this->render('demande/show.html.twig', array(
            'demande' => $demande,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing demande entity.
     *
     * @Route("/{id}/edit", name="demande_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Demande $demande)
    {
        $deleteForm = $this->createDeleteForm($demande);
        $editForm = $this->createForm('ProjectBundle\Form\DemandeType', $demande);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('demande_show', array('id' => $demande->getId()));
        }

        return $this->render('demande/edit.html.twig', array(
            'demande' => $demande,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Deletes a demande entity.
     *
     * @Route("/{id}/delete", name="demande_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Demande $demande)
    {

            $em = $this->getDoctrine()->getManager();
            $em->remove($demande);
            $em->flush();




        return $this->redirectToRoute('demande_index');
    }

    /**
     * Creates a form to delete a demande entity.
     *
     * @param Demande $demande The demande entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Demande $demande)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('demande_delete', array('id' => $demande->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
