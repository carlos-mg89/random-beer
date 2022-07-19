<?php

namespace App\Tests\Application\UseCase;

use App\Application\UseCase\GetRandomBeerUseCase;
use App\Application\UseCase\GetRandomBeerUseCaseResponse;
use PHPUnit\Framework\TestCase;

class GetRandomBeerUseCaseTest extends TestCase
{
    public function testGivenUseCaseWhenExecutedThenUseCaseResponseIsReturned(): void
    {
        $useCase = new GetRandomBeerUseCase();

        $response = $useCase->execute();

        $this->assertInstanceOf(GetRandomBeerUseCaseResponse::class, $response);
    }
}
