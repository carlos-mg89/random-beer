<?php

namespace App\Application\UseCase;

class GetRandomBeerUseCase
{
    public function execute(): GetRandomBeerUseCaseResponse
    {
        return new GetRandomBeerUseCaseResponse();
    }
}
