<?php
    $myBool = true;
    $myInteger = "25";
    $myString = "Hello";
    $myFloat = "1.5";

?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
    <th>Type</th>
    <th>Nom</th>
    <th>Valeur</th>
    </tr>

    <tr>
        <td>Boolean </td>
        <td>myBool</td>
        <td><?php echo $myBool ?></td>
    </tr>
   

    <tr>
        <td>Integer </td>
        <td>myInteger</td>
        <td><?php echo $myInteger ?></td>
    </tr>

    <tr>
        <td>String </td>
        <td>myString</td>
        <td><?php echo $myString ?></td>
    </tr>
    <br>
    <tr>
        <td>Float</td>
        <td>myFloat</td>
        <td><?php echo $myFloat ?></td>
    </tr>
</table>
</body>
</html>