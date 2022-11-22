<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if (isset($_GET["str"])){
    if (isset($_GET["fonction"]) == "gras"){
         $shell = "<b>" . $_GET['str'] . "</b>";
    }
   echo $shell;
}




?>
    <form action="" method="get">
        <input type="text" name="str" placeholder="entrez votre texte"></input>
        <select name="fonction">
            <option value="gras" name="gras">gras</option>
            <option value="cesar" name="cesar">cesar</option>
            <option value="plateforme" name="plateforme">plateforme</option>
        </select>
        <input type="submit" value="envoyer">
    </form>


</body>
</html>