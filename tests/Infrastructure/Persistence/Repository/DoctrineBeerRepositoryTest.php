<?php

namespace App\Tests\Infrastructure\Persistence\Repository;

use App\Infrastructure\Persistence\Repository\DoctrineBeerRepository;
use PHPUnit\Framework\TestCase;

class DoctrineBeerRepositoryTest extends TestCase
{
    public function testGivenDoctrineRepositoryWithDummyImplementationWhenFindRandomeIsCalledThenNullIsReturned(): void
    {
        $service = new DoctrineBeerRepository();

        $beer = $service->findRandom();

        $this->assertNull($beer);
    }
}
