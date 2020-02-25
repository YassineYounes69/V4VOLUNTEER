<?php

namespace ProjectBundle\Controller;

use Doctrine\ORM\Tools\Pagination\Paginator;
use ProjectBundle\Entity\Postulations;
use ProjectBundle\Form\OpportunityType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use ProjectBundle\Entity\Opportunity;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
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
    public function indexAction($page = 1)
    {
        $em = $this->getDoctrine()->getManager();

        $opportunities = $em->getRepository('ProjectBundle:Opportunity')->findAll();

        return $this->render('opportunity/index.html.twig', array(
            'opportunities' => $opportunities,
        ));
    }

    public function ngoMenuAction()
    {
        return $this->render('ngoMenu.html.twig');
    }

    /**
     * Creates a new opportunity entity.
     *
     */
    public function ajouterOpAction(Request $request)
    {

        $opportunity = new Opportunity();
        $form = $this->createForm(OpportunityType::class, $opportunity);
        $form->handleRequest($request);
        $idAssoc=$this->getUser()->getId();
        $opportunity->setIdAssoc($idAssoc);
        if ($form->isSubmitted() && $form->isValid()) {

            /** @var UploadedFile $file */
            /** @var UploadedFile $file2 */
            /** @var UploadedFile $file3 */
            $em = $this->getDoctrine()->getManager();

            $file=$opportunity->getImg1();
            $filename= md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('photos_directory'),
                $filename
            );
            $opportunity->setImg1($filename);

            $file2=$opportunity->getImg2();
            $filename= md5(uniqid()).'.'.$file2->guessExtension();
            $file2->move($this->getParameter('photos_directory'),$filename);
            $opportunity->setImg2($filename);

            $file3=$opportunity->getImg3();
            $filename= md5(uniqid()).'.'.$file3->guessExtension();
            $file3->move($this->getParameter('photos_directory'),$filename);
            $opportunity->setImg3($filename);

            $em->persist($opportunity);
            $em->flush();

            return $this->redirectToRoute('opportunity_show', array('id' => $opportunity->getId()));
        }

        return $this->render('opportunity/ajouterOp.html.twig', array(
            'opportunity' => $opportunity,
            'form' => $form->createView(),
        ));
    }
    public function newAction(Request $request,$currentPage = 1)
    {

        $em = $this->getDoctrine()->getManager();

        $opportunities = $em->getRepository('ProjectBundle:Opportunity')->findAll();

        $nbOp = count($opportunities);
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result=$paginator->paginate(
            $opportunities,
            $request->query->getInt('page',1),
            5
        );



        return $this->render('opportunity/new.html.twig', array(
            'opportunities' => $result,
            'nbOp' => $nbOp,

        ));
    }

    /**
     * Finds and displays a opportunity entity.
     *
     */
    public function showAction(Opportunity $opportunity)
    {
        $deleteForm = $this->createDeleteForm($opportunity);
        if(in_array('ROLE_ASSO', $this->getUser()->getRoles())){
            $userType="asso";
        } elseif (in_array('ROLE_VOLUN', $this->getUser()->getRoles())) {
            $userType="volun";
        }
        return $this->render('opportunity/show.html.twig', array(
            'opportunity' => $opportunity,
            'delete_form' => $deleteForm->createView(),
            'userType' => $userType,
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
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $opportunity = $em->getRepository(Opportunity::class)->find($id);
$em->remove($opportunity);
$em->flush();

        return $this->redirectToRoute('opportunity_new');
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

    public function searchAction( Request $request){
        $em= $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $results =  $em->getRepository('ProjectBundle:Opportunity')->findEntitiesByString($requestString);
        if (!$results){
            $result['results']['error']="Aucune opportunité trouvée";
        }
        else {
            $result['results']=$this->getRealEntities($results);

        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($results){
        foreach($results as $results){
            $realEntities[$results->getId()]=[$results->getNomop(), $results->getDomaine(), $results->getId()];
        }
        return $realEntities;
    }

    public function opSearchAction(Request $request){
        $opportunities = new Opportunity();
        $em = $this->getDoctrine()->getManager();
        if(in_array('ROLE_ASSO', $this->getUser()->getRoles())){
            $userType="asso";
        } elseif (in_array('ROLE_VOLUN', $this->getUser()->getRoles())) {
            $userType="volun";
        }
        if($request->isMethod("POST")){
            $domaine = $request->get('domaine');
            $dateDebut = $request->get('dateDebut');
            $dateFin = $request->get('dateFin');
            $opportunities = $em->getRepository("ProjectBundle:Opportunity")->findBy(array('domaine'=>$domaine));
        }


        return $this->render('opportunity/opSearch.html.twig', array(
            'opportunities'=>$opportunities,
                'userType' => $userType,
                ));

    }

}