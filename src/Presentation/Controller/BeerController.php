<?php

namespace App\Presentation\Controller;

use App\Application\UseCase\GetRandomBeerUseCase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BeerController extends AbstractController
{
    #[Route('/', name: 'random_beer')]
    public function randomBeerAction(GetRandomBeerUseCase $getRandomBeerUseCase): Response
    {
        $response = $getRandomBeerUseCase->execute();

        return new Response();
    }
}
