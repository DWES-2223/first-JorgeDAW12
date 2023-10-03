<?php

const NUM_MAX_ARRAY = 100;


$lista100Numeros = [];
for ($i = 0; $i < NUM_MAX_ARRAY; $i++) {
    $valorAAnyadir = rand(0, 1);
    if($valorAAnyadir === 0) {
        $lista100Numeros[$i] = "M";
    } else {
        $lista100Numeros[$i] = "F";
    }
}

$numeroDeM = 0;
$numeroDeF = 0;
for ($j = 0; $j < sizeof($lista100Numeros); $j++) {
    if($lista100Numeros[$j] == "M") {
        $numeroDeM++;
    } else {
        $numeroDeF++;
    }
}

echo "M => $numeroDeM<br>";
echo "F => $numeroDeF";
