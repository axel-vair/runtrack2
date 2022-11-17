<form method="get">  
     Entrez un nombre  <br>  
    <input type="text" name="nombre">  
    <br>
    <br>
    <input type="submit" value="envoyer">
  </form>  


<?php

#Condition si la value du tableau post est john et rambo alors on affiche c'est pas ma guerre
if ($_GET["nombre"] % 2 == 0 ){
  echo "Nombre pair";
#Sinon votre pire cauchemar    
}else { 
  echo "Nombre impair";

}

?>
  