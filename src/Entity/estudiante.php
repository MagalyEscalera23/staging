<?php
// src/Entity/Estudiante.php
namespace App\Entity;

class Estudiante
{
    private $nombre;
    private $apellido;
    private $ci;
    private $carrera;

    public function __construct(string $nombre, string $apellido, string $ci, string $carrera)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->ci = $ci;
        $this->carrera = $carrera;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function getCi(): string
    {
        return $this->ci;
    }

    public function getCarrera(): string
    {
        return $this->carrera;
    }
}
