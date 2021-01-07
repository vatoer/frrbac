<?php

namespace App\Repository\Frrbac;

use App\Entity\Frrbac\OauthRefreshTokens;
use Doctrine\ORM\EntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method OauthRefreshTokens|null find($id, $lockMode = null, $lockVersion = null)
 * @method OauthRefreshTokens|null findOneBy(array $criteria, array $orderBy = null)
 * @method OauthRefreshTokens[]    findAll()
 * @method OauthRefreshTokens[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OauthRefreshTokensRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OauthRefreshTokens::class);
    }
    

    // /**
    //  * @return OauthRefreshTokens[] Returns an array of OauthRefreshTokens objects
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
    public function findOneBySomeField($value): ?OauthRefreshTokens
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
