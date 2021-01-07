<?php

namespace App\Repository\Frrbac;

use App\Entity\Frrbac\OauthClients;
use Doctrine\ORM\EntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method OauthClients|null find($id, $lockMode = null, $lockVersion = null)
 * @method OauthClients|null findOneBy(array $criteria, array $orderBy = null)
 * @method OauthClients[]    findAll()
 * @method OauthClients[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OauthClientsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OauthClients::class);
    }
    

    // /**
    //  * @return OauthClients[] Returns an array of OauthClients objects
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
    public function findOneBySomeField($value): ?OauthClients
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
