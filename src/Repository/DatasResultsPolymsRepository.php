<?php

namespace App\Repository;

use App\Entity\DatasResultsPolyms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DatasResultsPolyms|null find($id, $lockMode = null, $lockVersion = null)
 * @method DatasResultsPolyms|null findOneBy(array $criteria, array $orderBy = null)
 * @method DatasResultsPolyms[]    findAll()
 * @method DatasResultsPolyms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DatasResultsPolymsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DatasResultsPolyms::class);
    }

    // /**
    //  * @return DatasResultsPolyms[] Returns an array of DatasResultsPolyms objects
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
    public function findOneBySomeField($value): ?DatasResultsPolyms
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
