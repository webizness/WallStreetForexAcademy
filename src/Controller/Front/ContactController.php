<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/front/contact', name: 'app_front_contact')]
    public function index(): Response
    {
        return $this->render('front/contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}
