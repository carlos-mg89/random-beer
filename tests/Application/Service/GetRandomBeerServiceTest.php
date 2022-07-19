<?php

namespace App\Tests\Application\Service;

use App\Application\Service\GetRandomBeerService;
use App\Domain\Model\Beer\Entity\Beer;
use App\Domain\Model\Beer\Exception\BeerNotFoundException;
use App\Domain\Model\Beer\Repository\BeerRepositoryInterface;
use PHPUnit\Framework\TestCase;

class GetRandomBeerServiceTest extends TestCase
{
    public function testGivenServiceWhenExecutedThenBeerNotFoundExceptionIsThrown(): void
    {
        $this->expectException(BeerNotFoundException::class);

        $beerRepository = $this->getBeerRepositoryMock(null);
        $service = new GetRandomBeerService($beerRepository);

        $service->execute();
    }

    public function testGivenRepositoryWithMockedBeerWhenExecutedThenBeerIsReceived(): void
    {
        $dummyBeer = $this->getDummyBeer();
        $beerRepository = $this->getBeerRepositoryMock($dummyBeer);
        $service = new GetRandomBeerService($beerRepository);

        $beer = $service->execute();

        $this->assertInstanceOf(Beer::class, $beer);
    }

    private function getBeerRepositoryMock(?Beer $expectedBeer): BeerRepositoryInterface
    {
        $mockedRepository = $this->createMock(BeerRepositoryInterface::class);
        $mockedRepository
            ->expects($this->once())
            ->method("findRandom")
            ->willReturn($expectedBeer);

        return $mockedRepository;
    }

    private function getDummyBeer(): Beer
    {
        return new Beer();
    }
}
