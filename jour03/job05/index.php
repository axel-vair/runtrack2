<?php

#Variable contenant la string
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$voyelles = 0;
$consonnes = 0; 

#Tableaux contenant les voyelles et consonnes
$array_consonnes = ["b", "c", "d", "f", "g", "h", "j","k", "l", "m", "n", "p","q", "r", "s", "t", "v", "w", "x", "z"];
$array_voyelles = ["a", "e", "i", "o", "u", "y", "A", "E", "I","O", "U", "Y"];


#Boucle for parcourant la string
#Boucle for parcourant le tableau voyelles puis condition vérifiant si l'index i est présent dans le tableau voyelles, si oui, on incrémente voyelles
for($i = 0; isset($str[$i]); $i++){
    for ($j = 0; isset($array_voyelles[$j]); $j++){
        if($str[$i] == $array_voyelles[$j]){ 
            $voyelles++;
        }
    }
#Même chose que précédemment avec le deuxième tableau
    for($h = 0; isset($array_consonnes[$h]); $h++){
        if($str[$i] == $array_consonnes[$h]){
            $consonnes++;
        }
     }
    
}

$dic = [ "voyelles" => $voyelles,
        "consonnes" => $consonnes]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
        <tr>
            <td>Voyelles</td>
            <td>Consonnes</td>
        </tr>

        <tr>
            <td><?php echo $dic["voyelles"] ?></td>
            <td><?php echo $dic["consonnes"] ?></td>
        </tr>
    </table>
</body>
</html>