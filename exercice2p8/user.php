<?php
// on doit redémarrer la session pour y avoir accés.
    session_start();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title>Exercice 2 Partie 8 php</title>
    </head>
    <body>
        <a href="index.php"></a>
        <p><?= $_SESSION['firstname']; ?></p>
        <p><?= $_SESSION['lastname']; ?></p>
        <p><?= $_SESSION['age']; ?></p>
        <?php 
        // permet de supprimer les variables de session et détruire la session.
        session_destroy(); ?>
    </body>
</html>

