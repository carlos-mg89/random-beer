<?php

namespace App\Application\UseCase;

use App\Domain\Model\Beer\Entity\Beer;

class GetRandomBeerUseCaseResponse
{
    private Beer $beer;

    public function __construct(Beer $beer)
    {
        $this->beer = $beer;
    }

    public function getBeer(): Beer
    {
        return $this->beer;
    }
}
