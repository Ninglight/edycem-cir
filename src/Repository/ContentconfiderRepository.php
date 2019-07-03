<?php

namespace App\Repository;

use App\Entity\Contentconfider;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Contentconfider|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contentconfider|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contentconfider[]    findAll()
 * @method Contentconfider[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContentconfiderRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Contentconfider::class);
    }

    // /**
    //  * @return Contentconfider[] Returns an array of Contentconfider objects
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
    public function findOneBySomeField($value): ?Contentconfider
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
