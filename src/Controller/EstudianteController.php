<?php
// src/Controller/EstudianteController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Estudiante;

class EstudianteController extends AbstractController
{
    /**
     * @Route("/estudiante", name="estudiante_mostrar")
     */
    #[Route('/estudiante')]
    public function mostrar(): Response
    {
        $estudiante = new Estudiante('Magaly', 'Escalera', '13035788', 'Ingeniería en Sistemas');

        return $this->render('estudiante/index.html.twig', [
            'estudiante' => $estudiante,
        ]);
    }
}
