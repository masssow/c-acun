<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DepresionController extends AbstractController
{
    #[Route('/depresion', name: 'app_depresion')]
    public function index(): Response
    {
        return $this->render('depresion/index.html.twig', [
            'controller_name' => 'DepresionController',
        ]);
    }
}
