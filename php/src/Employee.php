<?php

class Employee extends Worker {

    public function __construct(
        string $nom,
        string $cognoms,
        int $edat,
        array $nombresTelefons,
        private int $horasTrabajadas,
        private float $precioPorHora)
    {
        parent::__construct($nom, $cognoms, $edat, $nombresTelefons);
    }

    public static function toHtml(Persona $p) {
        // TODO: Implement toHtml() method.
    }

    public function calcularSueldo(): float {
        return $this->horasTrabajadas * $this->precioPorHora;
    }
}
