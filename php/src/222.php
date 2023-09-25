<?php

$base = $_GET["base"];
$exponent = $_GET["exponent"];

$resultadoFinal = 1;
for ($i = 0; $i < $exponent; $i++) {
    $resultadoFinal *= $base;
}

if (isset($base, $exponent)) {
    echo "$base^$exponent = $resultadoFinal";
} else {
    echo "Posa la base i l'exponent a les variables base i exponent pel QueryString";
}
