<?php
// src/Controller/PeliculaController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PeliculasController extends AbstractController
{
   #[Route('/Peliculas', name: 'Peliculas')]
   public function ajax(): Response
   {
       return $this->render('Peliculas/index.html.twig');
   }
}