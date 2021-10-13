<?php

namespace App\Repository;

use App\Entity\DatasPolyms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DatasPolyms|null find($id, $lockMode = null, $lockVersion = null)
 * @method DatasPolyms|null findOneBy(array $criteria, array $orderBy = null)
 * @method DatasPolyms[]    findAll()
 * @method DatasPolyms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DatasPolymsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DatasPolyms::class);
    }

    // /**
    //  * @return DatasPolyms[] Returns an array of DatasPolyms objects
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
    public function findOneBySomeField($value): ?DatasPolyms
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
