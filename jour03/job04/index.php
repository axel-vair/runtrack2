<?php

$str = "Dans l'espace, personne ne vous entend crier"; 

#Initialisation d'une variable count qui va servir à compter le nombre de caractère
$count = 0; 

#Boucle qui va parcourir la string
#On affiche les caractères et on incrémente la variable count.
for($i = 0; isset($str[$i]); $i++){ 
    echo "$str[$i]";
    $count++;

}
#On affiche le total de la variable count.
    echo "<br>Il y a $count caractères dans cette phrase.";