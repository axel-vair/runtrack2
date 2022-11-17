<form method="post">  
     Entrez votre Nom  <br>  
    <input type="text" name="username">  
    <br>  Entrez votre Mot de Passe  <br>  
    <input type="password" name="password"> 
    <br>
    <br>
    <input type="submit" value="envoyer">
  </form>  


<?php

#Condition si la value du tableau post est john et rambo alors on affiche c'est pas ma guerre
if ($_POST["username"] == "John" && $_POST["password"] == "Rambo"){
  $guerre = "C'est pas ma guerre";
  echo $guerre;
#Sinon votre pire cauchemar    
  }else { 
  $pasGuerre = "Votre pire cauchemar";
  echo $pasGuerre;

  }

?>
  