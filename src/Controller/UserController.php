<?php
// src/Controller/UserController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class UserController extends AbstractController
{
   #[Route('/user', name: 'user')]
   public function ajax(): Response
   {
       return $this->render('user/index.html.twig');
   }
}
