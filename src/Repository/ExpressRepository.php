<?php

namespace App\Repository;

use App\Entity\Express;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Express|null find($id, $lockMode = null, $lockVersion = null)
 * @method Express|null findOneBy(array $criteria, array $orderBy = null)
 * @method Express[]    findAll()
 * @method Express[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExpressRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Express::class);
    }

//    /**
//     * @return Express[] Returns an array of Express objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Express
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
