<?php
// connexion à la base de données Fight Or Die
try
{
    $bdd = new PDO('mysql:host=10.42.0.140;dbname=FightOrDie;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
