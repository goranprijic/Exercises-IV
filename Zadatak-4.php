<?php

/*

Napisati PHP funkciju koja vraća najmanji element niza. Niz je ulazni parametar 
funkcije. Koristiti foreach petlju. Pozvati funkciju sa proizvoljnim 
vrednostima i ispisati najmanji element niza koji vraća funkcija.

*/
 

function minimum($niz) {
     $min = $niz[0];
    
    foreach ($niz as $element) {
        if ($element < $min) {
            
           $min=$element;
        }  
     }
    
    return $min;
    
}



$niz = array(13, 5, 10, 8, 16);
$min = minimum($niz);

echo $min;


?>