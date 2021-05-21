<?php

namespace App\Repository\Frrbac;

use App\Entity\Frrbac\UserProfileExtended;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserProfileExtended|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserProfileExtended|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserProfileExtended[]    findAll()
 * @method UserProfileExtended[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserProfileExtendedRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserProfileExtended::class);
    }

    // /**
    //  * @return UserProfileExtended[] Returns an array of UserProfileExtended objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserProfileExtended
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
