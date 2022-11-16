<?php

#Ma string str et mes voyelles dans un tableau
$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelles = ["a", "e", "i", "I", "o", "u", "y"]; 

#Une boucle for qui va parcourir la string
#Une boucle for qui va parcourir le tableau des voyelles
#Si le $i se trouve dans le tableau des voyelles alors on affiche
for($i = 0; isset($str[$i]); $i++){
    for($j = 0; isset($voyelles[$j]); $j++)
        if($str[$i] == $voyelles[$j]){
            echo $str[$i];
    }
}