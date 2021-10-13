<?php

namespace App\Repository;

use App\Entity\DatasPieces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DatasPieces|null find($id, $lockMode = null, $lockVersion = null)
 * @method DatasPieces|null findOneBy(array $criteria, array $orderBy = null)
 * @method DatasPieces[]    findAll()
 * @method DatasPieces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DatasPiecesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DatasPieces::class);
    }

    // /**
    //  * @return DatasPieces[] Returns an array of DatasPieces objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DatasPieces
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
