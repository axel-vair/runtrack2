<?php
    /* Initiation de la boucle for. La variable i = 0, s'arrête à 1337, 
    s'incrémente à chaque tour de boucle jusqu'à la condition. 
    Initiation de la condition, si i = 42 alors qu'on affiche i souligné, en gras. */

   for ($i = 0; $i <= 1337; $i++) {
    if  ($i === 42) { 
        echo "<u><b><br>$i</b></u>";
    }else{
        echo "<br>$i";
    }''
}
?> 