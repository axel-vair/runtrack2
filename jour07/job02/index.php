<?php

$param1 = true;
$param2 = false; 

function bonjour($jour){
    if($jour){
        echo "Bonjour";
    }else{
        echo "Bonsoir";
    }
    return $jour;
}

bonjour($param2);

