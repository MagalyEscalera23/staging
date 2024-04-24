<?php
// src/Entity/Viaje.php
namespace App\Entity;

class Viaje
{
    private $origen;
    private $destino;
    private $alojamiento;
    private $actividades;

    public function __construct(string $origen, string $destino, string $alojamiento, array $actividades)
    {
        $this->origen = $origen;
        $this->destino = $destino;
        $this->alojamiento = $alojamiento;
        $this->actividades = $actividades;
    }

    public function getOrigen(): string
    {
        return $this->origen;
    }

    public function getDestino(): string
    {
        return $this->destino;
    }

    public function getAlojamiento(): string
    {
        return $this->alojamiento;
    }

    public function getActividades(): array
    {
        return $this->actividades;
    }
}
