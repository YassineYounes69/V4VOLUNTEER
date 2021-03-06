<?php

namespace ProjectBundle\Repository;

/**
 * DemandeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DemandeRepository extends \Doctrine\ORM\EntityRepository
{


    public function findEntitiesByString($str){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT e
                FROM ProjectBundle:Demande e
                WHERE e.titreDemande LIKE :str'
            )
            ->setParameter('str', '%'.$str.'%')
            ->getResult();
    }


}
