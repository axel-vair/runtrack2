<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$str2 = "";

#On boucle dans la string str
#Si isset n'est pas
for($i = 0; isset($str[$i]); $i++){
    if (isset($str[$i+1])){
        $str2 = $str2.$str[0];
    }else{ 
        $str2 = $str2.$str[$i+1];
    }
   
}

echo $str2;

?> 