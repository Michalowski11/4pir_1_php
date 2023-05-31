<?php
   $tablica = array(5,4,1,2,3,6,21);

   function SumaDNajm($tablica) {
       sort($tablica);
       $suma = ($tablica[0]) + ($tablica[1]);
       echo "Suma dwóch najmniejszych elementów w tablicy = ". $suma;
   }
   SumaDNajm($tablica);