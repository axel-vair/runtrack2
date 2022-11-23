<?php

session_start();  //Début de la session

// Variable globale qui va incrémenter le nombre de visites
//Condition : si le la variable globale session 'nb visites' est set, alors on fait un echo et on affiche le nombre de visites
// Si le button est enclenché alors on repasse à 0
if(isset($_GET['reset']) == true){
    $_SESSION['nbvisites'] = 0;
}

if (isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites']++;
    echo "Vous avez visité le site le plus beau de l'univers ".$_SESSION['nbvisites']." fois";

}else{
    $_SESSION['nbvisites'] = 1;
    echo "Vous avez visité le site le plus beau de l'univers ".$_SESSION['nbvisites']." fois";
}





?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="get" action="index.php">
<button type="submit" name="reset" value="reset">Reset</button>
</form>

</body>
</html>