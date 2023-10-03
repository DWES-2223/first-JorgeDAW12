<!DOCTYPE html>
<html>
<head>
    <title>231.php</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
const NUM_MAX_ARRAY = 33;
const MIN_VALUE = 0;
const MAX_VALUE = 100;

$lista33Numeros = [];
$numeroMayor = MIN_VALUE;
$numeroMenor = MAX_VALUE;
$sumaTotalNumeros = 0;

for ($i = 0; $i < NUM_MAX_ARRAY; $i++) {
    $valorAAnyadir = rand(MIN_VALUE, MAX_VALUE);
    $lista33Numeros[$i] = $valorAAnyadir;
    if ($lista33Numeros[$i] > $numeroMayor) {
        $numeroMayor = $lista33Numeros[$i];
    }
    if ($lista33Numeros[$i] < $numeroMenor) {
        $numeroMenor = $lista33Numeros[$i];
    }
    $sumaTotalNumeros += $lista33Numeros[$i];
}
$media = $sumaTotalNumeros / sizeof($lista33Numeros);
echo "El número mayor és: $numeroMayor<br>";
echo "El número menor és: $numeroMenor<br>";
echo "La media es: " . number_format($media, 2);
?>
</body>
</html>
