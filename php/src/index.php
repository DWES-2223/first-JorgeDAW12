<?php

include_once('functions.php');

echo (esParell(10)) ? "Es parell" : "No es parell";
$array = (arrayAleatori(10, 0, 50));
for ($i = 0; $i < sizeof($array); $i++) {
    if($i == sizeof($array) - 1) {
        echo "$array[$i]";
    } else {
        echo "$array[$i], ";
    }
}

$arrayPruebaMayores = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numeroMayor = major($arrayPruebaMayores);
echo $numeroMayor;
