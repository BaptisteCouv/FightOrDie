<?php

include 'bdd.php';

$pseudo = htmlspecialchars($_POST['pseudo']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Creation du compte
$crerateUser = $bdd->prepare("INSERT INTO users(pseudo, password ) 
                                VALUES(?,?)");


// Vérification pseudo non pris 
$reponse = $bdd->prepare("SELECT * FROM users WHERE pseudo = ?");

$reponse->execute(array(
    $pseudo
));

$isUserAvailables = $reponse->fetch();

if ($isUserAvailables) {
    header('Location: ../pages/connexion.php?error=invalidInput');
} else {
    $crerateUser->execute(array($pseudo, $password));

    //on récupère toutes les infos de l'user 
    $reponse = $bdd->prepare("SELECT * FROM users WHERE pseudo = ?");
    $reponse->execute(array(
        $pseudo
    ));
    $userInfo = $reponse->fetch();

    //on sauvegarde l'id et le pseudo dans 2 variables session
    session_start();
    $_SESSION['pseudo']=$userInfo['pseudo'];
    $_SESSION['id']=$userInfo['id'];
    header('Location: ../pages/main.php');

}


