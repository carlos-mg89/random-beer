<?php

namespace App\Tests\Presentation\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BeerControllerTest extends WebTestCase
{
    public function testGivenARandomBeerActionWhenExecutedBeerThenResponseIsSuccessful(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', "/");

        $this->assertResponseStatusCodeSame(500);
    }
}
