<?php
#Declaration du tableau $array
$array = [200, 204, 173, 98, 171, 404, 459];

#Boucle qui va parcourir les valeurs du tableau et faire le calcul pour savoir si c'est un nombre pair ou non
foreach($array as $value) {
    if ($value % 2 == 0)
        echo "$value est un nombre pair<br>";
    else{
        echo "$value est un nombre impair<br>";

    }
}

