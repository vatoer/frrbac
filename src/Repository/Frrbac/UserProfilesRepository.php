<?php

namespace App\Repository\Frrbac;

use App\Entity\Frrbac\UserProfiles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserProfiles|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserProfiles|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserProfiles[]    findAll()
 * @method UserProfiles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserProfilesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserProfiles::class);
    }

    // /**
    //  * @return UserProfiles[] Returns an array of UserProfiles objects
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
    public function findOneBySomeField($value): ?UserProfiles
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
