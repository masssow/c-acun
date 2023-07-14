<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TherapieVentousesController extends AbstractController
{
    #[Route('/therapie-ventouses', name: 'app_therapie_ventouses')]
    public function index(): Response
    {
        return $this->render('therapie_ventouses/index.html.twig', [
            'controller_name' => 'TherapieVentousesController',
        ]);
    }
}
