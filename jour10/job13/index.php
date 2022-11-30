<?php
    $mysqli = new mysqli("localhost", "root", "root", "jour09");
    $sql = "INSERT INTO utilisateurs(nom, prenom, login, password) VALUES ()";

    $result = $mysqli -> query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>
<style>
    th, td {
        border: 1px solid black;
        padding: 1rem;
        text-align: center;
    }
</style>
<body>

<table>
    <tr>
        <th>Nom des salles</th>
        <th>Nom des étages</th>
    </tr>
    <?php
    foreach ($result as $line) {
        echo "<tr>";
        foreach ($line as $case) {
            echo "<td>" . $case . "</td>";
        }
        echo "</tr>";
    }
    ?>


</table>
</body>
</html>