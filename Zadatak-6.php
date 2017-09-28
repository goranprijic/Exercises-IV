<?php

/*

Napisati PHP funkciju koja računa proizvod svih vrednosti elemenata proizvoljnog 
niza koji je ulazni parametar funkcije. Koristiti foreach petlju. Pozvati 
funkciju sa proizvoljnim vrednostima i ispisati proizvod elemenata niza koji 
vraća funkcija.

*/
    

function numbers($array) {
      $a=1;
      foreach ($array as $element) {
          $a *= $element;
          
       }  
     
   return $a;
}

$array = array(4, 7, 10, 22, 1, 17);
$sum = numbers($array);
echo "$sum";



?>