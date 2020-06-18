<?php

namespace App\Repository;

use App\Entity\Questionary;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Questionary|null find($id, $lockMode = null, $lockVersion = null)
 * @method Questionary|null findOneBy(array $criteria, array $orderBy = null)
 * @method Questionary[]    findAll()
 * @method Questionary[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionaryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Questionary::class);
    }

    // /**
    //  * @return Questionary[] Returns an array of Questionary objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Questionary
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
