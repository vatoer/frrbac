<?php

namespace App\Repository\Frrbac;

//use App\Entity\Frrbac\Users as Users;
use App\Entity\Frrbac\Users as Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Users::class);
    }

    public function getPermission(String $usernameOrEmail){
        $em = $this->getEntityManager();
        $q = "SELECT 
                u.id userId, 
                r.id rid, r.name , 
                p.name pname,
                opr.id oprId,
                obj.name oname
            FROM App\Entity\Frrbac\Users u 
            JOIN u.role r 
            JOIN r.permission p
            JOIN p.object obj
            JOIN p.operation opr
            WHERE ( u.username = :username OR u.email = :username ) ";
        $query = $em->createQuery($q);
        $params = [
            'username'=> $usernameOrEmail,
            ];
        $query->setParameters($params);
        return $query->getResult();
    }
    
    /**
     * 
     */
    public function hasPermission(String $usernameOrEmail , String $targetObjectName = 'NON EXIST' ){
        $em = $this->getEntityManager();
        $q = "SELECT 
            u.id userId, r.id rid, r.name , 
            p.name pname,
            opr.id oprId,
            obj.name oname
        FROM App\Entity\Frrbac\Users u 
        JOIN u.role r 
        JOIN r.permission p
        JOIN p.object obj
        JOIN p.operation opr
        WHERE ( u.username = :username OR u.email = :username )
        AND obj.name = :objectName ";
        $query = $em->createQuery($q);
        $params = [
            'objectName' => $targetObjectName,
            'username'=> $usernameOrEmail,
            ];
        $query->setParameters($params)
        ->setMaxResults(1);
        return $query->getResult();
    }

    
    // /**
    //  * @return User[] Returns an array of User objects
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
    public function findOneBySomeField($value): ?User
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
