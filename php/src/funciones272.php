<?php

function fecha_inglesa($date){
    $fechaPartida = explode('.', $date);
    if (count($fechaPartida) === 3) {
        return implode('/', array_reverse($fechaPartida));
    } else {
        return "Formato de fecha incorrecto";
    }
}

function vell($array){
    $fechaMasVieja = null;
    $llaveFechaMasVieja = null;

    foreach ($array as $llave => $fecha){
        $fechaIngles = fecha_inglesa($fecha);
        $fechaConvertida = strtotime($fechaIngles);
        if($fechaConvertida < $fechaMasVieja || $fechaMasVieja === null){
            $fechaMasVieja = $fechaConvertida;
            $llaveFechaMasVieja = $llave;
        }
    }
    return $llaveFechaMasVieja;
}

function laureado($array){
    $vecesRepetidas = array_count_values($array);
    arsort($vecesRepetidas);
    $masRepetido = reset($vecesRepetidas);
    $valorMasRepetido = array_keys($vecesRepetidas,$masRepetido);
    return$valorMasRepetido[0];
}

function any($fecha){
    $fechaPartida = explode('.',$fecha);
    return $fechaPartida[2];
}

function jove($nacimientos, $fechas){
    $atletaMasJoven = null;
    $menorDiferencia = null;
    $atletasMasJovenArray = [];
    foreach ($nacimientos as $indice => $natalici){
        $fecha = $fechas[$indice];
        $anyoRecord = any($fecha);
        $diferencia = $anyoRecord - intval($natalici);
        if ($diferencia < $menorDiferencia || $menorDiferencia === null){
            $menorDiferencia = $diferencia;
            $atletaMasJoven = $indice;
        }
    }
    $atletasMasJovenArray = [$atletaMasJoven,$menorDiferencia];
    return $atletasMasJovenArray;
}
function array_column_ext($array, $columnkey, $indexkey = null) {
    $result = array();
    foreach ($array as $subarray => $value) {
        if (array_key_exists($columnkey,$value)) { $val = $array[$subarray][$columnkey]; }
        else if ($columnkey === null) { $val = $value; }
        else { continue; }

        if ($indexkey === null) { $result[] = $val; }
        elseif ($indexkey == -1 || array_key_exists($indexkey,$value)) {
            $result[($indexkey == -1)?$subarray:$array[$subarray][$indexkey]] = $val;
        }
    }
    return $result;
}
