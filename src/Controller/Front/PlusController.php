<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlusController extends AbstractController
{
    #[Route('/front/plus', name: 'app_front_plus')]
    public function index(): Response
    {
        return $this->render('front/plus/plus.html.twig', [
            'controller_name' => 'PlusController',
        ]);
    }
}
