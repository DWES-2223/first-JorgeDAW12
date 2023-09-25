<?php

$hora = $_GET["hora"];
$minut = $_GET["minut"];
$segon = $_GET["segon"];

if(isset($hora, $minut, $segon)) {
    $segon++;
    if ($segon >= 60) {
        $segon = 0;
        $minut++;
        if ($minut >= 60) {
            $minut = 0;
            $hora++;
            if ($hora >= 24) {
                $hora = 0;
            }
        }
    }
    echo "$hora:$minut:$segon";
} else {
    echo "Posa les variables hora, minut i segon pel QueryString";
}
