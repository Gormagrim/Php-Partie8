<?php
session_start();

$_SESSION['firstname'] = 'Jean';
$_SESSION['lastname'] = 'Pierre';
$_SESSION['age'] = 19;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title>Exercice 2 Partie 8 php</title>
    </head>
    <body>
        <!-- Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, 
                firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.
                Il faudra afficher le contenu de ces variables sur la deuxième page. -->
        <a href="user.php">lien vers user.php</a>
        <a href="../index.php">retour</a>


    </body>
</html>
