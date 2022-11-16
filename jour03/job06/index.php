
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

$str = "Les choses que l'on possede finissent par nous posseder.";
#J'enlève les accents :( le UTF-8 marche pô 
#Boucle sort lambda mais au lieu d'incrémenter on décrémente pour aller à l'envers

for($i = -1; isset($str[$i]); $i--){ 
    echo $str[$i];
}

?>
</body>
</html>