<?php

$edat = $_GET["edat"];

if(isset($edat)) {
    if($edat < 3) {
        echo "ets un bebé";
    } elseif ($edat >= 3 && $edat <= 12) {
        echo "ets un xiquet";
    } elseif ($edat >= 13 && $edat <= 17) {
        echo "ets un adolescent";
    } elseif ($edat >= 18 && $edat <= 66) {
        echo "ets un adult";
    } else {
        echo "ets un jubilat";
    }
} else {
    echo "Posa la teu edat actual a la variable edat pel QueryString";
}
