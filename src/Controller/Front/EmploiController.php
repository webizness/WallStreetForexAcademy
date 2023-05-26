<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmploiController extends AbstractController
{
    #[Route('/front/emploi', name: 'app_front_emploi')]
    public function index(): Response
    {
        return $this->render('front/emploi/index.html.twig', [
            'controller_name' => 'EmploiController',
        ]);
    }
}
