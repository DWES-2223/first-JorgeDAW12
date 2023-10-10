<?php

class Enterprise {

    public function __construct(
        protected string $nom,
        protected string $direccio,
        protected array $workers)
    {}

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function getDireccio(): string {
        return $this->direccio;
    }

    public function setDireccio(string $direccio): void {
        $this->direccio = $direccio;
    }

    public function addWorker(Worker $t) {
        $this->workers[] = $t;
    }

    public function listWorkersHtml() : string {
        return "";
    }

    public function getCosteNominas(): float {
        $costeTotalNominas = 0;
        for ($i = 0; $i < sizeof($this->workers); $i++) {
            $costeTotalNominas += $this->workers[$i]->calcularSueldo();
        }
        return $costeTotalNominas;
    }
}
