<?php

namespace App\Repository;

use App\Entity\Aportaciones;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Aportaciones|null find($id, $lockMode = null, $lockVersion = null)
 * @method Aportaciones|null findOneBy(array $criteria, array $orderBy = null)
 * @method Aportaciones[]    findAll()
 * @method Aportaciones[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AportacionesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Aportaciones::class);
    }

//    /**
//     * @return Aportaciones[] Returns an array of Aportaciones objects
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
    public function findOneBySomeField($value): ?Aportaciones
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
