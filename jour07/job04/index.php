<?php

// PHP doesnt recognize arithmetic operators in conditions
// so we used string in our code.  
function calcule($a, $operation, $b){
    if($operation === "+"){ 
        return $a + $b;
    }else if($operation === "*"){
        return $a * $b;
    }else if($operation === "-"){
        return $a - $b;
    }else if($operation === "/"){
        return $a / $b;
    }else{
        return $a % $b;
    }
}

echo calcule(1, "%", 3);


