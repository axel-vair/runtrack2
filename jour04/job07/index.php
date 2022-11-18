<form method="get">  
     Hauteur  <br>  
    <input type="text" name="hauteur">  
    <br> Largeur  <br>
    <input type="text" name="largeur"> 
    <br>
    <br>
    <input type="submit" value="envoyer">
  </form>  

<pre>
<?php

    ## BOUCLE POUR LE TRIANGLE ##
       
if ($_GET){
for($k = 0; $k <= ($_GET["largeur"]/2); $k++){
    for($l = 0; $l <= (($_GET["largeur"]/2) - $k - 1); $l++){
        echo "&nbsp;";
    }
    echo "/";
    for ($x = 1; $x <= ($k * 2); $x++){
        echo "_";
        
    }
    echo "\<br>";
}
}

    ## BOUCLE POUR LE CARRÉ ##

for ($k = 1; $k <= $_GET["hauteur"]; $k++){
    echo "|";
    if ($k == $_GET["hauteur"]){
        for ($j = 1; $j <= $_GET["largeur"] -1; $j++){
            echo "_";
        }
    }else{
        for ($j = 1; $j <= $_GET["largeur"] -1; $j++){
            echo "&nbsp;";
        }
    }
    echo "|<br>";
}


?>
</pre>