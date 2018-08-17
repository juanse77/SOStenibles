<?php

namespace App\Repository;

use App\Entity\Apadrinamientos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Apadrinamientos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Apadrinamientos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Apadrinamientos[]    findAll()
 * @method Apadrinamientos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ApadrinamientosRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Apadrinamientos::class);
    }

//    /**
//     * @return Apadrinamientos[] Returns an array of Apadrinamientos objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Apadrinamientos
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
