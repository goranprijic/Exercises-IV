<?php

/*

Napisati PHP funkciju koja množi prva dva argumenta i od tog rezultata oduzima 
vrednost trećeg argumenta. Ulazni parametri su brojevi $a, $b i $c. Funkcija 
vraća rezultat. Pozvati funkciju sa proizvoljnim vrednostima i ispisati 
rezultat koji vraća funkcija.

*/
    
    function numbers ($a, $b, $c)
    {
        $d = $a * $b;
        $e = $d - $c; 
        return $e;
    }

    $return_value = numbers(3, 6, 5);

    echo "Rezultat je : $return_value";
?>