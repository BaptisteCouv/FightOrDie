<?php
include '../layout/bdd.php';

session_start();


//infos en session du perso

$classPerso= $_SESSION['classPerso'];
$persoHealthPoints = $_SESSION['persoHealthPoints'];
$persoTotalStrength = $_SESSION['persoTotalStrength'];
$persoDefense = $_SESSION['persoDefense'];

//infos en session du perso Bot

$classPersoBot = $_SESSION['classPersoBot'];
$persoBotHealthPoints = $_SESSION['persoBotHealthPoints'];
$persoBotTotalStrength = $_SESSION['persoBotTotalStrength'];
$persoBotDefense = $_SESSION['persoBotDefense'];


function chargerClass($class)
{
    require "../partials/" . lcfirst($class) . ".php";
}
spl_autoload_register('chargerClass');

//Création à nouveau de l'objet personnage avec les infos en session
$perso = new $classPerso($_SESSION['pseudo']);


//création à nouveau de l'objet perso Bot avec les infos en session
$persoBot = new $_SESSION['classPersoBot']('Musumashi Miyamoto', $_SESSION['classPersoBot']);



?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/falling_leaves.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ceviche+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <title>Arène</title>
</head>

<body id="body-arene">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <?php

            $cardPlayer = new CardArene($perso->getClass(), $perso->getHealthPoints(), $perso->getDefense(), $perso->getTotalStrength());
            $cardPlayer->afficherCardArene("player");

            $cardBot = new CardArene($persoBot->getClass(), $persoBot->getHealthPoints(), $persoBot->getDefense(), $persoBot->getTotalStrength());
            $cardBot->afficherCardArene("bot");

            if ($perso->getHealthPoints()<= 0){
            $cardPlayer->afficherResultat($_SESSION['pseudo']);
            }else {
                echo $_SESSION['persoHealthPoints'];
            }

            if ($persoBot->getHealthPoints() <= 0){
                $cardBot->afficherResultat('Musumashi Miyamoto');
            }

            ?>
        </div>
        <div class="row justify-content-center">
            <?php
                $cardPlayer->afficherBouton();
            ?>
        </div>
    </div>
</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../assets/js/script.js"></script>
</html>