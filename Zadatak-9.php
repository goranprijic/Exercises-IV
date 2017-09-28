<?php

/*

Napisati PHP funkciju koja proverava da li su svi elementi datog niza u datom opsegu. Ulazni parametri funkcije su niz, donja granica i gornja granica.

*/
    

$array = [1,2,3,4,5,6,7,5,8,9,0];


function account($array, $a, $b){

    $newArray = [];

        foreach ($array as $val){
            if (($a< $val) && ($b > $val)) {
               $newArray[] = $val;
            }
        }
        
        foreach ($newArray as $val){
           echo "$val  ";
        }
}

account($array, 2, 20);



?>




<?php

$array = [1,2,3,4,5,6,7,5,8,9,0];


function account($array, $a, $b){

    $newArray = [];

        foreach ($array as $val){
            if (($a< $val) && ($b > $val)) {
               $newArray[] = $val;
            }
        }
        
        if( (count($array)) == (count($newArray)) ){
            echo "dati elementi niza jesu u datom opsegu";
        }else {
            echo "dati elementi niza nisu datom opsegu";
        }
}

account($array, 2, 5);


?>