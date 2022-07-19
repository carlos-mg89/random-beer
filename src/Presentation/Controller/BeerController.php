<?php

namespace App\Presentation\Controller;

use App\Application\UseCase\GetRandomBeerUseCase;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BeerController extends AbstractController
{
    #[Route('/', name: 'random_beer')]
    public function randomBeerAction(GetRandomBeerUseCase $getRandomBeerUseCase): Response {
        try {
            $response = $getRandomBeerUseCase->execute();

            return $this->render("random_beer.html.twig", [
                "response" => $response,
            ]);
        } catch (Exception) {
            return new Response(null, 500);
        }
    }
}
