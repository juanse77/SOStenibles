<?php

namespace App\Repository;

use App\Entity\Necesidades;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Necesidades|null find($id, $lockMode = null, $lockVersion = null)
 * @method Necesidades|null findOneBy(array $criteria, array $orderBy = null)
 * @method Necesidades[]    findAll()
 * @method Necesidades[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NecesidadesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Necesidades::class);
    }

//    /**
//     * @return Necesidades[] Returns an array of Necesidades objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Necesidades
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
