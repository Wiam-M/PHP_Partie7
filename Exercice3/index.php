<?php
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'style.php'?>
    <title>Document</title>
</head>
<body>
    <h1>Exercice 3</h1>
    <p>Créez trois variables de session (nom, prénom et âge). Au clic sur un lien, affichez l'âge sur une autre page.</p>
    <?php
    $_SESSION["lastName"] = "Malek" ;
    $_SESSION["firstName"] = "Wiam" ;
    $_SESSION["age"] = '26';
    ?>
     <ol>
    <li><?php 
    echo "Le nom de la session : ".  $_SESSION["lastName"];?></li>
    <li><?php echo "Le prenom de la session lol : ". $_SESSION["firstName"];?></li>
    </ol>
    <a href="ageIndex.php">Clic ici pour voir l'age</a>
</body>
</html>