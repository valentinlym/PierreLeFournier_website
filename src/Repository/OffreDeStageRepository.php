<?php

namespace App\Repository;

use App\Entity\OffreDeStage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OffreDeStage>
 *
 * @method OffreDeStage|null find($id, $lockMode = null, $lockVersion = null)
 * @method OffreDeStage|null findOneBy(array $criteria, array $orderBy = null)
 * @method OffreDeStage[]    findAll()
 * @method OffreDeStage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffreDeStageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OffreDeStage::class);
    }

   /**
    * @return OffreDeStage[] Returns an array of OffreDeStage objects
    */
   public function findNoBrouillon(): array
   {
       return $this->createQueryBuilder('o')
           ->andWhere('o.brouillon = :val')
           ->setParameter('val', 0)
           ->getQuery()
           ->getResult()
       ;
   }
//    /**
//     * @return OffreDeStage[] Returns an array of OffreDeStage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OffreDeStage
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
