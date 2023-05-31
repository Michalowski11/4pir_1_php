<?php

$tablica1 = array(3, 6, -12, 24, -48);
$tablica2 = array(18, -32, 36, -42, 52);
function sortowanie($tablica1,$tablica2) {
    $tablice = array_merge($tablica1,$tablica2);
    array_multisort($tablice,SORT_DESC,SORT_NUMERIC);
    print_r($tablice);

}
sortowanie($tablica1, $tablica2);
