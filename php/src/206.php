<?php

$numero = $_GET["numero"];

if(isset($numero)) {
    if($numero > 0) {
        echo "El número $numero és positiu";
    } elseif ($numero < 0) {
        echo "El número $numero és negatiu";
    } else {
        echo "El número $numero és zero";
    }
} else {
    echo "Posa el numero a comprobar a la variable numero del QueryString";
}
