<?php

namespace App\Repository;

use App\Entity\Captures;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Captures|null find($id, $lockMode = null, $lockVersion = null)
 * @method Captures|null findOneBy(array $criteria, array $orderBy = null)
 * @method Captures[]    findAll()
 * @method Captures[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CapturesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Captures::class);
    }

    // /**
    //  * @return Captures[] Returns an array of Captures objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Captures
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
