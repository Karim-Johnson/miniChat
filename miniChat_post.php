<?php
 // Connexion à la base de données
    include_once 'database.php';

// Insertion du message à l'aide d'une requête préparée
// sans les deux points devant value(:) les résultats ne s'affichent pas sur l'écran
$req = $database->prepare('INSERT INTO minichat (pseudo, message) VALUES(:pseudo, :message)');
$req->execute(array(':pseudo'=>$_POST['pseudo'], ':message'=>$_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: miniChat.php');
?>