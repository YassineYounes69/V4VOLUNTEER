<?php

namespace ProjectBundle\Controller;
use ProjectBundle\Entity\Opportunity;
use ProjectBundle\Entity\Postulations;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Tools\Pagination\Paginator;

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
    public function indexAction(Request $request,$currentPage = 1)
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser()->getId();
        $finalResult= array();
        $postulations = $em->createQuery(
            'SELECT p,o,u
        FROM ProjectBundle:Postulations p,ProjectBundle:Opportunity o, AppBundle:User u
        WHERE o.idAssoc = '.$user.' AND o.id = p.idOp')->getResult();

        $i=0;
        foreach ($postulations as $value){
            if (get_class($value)==Postulations::class) {
                $zeb[0]=$value->getEtatPos();
                $zeb[1]=$value->getIdUser()->getNom();
                $zeb[2]=$value->getIdUser()->getPrenom();
                $zeb[3]=$value->getIdOp()->getNomOp();
                $zeb[4]=$value->getId();
                $finalResult[$i++]=$zeb;

            }
        }
        $nbOp=count($finalResult);
        //dump($finalResult);
        //die("//");
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $finalResult=$paginator->paginate(
            $finalResult,
            $request->query->getInt('page',1),
            5
        );

        return $this->render('postulations/index.html.twig', array(
            'postulations' => $finalResult,
            'nbOp' => $nbOp,
        ));
    }

    public function postulationVolAction(Request $request,$currentPage = 1)
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser()->getId();
        $finalResult= array();
        $postulations = $em->createQuery(
            'SELECT p,o,u
        FROM ProjectBundle:Postulations p,ProjectBundle:Opportunity o, AppBundle:User u
        WHERE p.id_user = '.$user)->getResult();

        $i=0;
        foreach ($postulations as $value){
            if (get_class($value)==Postulations::class) {
                $zeb[0]=$value->getIdOp()->getIdAssoc()->getNom();//nom associaton
                $zeb[1]=$value->getEtatPos();
                $zeb[2]=$value->getIdOp()->getNomOp();//nom opportunité
                $zeb[3]=$value->getId();//id postulation
                $zeb[4]=$value->getIdOp()->getId();//id op
                $zeb[5]=$value->getIdOp()->getIdAssoc()->getId();
                //$zeb[1]=$value->getIdUser()->getNom();
               // $zeb[2]=$value->getIdUser()->getPrenom();
                //$zeb[3]=$value->getIdOp()->getIdAssoc()->getNom();
               //
                $finalResult[$i++]=$zeb;
            }
        }

        $nbOp=count($finalResult);

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $finalResult=$paginator->paginate(
            $finalResult,
            $request->query->getInt('page',1),
            5
        );

        return $this->render('postulations/postulationVol.html.twig', array(
            'postulations' => $finalResult,
            'nbOp' => $nbOp,
        ));
    }

    /**
     * Creates a new postulation entity.
     *
     */
    public function newAction(Request $request,$id)
    {
        $postulation = new Postulations();
        $form = $this->createForm('ProjectBundle\Form\PostulationsType', $postulation);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $op = $em->getRepository('ProjectBundle:Opportunity')->find($id);
        $postulation->setIdOp($op);

        $user=$this->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        $us = $em->getRepository('AppBundle:User')->find($user);
        $postulation->setIdUser($us);

        $results = $em->createQuery(
            'SELECT p 
        FROM ProjectBundle:Postulations p
        WHERE p.id_user = '.$user.' AND p.idOp ='.$id )->getResult();
        $postulations = $em->createQuery(
            'SELECT p
        FROM ProjectBundle:Postulations p
        WHERE p.id_user = '.$user)->getResult();
        $nbPos= count($postulations);

        $etatPos=1;
        $postulation->setEtatPos($etatPos);
        if ($form->isSubmitted() && $form->isValid()) {
            if ((count($results) == 0)  && ($nbPos < 3) ){
            $em = $this->getDoctrine()->getManager();
            $em->persist($postulation);
            $em->flush();
            return $this->redirectToRoute('postulations_Success');
            } else {
                return $this->redirectToRoute('postulations_Failure');
            }
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

    public function successAction()
    {


        return $this->render('postulations/success.html.twig');
    }

    public function failureAction()
    {
        return $this->render('postulations/failure.html.twig');
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
    public function acceptAction($id)
    {
        $postulation = new Postulations();
        $em = $this->getDoctrine()->getManager();

        $postulation = $em->getRepository('ProjectBundle:Postulations')->find($id);
        $postulation->setEtatPos(2);
        $em->persist($postulation);
        $em->flush();
        return $this->render('postulations/accept.html.twig',array('postulation'=>$postulation)
        );
    }
    public function declineAction($id)
    {
        $postulation = new Postulations();
        $em = $this->getDoctrine()->getManager();

        $postulation = $em->getRepository('ProjectBundle:Postulations')->find($id);
        $postulation->setEtatPos(3);
        $em->persist($postulation);
        $em->flush();
        return $this->render('postulations/decline.html.twig',array('postulation'=>$postulation)
        );
    }
}
