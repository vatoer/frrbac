<?php

namespace App\Repository\Frrbac;

use App\Entity\Frrbac\ObjectTarget;
use Doctrine\ORM\EntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method ObjectTarget|null find($id, $lockMode = null, $lockVersion = null)
 * @method ObjectTarget|null findOneBy(array $criteria, array $orderBy = null)
 * @method ObjectTarget[]    findAll()
 * @method ObjectTarget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjectTargetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ObjectTarget::class);
    }
    

    // /**
    //  * @return ObjectTarget[] Returns an array of ObjectTarget objects
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
    public function findOneBySomeField($value): ?ObjectTarget
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
