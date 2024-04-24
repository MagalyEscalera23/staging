<?php
// src/Controller/PersonaController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Persona;

class PersonaController extends AbstractController
{
    /*
     * @Route("/persona", name="persona_mostrar");
     */
    #[Route('/Persona')]
    
    public function mostrar(): Response
    {
        // Creamos una instancia de Persona con nombre y apellido
        $persona = new Persona();
        $persona->setNombre('Juan');
        $persona->setApellido('Pérez');

        // Renderizamos la plantilla mostrando los datos de la persona
        return $this->render('persona/index.html.twig', [
            'persona' => $persona,
        ]);
        
    }
}

