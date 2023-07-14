<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcupuntureController extends AbstractController
{
    #[Route('/acupunture', name: 'app_acupunture')]
    public function index(): Response
    {
        return $this->render('acupunture/index.html.twig', [
            'controller_name' => 'AcupuntureController',
        ]);
    }
}
