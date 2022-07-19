<?php

namespace App\Application\Service;

use App\Domain\Model\Beer\Entity\Beer;
use App\Domain\Model\Beer\Exception\BeerNotFoundException;
use App\Domain\Model\Beer\Repository\BeerRepositoryInterface;

class GetRandomBeerService
{
    private BeerRepositoryInterface $beerRepository;

    public function __construct(BeerRepositoryInterface $beerRepository)
    {
        $this->beerRepository = $beerRepository;
    }

    /**
     * @throws BeerNotFoundException
     */
    public function execute(): Beer
    {
        $randomBeer = $this->beerRepository->findRandom();

        if (null == $randomBeer) {
            throw new BeerNotFoundException();
        }

        return $randomBeer;
    }
}
