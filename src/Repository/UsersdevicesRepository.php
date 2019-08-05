<?php

namespace App\Repository;

use App\Entity\Usersdevices;
use App\Entity\Devices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Usersdevices|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usersdevices|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usersdevices[]    findAll()
 * @method Usersdevices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersdevicesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Usersdevices::class);
    }

    // /**
    //  * @return UsersDevices[] Returns an array of UsersDevices objects
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
    public function findOneBySomeField($value): ?UsersDevices
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
