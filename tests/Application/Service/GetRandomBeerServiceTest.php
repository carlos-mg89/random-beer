<?php

namespace App\Tests\Application\Service;

use App\Application\Service\GetRandomBeerService;
use App\Domain\Model\Beer\Exception\BeerNotFoundException;
use PHPUnit\Framework\TestCase;

class GetRandomBeerServiceTest extends TestCase
{
    public function testGivenServiceWhenExecutedThenBeerNotFoundExceptionIsThrown(): void
    {
        $this->expectException(BeerNotFoundException::class);

        $service = new GetRandomBeerService();

        $service->execute();
    }
}
