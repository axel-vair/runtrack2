<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- STYLE DE BASE --> 
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Jour06 Job05</title>

    <?php 
    // SI $_POST est présent
        // SI style 1 est récupéré alors on affiche le style1
        // SINON on affiche le style2 
        // SINON le on affiche le style3 
    if ($_POST){
        if ($_POST["style"] == "style1"){
            echo '<link rel="stylesheet" type="text/css" href="style1.css">'; 
        }else if ($_POST["style"] == "style2"){
            echo '<link rel="stylesheet" type="text/css" href="style2.css">';
        }else{
            echo '<link rel="stylesheet" type="text/css" href="style3.css">';
        }
    }
    ?> 


</head>
<body>
    <form action="" method="post">
        <select name="style">
            <!-- Ternaire dans une ternaire pour éviter l'erreur au démarrage du serveur sans valeur selectionnée -->
            <option value="style1" <?php echo (isset($_POST["style"])) ? (($_POST["style"] == "style1") ? "selected" : NULL) : NULL;?>>style 1</option>
            <option value="style2" <?php echo (isset($_POST["style"])) ? (($_POST["style"] == "style2") ? "selected" : NULL) : NULL;?>>style 2</option> 
            <option value="style3" <?php echo (isset($_POST["style"])) ? (($_POST["style"] == "style3") ? "selected" : NULL) : NULL;?>>style 3</option>
        </select>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>

