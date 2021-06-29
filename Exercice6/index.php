<?php
session_start();
if (isset($_POST["pseudo"])&& isset($_POST["login"])) {
    setcookie('pseudo',$_POST['pseudo'], time()+ 365*24*3600, null, null, false, true );
    setcookie('login', $_POST['login'], time()+ 365*24*3600, null, null, false, true);
   
}
 
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
    <h1>Exercice 5</h1>
    <p>Intialisez deux cookie : pseudo et login. Créez deux champs afin de donner une valeur aux cookie. Afficher ces cookie sur une autre page.</p>
    <?php
    if (empty([$_POST["pseudo"]]) && empty($_POST["login"])) {
        ?>
         <form action="form.php" method="post">
        <label for="pseudo">Entrez votre pseudo :</label>
        <input type="text" name="pseudo" id="pseudo">
        <label for="login">Entrez votre login :</label>
        <input type="text" id="login" name="login">
        <button type="submit">Submit</button>
        <?php
    }
   
    ?>
  
</body>
</html>