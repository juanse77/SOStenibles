<?php

namespace App\Repository;

use App\Entity\Proyectos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Proyectos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Proyectos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Proyectos[]    findAll()
 * @method Proyectos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProyectosRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Proyectos::class);
    }

//    /**
//     * @return Proyectos[] Returns an array of Proyectos objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Proyectos
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
