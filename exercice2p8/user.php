<?php
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
   
        
    </body>
</html>

