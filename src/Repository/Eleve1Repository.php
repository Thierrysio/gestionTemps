<?php

namespace App\Repository;

use App\Entity\Eleve1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Eleve1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Eleve1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Eleve1[]    findAll()
 * @method Eleve1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Eleve1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Eleve1::class);
    }

    // /**
    //  * @return Eleve1[] Returns an array of Eleve1 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Eleve1
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
