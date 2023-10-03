<?php

function vell($array) : string {
    $fechaMasAntigua = '31.12.9999'; // Inicializar con una fecha muy antigua
    $atletaMasAntiguo = '';

    foreach ($array as $evento) {
        // Obtener la fecha de nacimiento del atleta en el formato 'dd.mm.yyyy'
        $fechaNacimiento = $evento['natalici'];

        // Comparar la fecha actual con la fecha más antigua
        if (strtotime($fechaNacimiento) < strtotime($fechaMasAntigua)) {
            $fechaMasAntigua = $fechaNacimiento;
            $atletaMasAntiguo = $evento['atleta'];
        }
    }

    return $atletaMasAntiguo;
}

function fecha_inglesa($fechaFormatoEspanyol) : string {

}
