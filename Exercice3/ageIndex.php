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
    <ol>
    <li><?php 
    echo "La session a l'age : " . $_SESSION["age"]. " ans"?></li>
    </ol>
</body>
</html>