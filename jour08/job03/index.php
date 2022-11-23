<?php

session_start(); // START SESSION


if(!isset($_SESSION['name']) || isset($_GET['reset'])){ // SI LA VARIABLE N'EST PAS SET. ON LA SET EN LUI DONNANT UN TABLEAU VIDE
    $_SESSION['name'] = []; // <---- LE FAMEUX TABLEAU VIDE <3
}
if(isset($_GET['prenom'])){ // SI LE TABLEAU GET EST SET
        $_SESSION['name'][] = $_GET['prenom']; // ALORS ON AJOUTE LE GET PRENOM A NOTRE TABLEAU SESSION NAME
        echo "<ul>";
        foreach ($_SESSION['name'] as $value){ // ON PARCOURS LE TABLEAU
            echo "<li> $value</li>"; // ON AFFICHE LA VALEUR
        }
    echo "</ul>";
}

// NB - ON UTILISE DEUX FORMS POUR RESET LA PAGE ET ÉVITER D'AVOIR UNE PUCE SI L'ON AVAIT MIS LE BOUTON RESET DANS LE MÊME FORM
// COMME LE BOUTON RESET EST DANS UN AUTRE FORM, ON NE RELANCE PAS LE TABLEAU VIDE ET DONC ON A PAS DE PUCE

?>

<form method="get" action="index.php">
    <label>
        <input type="text" name="prenom" placeholder="votre texte">
        <button type="submit">envoyer</button>
    </label>
</form>

<form method="get" action="index.php">
    <label>
        <button type="submit" name="reset" value="reset">Reset</button>
    </label>
</form>
