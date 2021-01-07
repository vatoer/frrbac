<?php

namespace App\Repository\Frrbac;

use App\Entity\Frrbac\OauthAuthorizationCodes;
use Doctrine\ORM\EntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method OauthAuthorizationCodes|null find($id, $lockMode = null, $lockVersion = null)
 * @method OauthAuthorizationCodes|null findOneBy(array $criteria, array $orderBy = null)
 * @method OauthAuthorizationCodes[]    findAll()
 * @method OauthAuthorizationCodes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OauthAuthorizationCodesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OauthAuthorizationCodes::class);
    }
    

    // /**
    //  * @return OauthAuthorizationCodes[] Returns an array of OauthAuthorizationCodes objects
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
    public function findOneBySomeField($value): ?OauthAuthorizationCodes
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
