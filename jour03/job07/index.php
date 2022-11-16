<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$str2 = "";

#On boucle dans la string str
#Si isset de str i +1 n'est pas vide
#Alors str2 = l'index0 de str
#Sinn str2 = l'index +1 de str
for($i = 0; isset($str[$i]); $i++){
    if (!isset($str[$i+1])){
        $str2 = $str2.$str[0];

    }else{ 
        $str2 = $str2.$str[$i+1];
    }
   
}

echo $str2;

?> 