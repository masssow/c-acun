<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EpauleGeleeController extends AbstractController
{
    #[Route('/epaule/gelee', name: 'app_epaule_gelee')]
    public function index(): Response
    {
        return $this->render('epaule_gelee/index.html.twig', [
            'controller_name' => 'EpauleGeleeController',
        ]);
    }
}
