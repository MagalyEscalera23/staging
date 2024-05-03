<?php
// src/Controller/MenuController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    /**
     * @Route("/menu", name="menu")
     */
    #[Route('/menu', name: 'menu')] 
    public function index(): Response
    {
        $menuItems = [
            ['text' => 'Inicio', 'url' => '/'],
            ['text' => 'Acerca de', 'url' => '/about'],
            ['text' => 'Servicios', 'url' => '/services'],
            ['text' => 'Contacto', 'url' => '/contact'],
        ];

        return $this->render('menu/index.html.twig', [
            'menuItems' => $menuItems,
        ]);
    }
}

