<?php

/*

 Napisati PHP funkciju koja oduzima dva broja. Ulazni parametri su brojevi $a i $b. 
 Funkcija vraća rezultat operacije oduzimanja. Pozvati funkciju sa proizvoljnim 
 vrednostima i ispisati rezultat koji vraća funkcija.

*/
    
    function numbers ($a, $b)
    {
        $c = $a - $b;
        return $c;
    }

    $return_value = numbers(30, 20);

    echo "Rezultat je : $return_value";
?>