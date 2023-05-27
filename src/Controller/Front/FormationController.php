<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormationController extends AbstractController
{
    #[Route('/front/formation', name: 'app_front_formation')]
    public function index(): Response
    {
        return $this->render('front/formation/formation.html.twig', [
            'controller_name' => 'FormationController',
        ]);
    }
}
