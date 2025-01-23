<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TopController extends AbstractController
{
    #[Route('/', name: 'app_top')]
    public function index(): Response
    {
        return $this->render('top/index.html.twig', [
            'controller_name' => 'TopController',
        ]);
    }
}
