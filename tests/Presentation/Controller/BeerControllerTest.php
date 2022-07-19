<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BeerControllerTest extends WebTestCase
{
    public function testGivenARandomBeerActionWhenExecutedBeerThenResponseIsSuccessful(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', "/");

        $this->assertResponseIsSuccessful();
    }
}
