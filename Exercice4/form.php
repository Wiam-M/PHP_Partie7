<?php
session_start();
$_SESSION['pseudo'] = htmlspecialchars($_POST['pseudo']);
$_SESSION['password']  = htmlspecialchars($_POST['password']);
if (!empty($_SESSION['pseudo']) && !empty($_SESSION['password'])){
    echo 'Votre pseudo est : '. $_SESSION['pseudo']. '<br>'. 'Votre mot de passe est : '.$_SESSION['password'];
}else {
    echo 'Veuillez remplir les champs';
}

?>