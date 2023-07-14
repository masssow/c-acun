<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArreterFumerController extends AbstractController
{
    #[Route('/arreter/fumer', name: 'app_arreter_fumer')]
    public function index(): Response
    {
        return $this->render('arreter_fumer/index.html.twig', [
            'controller_name' => 'ArreterFumerController',
        ]);
    }
}
