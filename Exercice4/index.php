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
    <h1>Exercice 4</h1>
    <p>Créez un formulaire demandant un pseudo et mot de passe. Au clic sur le bouton "envoyer", affichez le pseudo et mot de passe sur une autre page.</p>
    <form action="form.php" method="post">
        <label for="pseudo">Entrez votre pseudo :</label>
        <input type="text" name="pseudo" id="pseudo">
        <label for="password">Entrez votre mot de passe :</label>
        <input type="password" id="password" name="password">
    <button type="submit">Submit</button>
</form>
</body>
</html>