<?php

namespace App\DataFixtures;

use App\Domain\Model\Beer\Entity\Beer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BeerFixture extends Fixture
{
    private array $dummyBeers = [
        [
            "name" => "Leffe Brune",
            "description" => "Leffe Brune description",
            "alcoholPercentage" => 6.5,
            "breweryLocation" => "Charreau des Capucines 23, 5500 Dinant, Bèlgica",
        ],
        [
            "name" => "Moritz Epidor",
            "description" => "Moritz Epidor description",
            "alcoholPercentage" => 7.2,
            "breweryLocation" => "Ronda de Sant Antoni, 41, 08011 Barcelona",
        ],
        [
            "name" => "EFFECTIVE - Imperial Milk Stout",
            "description" => "EFFECTIVE - Imperial Milk Stout description",
            "alcoholPercentage" => 9.5,
            "breweryLocation" => "Carretera de Parlavà, GI-642, 22, 17131 Rupià, Girona",
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach ($this->dummyBeers as $dummyBeer) {
            $beer = new Beer();
            $beer
                ->setName($dummyBeer["name"])
                ->setDescription($dummyBeer["description"])
                ->setAlcoholPercentage($dummyBeer["alcoholPercentage"])
                ->setBreweryLocation($dummyBeer["breweryLocation"])
            ;
            $manager->persist($beer);
        }

        $manager->flush();
    }
}
