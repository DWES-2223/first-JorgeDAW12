<?php

class Empleado extends Persona8 {

    public function __construct(
        string $nom,
        string $cognoms,
        int $edat,
        private float $sou,
        private array $nombresTelefons)
    {
        parent::__construct($nom, $cognoms, $edat);
    }

    public function anyadirTelefono(int $telefono) : void {
        $this->nombresTelefons[] = $telefono;
    }

    public function listarTelefonos(): void {
        for ($i = 0; $i < sizeof($this->nombresTelefons); $i++) {
            if($i === sizeof($this->nombresTelefons) - 1) {
                echo $this->nombresTelefons[$i];
            } else {
                echo $this->nombresTelefons[$i] . ", ";
            }
        }
    }

    public function vaciarTelefonos(): void {
        unset($this->nombresTelefons);
    }

    public function debePagarImpuestos(): bool {
        return $this->sou > 3333;
    }

    public function __toString(): string {
        $toStringPadre = parent::__toString();
        return "{$toStringPadre}, Sueldo: {$this->sou}, Nombres de Teléfonos: " . $this->listarTelefonos();
    }
}
