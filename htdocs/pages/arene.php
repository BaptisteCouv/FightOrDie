<?php
include '../layout/bdd.php';

session_start();
$class = $_POST['class'];
//on choisit la class aléatoirement du bot(adversaire)

$listClass = array('Warrior', 'Archer', 'Wizzard');
$randClassBot = array_rand($listClass, 1);

//faut créer le personnage choisi par le joueur

function changerClass($class){
    require "../partials/".lcfirst($class) . ".php";
}

spl_autoload_register('changerClass');
//Création des deux perosnnages (le joueur et le bot)
$perso1 = new $class($_SESSION['pseudo'], $class);
$persoBot = new $listClass[$randClassBot]('Musumashi Miyamoto', $listClass[$randClassBot]);
echo $perso1->getClass();
echo '<br>';
echo $persoBot->getClass();
echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';
$perso1->attack($persoBot);  
$perso1->takeDamage($persoBot);
$perso1->resultat($persoBot);
$perso1->deleteIfDie();
$persoBot->deleteIfDie();


$perso1->attack($persoBot);
$perso1->takeDamage($persoBot);
$perso1->resultat($persoBot);
$perso1->deleteIfDie();
$persoBot->deleteIfDie();



//faut ajouter toutes les infos dans la bdd (le perso choisit par le joueur)




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
    <title>Arène</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <?php

            $cardPlayer= new CardArene($perso1->getClass());
            $cardPlayer->afficherCardArene();

            $cardBot= new CardArene($persoBot->getClass());
            $cardBot->afficherCardArene();

            $bouton = new CardArene($perso1->getClass());
            $bouton->afficherBouton();

            
            ?>
        </div>
    </div>
</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>