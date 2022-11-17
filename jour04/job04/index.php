<form method="post">  
     Entrez votre Nom  <br>  
    <input type="text" name="username">  
    <br>  Entrez votre Prénom  <br>  
    <input type="text" name="firstname"> 
    <br>  Entrez votre Email  <br>  
    <input type = "email" name = "email"> 
    <br>
    <br>
    <input type="submit" value="envoyer">
  </form>  


  <?php

#tableau qui vient parcourir les valeurs de POST et returne la value

if($_POST){
  echo "
  <table>
    <thead>
        <tr>
          <td>Argument</td>
          <td>Valeur</td>
        </tr>
    </thead>
    ";

foreach ($_POST as $key => $value){ 
    echo "
      <tr>
        <td>$key</td>
        <td>$value</td>
      </tr>
    ";
  }
 
}
  ?>