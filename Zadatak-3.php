<?php

/*

Napisati PHP funkciju koja prima tri numerička parametra: $a, $b i $c. U slučaju da je parametar 
$a veći od 0, funkcija vraća zbir $b i $c, u suprotnom vraća razliku $b i $c. Pozvati funkciju 
sa proizvoljnim vrednostima i ispisati rezultat koji vraća funkcija.

*/
 
    function numbers ($a, $b, $c)
    {
        if($a > 0){
            return $b + $c;
        }else {
            return $b - $c;
        }

    }

    $return_value = numbers(-3, 6, 5);

    echo "Rezultat je : $return_value";



?>