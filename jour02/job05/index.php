<?php 

$count = 0;
for($i = 1; $i <= 1000; $i++){ 
    /* Si $i est un nombre pair et indivisible par 3, 5, 7
    alors $i est un nombre premier */
    if ($i % 2 !== 0 && $i % 3 !== 0 && $i % 5 !== 0 && $i % 7 !== 0 && $i != 1){
        echo "$i est un NBR premier<br>";
        $count++;
    //Si $i == 2 alors c'est un nombre premier 
    }else if ($i == 2){
        echo "$i est un nombre premier<br>"; 
        $count++;
    //si $i est pair alors on ne l'affiche pas
    }else if ($i % 2 == 0){
        echo "<br>";
    //si $i est égal à 3 5 ou 7 alors c'est un nbr premier
    }else if ($i == 3 || $i == 5 || $i == 7){
        echo "$i est un nombre premier<br>";
        $count++;
    }
}

echo $count;