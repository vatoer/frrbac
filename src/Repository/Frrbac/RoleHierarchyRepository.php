<?php

namespace App\Repository\Frrbac;

use App\Entity\Frrbac\RoleHierarchy;
use Doctrine\ORM\EntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method RoleHierarchy|null find($id, $lockMode = null, $lockVersion = null)
 * @method RoleHierarchy|null findOneBy(array $criteria, array $orderBy = null)
 * @method RoleHierarchy[]    findAll()
 * @method RoleHierarchy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoleHierarchyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RoleHierarchy::class);
    }
    

    // /**
    //  * @return RoleHierarchy[] Returns an array of RoleHierarchy objects
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
    public function findOneBySomeField($value): ?RoleHierarchy
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
