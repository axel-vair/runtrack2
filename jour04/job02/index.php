<form method="get">  
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
        <!-- Echo de la value correspondante du tableau GET-->
        <td><?php echo $_GET["username"] ?></td>
    </tr>
    <tr>
        <td>Prénom</td>
        <td><?php echo $_GET["firstname"] ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $_GET["email"] ?></td>
    </tr>
  </table>
  <?php

#tableau qui vient parcourir les valeurs de Get et returne la value

foreach ($_GET as $key => $value){ 
    return $value;   

}
  ?>