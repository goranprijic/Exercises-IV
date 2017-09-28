<?php

/*

Napisati PHP funkciju koja vraća prvih 10 parnih brojeva većih od broja 
$n (zajedno sa $n, ako je $n paran broj) koji je ulazni parametar funkcije.

*/
    

function account($n){
    
    $newArray = [];
    
    if($n % 2 == 0){
        
    } else {
        $n = $n + 1;
    }
    
    $newArray[] = $n;
    
    for($i=1; $i <= 10 ; $i++){
        $n = $n + 2;
        $newArray[] = $n;
    }
    
    foreach($newArray as $val){
     echo ("$val ");
    }
}

account(2);



?>