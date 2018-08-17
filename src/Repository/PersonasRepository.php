<?php

namespace App\Repository;

use App\Entity\Personas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Personas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Personas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Personas[]    findAll()
 * @method Personas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonasRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Personas::class);
    }

//    /**
//     * @return Personas[] Returns an array of Personas objects
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
    public function findOneBySomeField($value): ?Personas
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
