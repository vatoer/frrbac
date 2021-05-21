<?php

namespace App\Repository\Frrbac;

use App\Entity\Frrbac\OptionReferences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OptionReferences|null find($id, $lockMode = null, $lockVersion = null)
 * @method OptionReferences|null findOneBy(array $criteria, array $orderBy = null)
 * @method OptionReferences[]    findAll()
 * @method OptionReferences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OptionReferencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OptionReferences::class);
    }

    // /**
    //  * @return OptionReferences[] Returns an array of OptionReferences objects
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
    public function findOneBySomeField($value): ?OptionReferences
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
