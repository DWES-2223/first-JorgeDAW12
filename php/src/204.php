<?php

define("DIEZ", 10);
define("EDAD_JUBILACION", 67);
$anyoActual = date("Y");

$edat = $_GET["edat"];
$edatEnDeuAnys = $edat + DIEZ;
$edatFaDeuAnys = $edat - DIEZ;
$anyAJubilarse = $anyoActual;

for ($i = $edat; $i < EDAD_JUBILACION; $i++) {
    $anyAJubilarse += 1;
}

if(isset($edat)) {
    echo "$edatEnDeuAnys\n";
    echo "$edatFaDeuAnys\n";
    echo "$anyAJubilarse";
} else {
    echo "Posa la teu edat actual a la variable edat pel QueryString";
}
