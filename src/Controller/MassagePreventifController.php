<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MassagePreventifController extends AbstractController
{
    #[Route('/massage/preventif', name: 'app_massage_preventif')]
    public function index(): Response
    {
        return $this->render('massage_preventif/index.html.twig', [
            'controller_name' => 'MassagePreventifController',
        ]);
    }
}
