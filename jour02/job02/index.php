<?php 
    /* Même chose que précédemment. 
    La condition change, si i = 26 ou i = 37 ou... alors on fait un BR sans afficher I;
    Sinon on affiche I */
    for ($i = 0; $i <= 1337; $i++){
        if ($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233) { 
            echo "<br>";
        }else{
            echo "<br>$i</br>";
        }

    }