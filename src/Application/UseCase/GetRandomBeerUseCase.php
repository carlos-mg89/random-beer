<?php

namespace App\Application\UseCase;

use App\Application\Service\GetRandomBeerService;
use App\Domain\Model\Beer\Exception\BeerNotFoundException;

class GetRandomBeerUseCase
{
    private GetRandomBeerService $getRandomBeerService;

    public function __construct(GetRandomBeerService $getRandomBeerService)
    {
        $this->getRandomBeerService = $getRandomBeerService;
    }

    /**
     * @throws BeerNotFoundException
     */
    public function execute(): GetRandomBeerUseCaseResponse
    {
        $beer = $this->getRandomBeerService->execute();

        return new GetRandomBeerUseCaseResponse($beer);
    }
}
