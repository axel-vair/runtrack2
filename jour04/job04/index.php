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

  <table>
    <tr>
        <td><b>Argument</b></td>
        <td><b>Valeur</b></td>
    </tr>
    <tr>
        <td>Nom</td>
        <!-- Echo de la value correspondante du tableau POST-->
        <td><?php echo $_POST["username"] ?></td>
    </tr>
    <tr>
        <td>Prénom</td>
        <td><?php echo $_POST["firstname"] ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $_POST["email"] ?></td>
    </tr>
  </table>
  <?php

#tableau qui vient parcourir les valeurs de POST et returne la value

foreach ($_POST as $key => $value){ 
    return $value;   

}
  ?>