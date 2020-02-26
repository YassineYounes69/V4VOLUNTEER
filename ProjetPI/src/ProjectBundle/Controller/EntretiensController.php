<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Entretien;
use ProjectBundle\Form\EntretienType;
use Symfony\Component\HttpFoundation\JsonResponse;
use \Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints\Date;

class EntretiensController extends Controller
{
public function newAction(Request $request){
    $id1=$request->get('idOp');
    $id2=$request->get('idAssoc');
    $em = $this->getDoctrine()->getManager();
    $assoc = $em->getRepository('AppBundle:User')->find($id2);
    $op = $em->getRepository('ProjectBundle:Opportunity')->find($id1);

    $entretien = new Entretien();
    $form = $this->createForm(EntretienType::class, $entretien);
    $form->handleRequest($request);
    $idUser=$this->getUser();
    $entretien->setIdMembre($idUser);
    $entretien->setEtatEnt(1);
    $entretien->setIdOp($op);
    $entretien->setIdAssoc($assoc);
    $entretiens = $em->createQuery(
        'SELECT e
        FROM ProjectBundle:Entretien e
        WHERE e.id_membre = '.$idUser->getId().'AND e.idOp = '.$id1)->getResult();
    $nbEnt= count($entretiens);
    if ($form->isSubmitted() && $form->isValid()) {
        if($nbEnt != 0 ) {
            return $this->render('Entretiens\new.html.twig', array(
                'idOp' => $id1,
                'idAssoc'=>$id2,
                'form' => $form->createView(),
                'test'=>'0'
            ));

        }
        else{
        $em = $this->getDoctrine()->getManager();


        $em->persist($entretien);
        $em->flush();

        return $this->redirectToRoute('postulation_vol');
        }
    }



    return $this->render('Entretiens\new.html.twig', array(
        'idOp' => $id1,
        'idAssoc'=>$id2,
        'form' => $form->createView(),
        ));
}

public function entretienVolAction(){
    $em = $this->getDoctrine()->getManager();
    $date= Date('Y-m-d');
    $dateFuture=Date('Y-m-d', strtotime($date. ' + 14 days'));
    $idUser=$this->getUser();
    $finalResult= array();
    $entretiensRec = $em->createQuery(
        "SELECT e
        FROM ProjectBundle:Entretien e
        WHERE e.id_membre = ".$idUser->getId()." AND e.dateEnt <'".$dateFuture."' AND e.dateEnt >'".$date."'")->getResult();

    $entretiens = $em->createQuery(
        'SELECT e,u,o
        FROM ProjectBundle:Entretien e,AppBundle:User u,ProjectBundle:Opportunity o
        WHERE e.id_membre = '.$idUser->getId().'AND e.idAssoc = u.id AND e.idOp = o.id')->getResult();
    $i=0;

    foreach ($entretiens as $value){
        if (get_class($value)==Entretien::class) {
            $tab[0]=$value->getIdAssoc()->getNom();
            $tab[1]=$value->getIdOp()->getNomOp();
            $tab[2]=$value->getDateEnt();
            $tab[3]=$value->getEtatEnt();
            $finalResult[$i++]=$tab;
        }

    }

    return $this->render('Entretiens\AfficherEntretiensVol.html.twig', array(
        'entretiens' => $finalResult,
        'entretiensRec' => $entretiensRec,
        'nbEntretiens' => count($finalResult),
        'nbEntretiensRec' => count($entretiensRec)
    ));

}
}
