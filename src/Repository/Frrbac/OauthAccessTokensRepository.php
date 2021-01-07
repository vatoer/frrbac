<?php

namespace App\Repository\Frrbac;

use App\Entity\Frrbac\OauthAccessTokens;
use Doctrine\ORM\EntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method OauthAccessTokens|null find($id, $lockMode = null, $lockVersion = null)
 * @method OauthAccessTokens|null findOneBy(array $criteria, array $orderBy = null)
 * @method OauthAccessTokens[]    findAll()
 * @method OauthAccessTokens[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OauthAccessTokensRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OauthAccessTokens::class);
    }
    

    // /**
    //  * @return OauthAccessTokens[] Returns an array of OauthAccessTokens objects
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
    public function findOneBySomeField($value): ?OauthAccessTokens
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
