<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title>Exercice 1 Partie 8 php</title>
    </head>
    <body>
        <!-- Faire une page HTML permettant de donner à l'utilisateur :
                son User Agent
                son adresse ip
                le nom du serveur -->
        <!-- $_SERVER est une variable superglobale. C'est un tableau qui comporte plusieurs informations.
               $_SERVER ['HTTP_USER_AGENT'] affiche l'user agent de l'utilisateur. -->
        <?php $useragent = $_SERVER ['HTTP_USER_AGENT']; ?>
        <p><?= $useragent; ?></p>
        <!-- $_SERVER['REMOTE_ADDR'] affiche l'adresse ip du visiteur. Ne pas confondre avec $_SERVER['SERVER_ADDR'] -->
        <?php $clientIp = $_SERVER['REMOTE_ADDR']; ?>
        <p><?= $clientIp; ?></p>
        <!-- $_SERVER['SERVER_NAME'] affiche le nom du serveur, ici le nom du vhosts. -->
        <?php $serverName = $_SERVER['SERVER_NAME']; ?>
        <p><?= $serverName ?></p>
        <a href="../index.php">retour</a>
    </body>
</html>
