<?php

namespace App\Repository\Frrbac;

use App\Entity\Frrbac\RealmOptions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RealmOptions|null find($id, $lockMode = null, $lockVersion = null)
 * @method RealmOptions|null findOneBy(array $criteria, array $orderBy = null)
 * @method RealmOptions[]    findAll()
 * @method RealmOptions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RealmOptionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RealmOptions::class);
    }

    // /**
    //  * @return RealmOptions[] Returns an array of RealmOptions objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RealmOptions
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
