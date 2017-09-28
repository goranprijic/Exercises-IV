<?php

/*

Napisati PHP funkciju koja računa srednju vrednost elemenata proizvoljnog niza koji je ulazni parametar funkcije. Koristiti foreach petlju. Pozvati funkciju sa proizvoljnim vrednostima i ispisati vrednost koju vraća funkcija.

*/
    
function numbers($array) { 
      $a=0;
      foreach ($array as $element) {
          $a += $element;
          
         }  
    $c= $a / 2;    
    return $c;
}

$array = array(13, 5, 10, 4, 8, 16);
$sum = numbers($array);
echo "$sum";





?>