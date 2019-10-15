<?php

namespace App\Repository;

use App\Entity\SouraPage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SouraPage|null find($id, $lockMode = null, $lockVersion = null)
 * @method SouraPage|null findOneBy(array $criteria, array $orderBy = null)
 * @method SouraPage[]    findAll()
 * @method SouraPage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SouraPageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SouraPage::class);
    }

    // /**
    //  * @return SouraPage[] Returns an array of SouraPage objects
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
    public function findOneBySomeField($value): ?SouraPage
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
