<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Pin;

class PinController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // return $this->render('pin/index.html.twig', [
        //     'controller_name' => 'PinController',
        // ]);
        // return new Response("Hello World !!!");
        // return $this->json(['message' => 'Hello World']);
        // $pin = new Pin;
        // var_dump($pin);
        // die;

        $pin = new Pin;
        dump($pin);  //(mieux que le var_dump, PRINCIPALEMENT UTILISER)
        // die;

        // $pin = new Pin;
        // dd($pin);  //   (DUMP DIE, meilleur version du dump, plus besoin de mettre le die)


        return $this->render('pin/index.html.twig');
    }
}
