<?php
include 'bdd.php';

session_start();


if (isset ($_POST['class'])){
    $_SESSION['classPerso']= $_POST['class'];
};


//on choisit la class aléatoirement du bot(adversaire)
$listClass = array('Warrior', 'Archer', 'Wizzard');
$randClassBot = array_rand($listClass, 1);
$_SESSION['classPersoBot']= $listClass[$randClassBot];

//on charge les class qui sont utilisées par les joueurs
function chargerClass($class)
{
    require "../partials/" . lcfirst($class) . ".php";
}
spl_autoload_register('chargerClass');


//Création du personnage du joueur
$perso = new $_SESSION['classPerso']($_SESSION['pseudo'], $_SESSION['classPerso']);


//création du personnage joué par le BOT
$persoBot = new $_SESSION['classPersoBot']('Musumashi Miyamoto', $_SESSION['classPersoBot']);


$_SESSION['persoHealthPoints'] = $perso->getHealthPoints();
$_SESSION['persoTotalStrength'] = $perso->getTotalStrength();
$_SESSION['persoDefense'] = $perso->getDefense();

$_SESSION['persoBotHealthPoints'] = $persoBot->getHealthPoints();
$_SESSION['persoBotTotalStrength'] = $persoBot->getTotalStrength();
$_SESSION['persoBotDefense'] = $persoBot->getDefense();

header('Location:../pages/arene.php'); 
