<?php

namespace App\Domain\Model\Beer\Entity;

use App\Infrastructure\Persistence\Repository\DoctrineBeerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DoctrineBeerRepository::class)
 */
class Beer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private string $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private string $description;

    /**
     * @ORM\Column(type="float", nullable=false)
     */
    private float $alcoholPercentage;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private string $breweryLocation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    public function setAlcoholPercentage(float $alcoholPercentage): self
    {
        $this->alcoholPercentage = $alcoholPercentage;

        return $this;
    }

    public function getBreweryLocation(): string
    {
        return $this->breweryLocation;
    }

    public function setBreweryLocation(string $breweryLocation): self
    {
        $this->breweryLocation = $breweryLocation;

        return $this;
    }

}
