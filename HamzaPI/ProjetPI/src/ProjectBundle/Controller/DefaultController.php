<?php

namespace ProjectBundle\Controller;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Project/Default/index.html.twig');

    }
    public function perAction()
    {
        return $this->render('agee/new.html.twig');
    }

    public function LesVolontairesAction()
    {
        $aid=$this->getDoctrine()->getManager()->createQuery("select a from AppBundle:User a")->getResult();
        return $this->render('@Project/Default/volentaire.html.twig',array("aid"=>$aid));
    }
    public function CalculAction()
    {
        $total=0;
        $argent=$this->getDoctrine()->getManager()->createQuery("select sum(b.donation) from ProjectBundle:Aide b where b.donation>0 ")->getOneOrNullResult();


            $total=$total+$argent[1];
            return $this->render('@Project/Default/Calcul.html.twig',array("argent"=>$total));
    }

    public function CalculByUserAction()
    {
        $user=$this->getUser();
        $total=0;
        $argent=$this->getDoctrine()->getManager()->createQuery("select sum(b.donation) from ProjectBundle:Aide b where b.donation>0 and b.id_user= ".$user->getId())->getOneOrNullResult();


        $total=$total+$argent[1];
        return $this->render('@Project/Default/CalculByUser.html.twig',array("argent"=>$total));
    }


    public function statAction(){
        $pieChart = new PieChart();
        $em= $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT r  ,UPPER(f.nom) as nom ,COUNT(r.id) as num FROM ProjectBundle:Aide r 
join ProjectBundle:Agee f with f.id=r.id_PA GROUP BY f.nom');

        $reservations=$query->getScalarResult();

        $data= array();
        $stat=['id', 'id_PA'];
        $i=0;
        array_push($data,$stat);

        $ln= count($reservations);
        for ($i=0 ;$i<count($reservations);$i++){
            $stat=array();
            array_push($stat,$reservations[$i]['nom'],$reservations[$i]['num']/$ln);
            $stat=[$reservations[$i]['nom'],$reservations[$i]['num']*100/$ln];

            array_push($data,$stat);
        }
        $pieChart->getData()->setArrayToDataTable( $data );
        $pieChart->getOptions()->setTitle('Pourcentages des aides par personnes agées');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
        return $this->render('@Project\Default\stat.html.twig', array('piechart' => $pieChart));
    }

    public function PageStatAction(){
        return $this->render('@Project\Default\PageStat.html.twig',array('u'=>$this->getUser()->getUsername()));
    }

    public function statByUserAction(){
        $user=$this->getUser();
        $pieChart = new PieChart();
        $em= $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT r  ,UPPER(f.nom) as nom ,COUNT(r.id) as num FROM ProjectBundle:Aide r 
join ProjectBundle:Agee f with f.id=r.id_PA where  r.id_user= '.$user->getId().' GROUP BY f.nom');
        $reservations=$query->getScalarResult();
        $data= array();
        $stat=['id', 'id_PA'];
        $i=0;
        array_push($data,$stat);

        $ln= count($reservations);
        for ($i=0 ;$i<count($reservations);$i++){
            $stat=array();
            array_push($stat,$reservations[$i]['nom'],$reservations[$i]['num']/$ln);
            $stat=[$reservations[$i]['nom'],$reservations[$i]['num']*100/$ln];

            array_push($data,$stat);
        }
        $pieChart->getData()->setArrayToDataTable( $data );
        $pieChart->getOptions()->setTitle('Pourcentages des aides par volentaires');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
        return $this->render('@Project\Default\statByUser.html.twig', array('piechart' => $pieChart));
    }



}



