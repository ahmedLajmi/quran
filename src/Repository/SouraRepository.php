<?php

namespace App\Repository;

use App\Entity\Soura;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Soura|null find($id, $lockMode = null, $lockVersion = null)
 * @method Soura|null findOneBy(array $criteria, array $orderBy = null)
 * @method Soura[]    findAll()
 * @method Soura[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SouraRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Soura::class);
    }

    // /**
    //  * @return Soura[] Returns an array of Soura objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Soura
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
