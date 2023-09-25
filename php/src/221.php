<?php

$sumatorio = 0;

for ($i = 1; $i <= 10; $i++) {
    $sumatorio+=$i;
    if ($i == 10) {
        echo "$i=$sumatorio";
    } else {
        echo "$i+";
    }
}
