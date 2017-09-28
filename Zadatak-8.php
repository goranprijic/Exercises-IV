<?php

/*

Napisati PHP funkciju koja vraća niz svih neparnih celih brojeva u intervalu od $a do $b koji su ulazni parametri funkcije.

*/


function account($a,$b){
    $newArray = [];
    
    $c = floor($a);
    $d = ceil($b);

    foreach (range($c, $d) as $number){
        if($number % 2 == 1){
            $newArray[] = $number;
        }
    }

    foreach($newArray as $val){
     echo ("$val ");
    }

    
}

account(2.4 , 7.8);
    





?>