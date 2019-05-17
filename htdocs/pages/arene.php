<?php
include '../layout/bdd.php';

session_start();
$class = $_POST['class'];

//faut créer le personnage choisi par le joueur

function changerClass($class){
    require "../partials/".lcfirst($class) . ".php";
}

spl_autoload_register('changerClass');

$perso1 = new $class($_SESSION['pseudo'], $_POST['class']);
$perso1->name();




//faut ajouter toutes les infos dans la bdd (le perso choisit par le joueur)
//faut créer un autre joeur qui sera l'adversaire du joueur
//faut faire combatre les deux perso
//afficher le résultat

