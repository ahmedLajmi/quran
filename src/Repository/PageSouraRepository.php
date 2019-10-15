<?php

namespace App\Repository;

use App\Entity\PageSoura;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PageSoura|null find($id, $lockMode = null, $lockVersion = null)
 * @method PageSoura|null findOneBy(array $criteria, array $orderBy = null)
 * @method PageSoura[]    findAll()
 * @method PageSoura[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageSouraRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PageSoura::class);
    }

    // /**
    //  * @return PageSoura[] Returns an array of PageSoura objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PageSoura
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
