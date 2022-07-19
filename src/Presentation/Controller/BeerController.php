<?php

namespace App\Presentation\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BeerController extends AbstractController
{
    #[Route('/', name: 'random_beer')]
    public function randomBeerAction(): Response
    {
        return new Response();
    }
}
