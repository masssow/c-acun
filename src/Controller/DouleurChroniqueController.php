<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DouleurChroniqueController extends AbstractController
{
    #[Route('/douleur/chronique', name: 'app_douleur_chronique')]
    public function index(): Response
    {
        return $this->render('douleur_chronique/index.html.twig', [
            'controller_name' => 'DouleurChroniqueController',
        ]);
    }
}
