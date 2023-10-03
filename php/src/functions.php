<?php

function esParell(int $a) : bool {
    return $a % 2 === 0;
}

function arrayAleatori(int $tam, int $min, int $max) : array {
    $array = array();
    for ($i = 0; $i < $tam; $i++) {
        $array[$i] = rand($min, $max);
    }
    return $array;
}

function countParells(array $array): int {
    $numerosParesArray = 0;
    for ($i = 0; $i < sizeof($array); $i++) {
        if ($array[$i] % 2 === 0) {
            $numerosParesArray++;
        }
    }
    return $numerosParesArray;
}

function major(array $array): int {
    $numeroMayor = 0;
    for ($i = 0; $i < sizeof($array); $i++) {
        if ($array[$i] > $numeroMayor) {
            $numeroMayor = $array[$i];
        }
    }
    return $numeroMayor;
}

function concatenar(...$paraules) : string {
    return implode(' ', $paraules);
}

function digits(int $num): int {
    $numeroString = (string)$num;
    return strlen($numeroString);
}

function digitsN(int $num, int $post): int {
    return 1;
}
