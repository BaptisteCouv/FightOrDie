<?php
session_start();


function chargerClass($class)
{
    require "../partials/" . lcfirst($class) . ".php";
}
spl_autoload_register('chargerClass');

//Création à nouveau de l'objet personnage avec les infos en session
$perso = new $_SESSION['classPerso']($_SESSION['pseudo']);


//création à nouveau de l'objet perso Bot avec les infos en session
$persoBot = new $_SESSION['classPersoBot']('Musumashi Miyamoto');

$perso->attack($persoBot);
$perso->takeDamage($persoBot); 
$_SESSION['persoHealthPoints'] = $perso->getHealthPoints();
echo ($perso->getHealthPoints());
