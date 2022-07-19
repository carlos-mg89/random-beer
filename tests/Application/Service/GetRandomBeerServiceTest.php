<?php

namespace App\Tests\Application\Service;

use App\Application\Service\GetRandomBeerService;
use App\Domain\Model\Beer\Exception\BeerNotFoundException;
use App\Domain\Model\Beer\Repository\BeerRepositoryInterface;
use PHPUnit\Framework\TestCase;

class GetRandomBeerServiceTest extends TestCase
{
    public function testGivenServiceWhenExecutedThenBeerNotFoundExceptionIsThrown(): void
    {
        $this->expectException(BeerNotFoundException::class);
        $beerRepository = $this->getBeerRepositoryMock();

        $service = new GetRandomBeerService($beerRepository);

        $service->execute();
    }

    private function getBeerRepositoryMock(): BeerRepositoryInterface
    {
        $mockedRepository = $this->createMock(BeerRepositoryInterface::class);

        return $mockedRepository;
    }
}
