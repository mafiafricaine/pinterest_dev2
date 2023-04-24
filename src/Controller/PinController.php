<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinController extends AbstractController
{
    #[Route('/pin', name: 'app_pin')]
    public function index(): Response
    {
        // return $this->render('pin/index.html.twig', [
        //     'controller_name' => 'PinController',
        // ]);
        // return new Response("Hello World !!!");
        // return $this->json(['message' => 'Hello World']);
        return $this->render('pin/index.html.twig');
    }
}
