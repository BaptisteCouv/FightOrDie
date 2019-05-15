<?php 
// connexion à la base de données FightOrDie
include ('../layout/bdd.php');

if (!isset($_POST['pseudo']) AND !isset($_POST['password'])){
    header('Location: ../pages/connexion.php?error3=invalidInput');
}


$pseudo = htmlspecialchars($_POST['pseudo']);
$password = htmlspecialchars($_POST['password']);


//on séléctionne les infos de l'user s'il existe dans la bdd
 $req = $bdd->prepare("SELECT * FROM users WHERE pseudo = ?");

$req->execute(array(
    $pseudo
));

$compteExiste = $req->fetch();


$isPasswordCorrect = password_verify($password, $compteExiste['password']);


if (!$compteExiste) {
    header('Location: ../pages/connexion.php?error1=invalidInput');
} else {
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $compteExiste['id'];
        $_SESSION['pseudo'] = $compteExiste['pseudo'];
        header('Location: ../pages/main.php');
    } else {
        header('Location: ../pages/connexion.php?error2=invalidInput');
    }
}
