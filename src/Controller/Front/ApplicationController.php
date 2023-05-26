<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApplicationController extends AbstractController
{
    #[Route('/front/application', name: 'app_front_application')]
    public function index(): Response
    {
        return $this->render('front/application/index.html.twig', [
            'controller_name' => 'ApplicationController',
        ]);
    }
}
