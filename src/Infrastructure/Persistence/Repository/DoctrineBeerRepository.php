<?php

namespace App\Infrastructure\Persistence\Repository;

use App\Domain\Model\Beer\Entity\Beer;
use App\Domain\Model\Beer\Repository\BeerRepositoryInterface;

class DoctrineBeerRepository implements BeerRepositoryInterface
{
    public function findRandom(): ?Beer
    {
        return null;
    }
}
