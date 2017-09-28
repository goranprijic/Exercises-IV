<?php

/*

Napisati PHP funkciju koja za dati niz $array i dati broj $a koji predstavljaju ulazne parametre funkcije, vraća vrednost koliko je elemenata niza $array deljivo sa brojem $a. Ispisati vrednost koju vraća funkcija.

*/
    
$array = [1,2,3,4,5,6,7,5,8,9,0];


function account($array , $i){
    $newArray = [];
        foreach ($array as $key => $val){
            if ($val % $i == 0) {
               $newArray[]= $val;
            }
        }
    return count($newArray);        
}

$return_value = account($array, 2);

echo($return_value)

?>


