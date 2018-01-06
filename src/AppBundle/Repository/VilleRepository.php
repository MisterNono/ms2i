<?php

namespace AppBundle\Repository;

/**
 * TestRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VilleRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllVille($codePriorite) {
        
        $qb = $this->createQueryBuilder("v")
            ->where("v.codePriorite = :codePriorite")
            ->setParameter("codePriorite", $codePriorite);
        
        return $qb->getQuery()->getResult();
    }
}