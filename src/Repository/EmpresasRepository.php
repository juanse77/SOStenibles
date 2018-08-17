<?php

namespace App\Repository;

use App\Entity\Empresas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Empresas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Empresas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Empresas[]    findAll()
 * @method Empresas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmpresasRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Empresas::class);
    }

//    /**
//     * @return Empresas[] Returns an array of Empresas objects
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
    public function findOneBySomeField($value): ?Empresas
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
