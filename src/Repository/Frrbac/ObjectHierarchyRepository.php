<?php

namespace App\Repository\Frrbac;

use App\Entity\Frrbac\ObjectHierarchy;
use Doctrine\ORM\EntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method ObjectHierarchy|null find($id, $lockMode = null, $lockVersion = null)
 * @method ObjectHierarchy|null findOneBy(array $criteria, array $orderBy = null)
 * @method ObjectHierarchy[]    findAll()
 * @method ObjectHierarchy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjectHierarchyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ObjectHierarchy::class);
    }
    

    // /**
    //  * @return ObjectHierarchy[] Returns an array of ObjectHierarchy objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ObjectHierarchy
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
