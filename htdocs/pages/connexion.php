<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/falling_leaves.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ceviche+One" rel="stylesheet">
    <title>FightOrDie</title>
</head>

<body id="connexion-body"> 
    <!-- <audio controls autoplay>
        <source  src="../assets/music/bonny.mp3" type="audio/m">
        <source src="../assets/music/bonny.mp3" type="audio/ogg">
    </audio> -->
    <!-- falling leaves -->
    <div id="leaves">
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
    </div>

    <div class="container">
        <div class="row justify-content-end">
            <div class="formulaire col-4">
                <?php
                if (isset($_GET['signUp'])) {
                    echo '<form action="../layout/traitementConnexion.php" method="post">';

                }else{
                    echo '<form action="../layout/traitementInscription.php" method="post">';
                } 
                ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="formulaire-text">Pseudo</label>
                        <?php
                        if (isset($_GET['error'])) {
                            echo '<br>
                                    <span class="text-danger">Pseudo déjà existant</span>';
                        }
                        ?>
                        <input type="text" name="pseudo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre pseudo" required >
                        <small id="emailHelp" class="form-text text-muted">Votre pseudo doit être unique.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="formulaire-text">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer votre mot de passe" >
                    </div>
                    <?php
                if (isset($_GET['signUp']) OR isset($_GET['error3'])) {
                    echo '<button class="but-case color-case"><a href="connexion.php" class="but">S\'inscrire</a></button>
                        <button type="submit" class="but-case">Connexion</button>'
                        ;

                }else{
                    echo '
                    <button type="submit" class="but-case">Inscription</button>
                    <button class="but-case color-case"><a href="connexion.php?signUp=1" class="but">Connexion</a></button>';
                } 
                ?>
                </form>
            </div>
        </div>
    </div>
    <div>
        <img src="../assets/img/lama.gif">
    </div>
</body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>