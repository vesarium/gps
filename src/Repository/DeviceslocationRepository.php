<?php

namespace App\Repository;

use App\Entity\Deviceslocation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Deviceslocation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Deviceslocation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Deviceslocation[]    findAll()
 * @method Deviceslocation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeviceslocationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Deviceslocation::class);
    }

    // /**
    //  * @return Deviceslocation[] Returns an array of Deviceslocation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Deviceslocation
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
