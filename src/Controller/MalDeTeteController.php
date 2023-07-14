<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MalDeTeteController extends AbstractController
{
    #[Route('/mal/de/tete', name: 'app_mal_de_tete')]
    public function index(): Response
    {
        return $this->render('mal_de_tete/index.html.twig', [
            'controller_name' => 'MalDeTeteController',
        ]);
    }
}
