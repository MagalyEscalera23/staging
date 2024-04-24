<?php

// src/Controller/ViajeController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Viaje;

class ViajeController extends AbstractController
{
    /**
     * @Route("/viaje", name="viaje_mostrar")
     */
    #[Route('/viaje')]
    public function mostrar(): Response
    {
        $viaje = new Viaje('Londres', 'París', 'Hotel XYZ', ['Visita al Louvre', 'Paseo en barco por el Sena']);

        return $this->render('viaje/index.html.twig', [
            'viaje' => $viaje,
        ]);
    }
}

