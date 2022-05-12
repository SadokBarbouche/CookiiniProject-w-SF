<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FoodComponentsController extends AbstractController
{
    #[Route('/food_components', name: 'app_food_components')]
    public function index(): Response
    {
        return $this->render('food_components/index.html.twig');
    }


}
