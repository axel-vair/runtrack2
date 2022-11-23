<?php
//Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
//Afficher le contenu du cookie.
//Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.



if(isset($_GET['reset'])) {
    setcookie('nbvisites', 1, time()+3600);
    header("Location: index.php");
    exit();
}
if (isset($_COOKIE['nbvisites'])) {
    $newValue = $_COOKIE['nbvisites']+1;
    setcookie('nbvisites',$newValue, time()+3440);
    echo "Le cookie " ."nbvisites" . " est présent";
    echo "\nLa valeur du cookie est : " . $_COOKIE['nbvisites'];


}else{
    echo "Pas de cookie " . 'nbvisites';
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




