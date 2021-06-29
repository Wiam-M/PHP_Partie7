<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'style.php'; ?>
    <title>Document</title>
</head>
<body>
    <h1>Exercice 1</h1>
    <p>Sur une même page, affichez votre user_agent, l'adresse ip de votre serveur et le nom de votre serveur.</p>
   <ul>
   <li><?php echo "User agent est : ".$_SERVER['HTTP_USER_AGENT'];?></li>
   <li><?php
   //L'adresse IP du client qui demande la page courante: $_SERVER['REMOTE_ADDR']
        echo "Adresse IP du serveur est :  " .$_SERVER['SERVER_ADDR'];?></li>
   <li><?php echo "Le nom du serveur est : ". $_SERVER['SERVER_NAME'];?></li>
   </ul>
</body>
</html>