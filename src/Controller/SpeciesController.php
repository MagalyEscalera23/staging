<?php
// src/Controller/SpeciesController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;


class SpeciesController extends AbstractController
{
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    #[Route('/species', name: 'species')]  // Ruta
    public function getSpecies(): Response
    {
        try {
            // solicitud de API de especies
            $response = $this->httpClient->request('GET', 'http://swapi.dev/api/species/3/');

            // Obtencion de los datos
            $data = $response->toArray();

            // datos obtenidos con una plantilla Twig
            return $this->render('especies/species.html.twig', [
                'species' => $data, // Datos 
            ]);
        } catch (\Exception $e) {
            return new Response("Error al obtener las especies: " . $e->getMessage());
        }
    }
}