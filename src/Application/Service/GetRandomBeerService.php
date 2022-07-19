<?php

namespace App\Application\Service;

use App\Domain\Model\Beer\Exception\BeerNotFoundException;

class GetRandomBeerService
{
    /**
     * @throws BeerNotFoundException
     */
    public function execute(): void
    {
        throw new BeerNotFoundException();
    }
}
