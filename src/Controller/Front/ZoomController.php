<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZoomController extends AbstractController
{
    #[Route('/front/zoom', name: 'app_front_zoom')]
    public function index(): Response
    {
        return $this->render('front/zoom/index.html.twig', [
            'controller_name' => 'ZoomController',
        ]);
    }
}
