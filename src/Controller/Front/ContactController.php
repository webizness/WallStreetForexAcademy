<?php

namespace App\Controller\Front;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/front/contact', name: 'app_front_contact')]
    public function index(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $contact = new Contact();
         $form = $this->createForm(ContactType::class, $contact);

         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($contact);
            $entityManager->flush();

            $email = (new Email())
            ->from($contact->getEmail())
            ->to('moneyandsucces@gmail.com')
            ->subject($contact->getSubject())
            ->html($contact->getMessage());

        $mailer->send($email);

            $this->addFlash(
                'success',
                'Votre message a été envoyé avec succès !'
            );
            return $this ->redirectToRoute('app_front_contact');
        }

        return $this->render('front/contact/contact.html.twig', [
            'form' => $form->createView(),
            
        ]);
    }
}
