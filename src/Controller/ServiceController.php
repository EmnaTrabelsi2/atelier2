<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }
    #[Route('/showservice/{name}', name: 'app_showservice')]

    public function showservice($name): Response
    {        return $this->render('service/affiche.html.twig', [ 'n' => $name]);
    }
    #[Route('/go-to-index', name: 'app_go_to_index')]
    public function goToIndex(): Response
    {
        return $this->redirectToRoute('app_index');
    }
}
