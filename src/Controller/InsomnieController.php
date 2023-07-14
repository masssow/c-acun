<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InsomnieController extends AbstractController
{
    #[Route('/insomnie', name: 'app_insomnie')]
    public function index(): Response
    {
        return $this->render('insomnie/index.html.twig', [
            'controller_name' => 'InsomnieController',
        ]);
    }
}
