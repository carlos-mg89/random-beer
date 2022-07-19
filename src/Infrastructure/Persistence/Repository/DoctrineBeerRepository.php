<?php

namespace App\Infrastructure\Persistence\Repository;

use App\Domain\Model\Beer\Entity\Beer;
use App\Domain\Model\Beer\Repository\BeerRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Beer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Beer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Beer[]    findAll()
 * @method Beer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DoctrineBeerRepository extends ServiceEntityRepository implements BeerRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Beer::class);
    }

    public function findRandom(): ?Beer
    {
        return $this->createQueryBuilder('beer')
            ->orderBy('rand()')
            ->getQuery()
            ->setMaxResults(1)
            ->getResult()[0];
    }
}
