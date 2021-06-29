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
    <h1>Exercice 2</h1>
    <p>Créez deux variables de session (nom, prénom). Affichez les sur la même page.</p>
   
    <ol>
    <?php
    $_SESSION["lastName"] = "Malek" ;
    $_SESSION["firstName"] = "Wiam" ;
    ?>
    <li><?php echo "Le nom de la session : ".  $_SESSION["lastName"];?></li>
    <li><?php echo "Le prenom de la session lol : ". $_SESSION["firstName"];?></li>
    </ol>
  
</body>
</html>