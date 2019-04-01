<?php
$_COOKIE['login'];
$_COOKIE['password'];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title>Exercice 4 Partie 8 php</title>
    </head>
    <body>
        <p>Votre indentifiant : <?= $login; ?></p>
        <p>Votre mot de passe : <?= $pasword; ?></p>
        <a href="../index.php">retour</a>
    </body>
</html>


