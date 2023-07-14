<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoudeTennisController extends AbstractController
{
    #[Route('/coude-tennis', name: 'app_coude_tennis')]
    public function index(): Response
    {
        return $this->render('coude_tennis/index.html.twig', [
            'controller_name' => 'CoudeTennisController',
        ]);
    }
}
