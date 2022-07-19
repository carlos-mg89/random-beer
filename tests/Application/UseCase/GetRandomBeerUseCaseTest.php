<?php

namespace App\Tests\Application\UseCase;

use App\Application\Service\GetRandomBeerService;
use App\Application\UseCase\GetRandomBeerUseCase;
use App\Application\UseCase\GetRandomBeerUseCaseResponse;
use App\Domain\Model\Beer\Entity\Beer;
use PHPUnit\Framework\TestCase;

class GetRandomBeerUseCaseTest extends TestCase
{
    public function testGivenUseCaseWhenExecutedThenUseCaseResponseIsReturned(): void
    {
        $getRandomBeerService = $this->getGetRandomBeerServiceMock();
        $useCase = new GetRandomBeerUseCase($getRandomBeerService);

        $response = $useCase->execute();

        $this->assertInstanceOf(GetRandomBeerUseCaseResponse::class, $response);
    }

    public function testGivenBeerServiceWhenUseCaseIsExecutedThenServiceIsExecutedToo(): void
    {
        $getRandomBeerService = $this->getGetRandomBeerServiceMock();
        $useCase = new GetRandomBeerUseCase($getRandomBeerService);

        $response = $useCase->execute();
    }

    private function getGetRandomBeerServiceMock(): GetRandomBeerService
    {
        $mockedRepository = $this->createMock(GetRandomBeerService::class);
        $mockedRepository
            ->expects($this->once())
            ->method("execute")
            ->willReturn(new Beer());

        return $mockedRepository;
    }

    public function testGivenBeerServiceWhenUseCaseIsExecutedThenResponseWillContainBeer(): void
    {
        $getRandomBeerService = $this->getGetRandomBeerServiceMock();
        $useCase = new GetRandomBeerUseCase($getRandomBeerService);

        $response = $useCase->execute();

        $this->assertInstanceOf(Beer::class, $response->getBeer());
    }
}
