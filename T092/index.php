<?php

$tablica_i = ['Jan', 'Barbara', 'Marek', 'Jan', 'Oskar', 'Katarzyna'];

function ile_dz($tablica) {
    $suma = 0;
    foreach ($tablica as $elem) {
        if($elem[strlen($elem)-1]=="a")
            $suma+=1;
    }
    return $suma;
}

echo "W podanej tablicy ilość imion dziewczyn wynosi: ".ile_dz($tablica_i);