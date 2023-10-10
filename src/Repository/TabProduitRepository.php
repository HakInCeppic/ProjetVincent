<?php

namespace App\Repository;

use App\Entity\TabProduit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TabProduit>
 *
 * @method TabProduit|null find($id, $lockMode = null, $lockVersion = null)
 * @method TabProduit|null findOneBy(array $criteria, array $orderBy = null)
 * @method TabProduit[]    findAll()
 * @method TabProduit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TabProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TabProduit::class);
    }

//    /**
//     * @return TabProduit[] Returns an array of TabProduit objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TabProduit
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
