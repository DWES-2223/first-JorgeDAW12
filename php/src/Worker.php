<?php

abstract class Worker extends Person {

    public function __construct(
        string $nom,
        string $cognoms,
        int $edat,
        private array $nombresTelefons)
    {
        parent::__construct($nom, $cognoms, $edat);
    }

    abstract public function calcularSueldo(): float;

    public function debePagarImpuestos(): bool {
        return $this->calcularSueldo() > 3333;
    }
}
