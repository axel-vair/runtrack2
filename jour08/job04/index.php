<?php

if(!isset($_COOKIE['monCookie'])){ // SI MON COOKIE N'EST PAS SET
    if(isset($_GET['prenom'])){ // SI MON GET EST SET
        setcookie('monCookie', $_GET['prenom'], time()+3000 ); // ON MET LA VALEUR DU GET DANS LE SETCOOKIE
        header("Location: index.php"); // ON REFRESH LA PAGE
}   else{ // SI MON COOKIE N'EST SET PAS SET ALORS ON AFFICHE LE FORMULAIRE
        echo "<form method='get'>
        <label>
            <input type='text' name='prenom'>
        </label>
        <button type='submit' name='connexion'>connexion</button>
    </form>";

    }
}else{ // SI LE COOKIE EST SET ALORS ON AFFICHE LA PAGE AVEC LE BOUTON DECO
    echo "<form method='get'>
            <button type='submit' name='deconnexion'>deconnexion</button>
        </form>";
    echo "Bonjour " . $_COOKIE['monCookie']; // ET L'ON AFFICHE LE NOM DE RENTRÉ DANS GET
    if(isset($_GET['deconnexion'])){ // SI ON SE DECONNECTE ALORS
        setcookie('monCookie', $_GET['prenom'], time()-3000 ); // ON DONNE UNE VALEUR NEGATIVE AU COOKIE POUR L'UNSET
        header("Location: index.php");  // ON REFRESH LA PAGE ET L'ON RETOMBE SUR LA CONDITION DU DÉPART
    }
}

if(isset($_GET['prenom'])) { // SI LE TABLEAU EST REMPLI ALORS COOKIE PREND LA VALEUR DU GET PRENOM
        $_COOKIE['monCookie'] = $_GET['prenom'];

    }

?>

