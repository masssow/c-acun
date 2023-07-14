<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TuinaController extends AbstractController
{
    #[Route('/tuina', name: 'app_tuina')]
    public function index(): Response
    {
        return $this->render('tuina/index.html.twig', [
            'controller_name' => 'TuinaController',
        ]);
    }
}
