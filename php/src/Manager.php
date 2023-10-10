<?php

class Manager extends Worker {

    public function __construct(
        string $nom,
        string $cognoms,
        int $edat,
        array $nombresTelefons,
        private float $salario)
    {
        parent::__construct($nom, $cognoms, $edat, $nombresTelefons);
    }

    public static function toHtml(Persona $p) {
        // TODO: Implement toHtml() method.
    }

    public function calcularSueldo(): float {
        return $this->salario + $this->salario * $this->edat / 100;
    }
}
