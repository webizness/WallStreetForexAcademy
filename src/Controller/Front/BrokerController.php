<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BrokerController extends AbstractController
{
    #[Route('/front/broker', name: 'app_front_broker')]
    public function index(): Response
    {
        return $this->render('front/broker/index.html.twig', [
            'controller_name' => 'BrokerController',
        ]);
    }
}
