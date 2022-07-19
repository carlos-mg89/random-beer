<?php

namespace App\Domain\Model\Beer\Repository;

use App\Domain\Model\Beer\Entity\Beer;

interface BeerRepositoryInterface
{
    public function findRandom(): ?Beer;
}
