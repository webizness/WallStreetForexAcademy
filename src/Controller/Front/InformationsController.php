<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InformationsController extends AbstractController
{
    #[Route('/front/informations', name: 'app_front_informations')]
    public function index(): Response
    {
        return $this->render('front/informations/index.html.twig', [
            'controller_name' => 'InformationsController',
        ]);
    }
}
