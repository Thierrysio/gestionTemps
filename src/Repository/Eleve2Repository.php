<?php

namespace App\Repository;

use App\Entity\Eleve2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Eleve2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Eleve2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Eleve2[]    findAll()
 * @method Eleve2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Eleve2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Eleve2::class);
    }

    // /**
    //  * @return Eleve2[] Returns an array of Eleve2 objects
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
    public function findOneBySomeField($value): ?Eleve2
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
