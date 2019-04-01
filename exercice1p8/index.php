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
        <?php $useragent = $_SERVER ['HTTP_USER_AGENT']; ?>
            <p><?= $useragent; ?></p>
            <?php $clientIp = $_SERVER['SERVER_ADDR']; ?>
             <p><?= $clientIp; ?></p>
             <?php $serverName = $_SERVER['SERVER_NAME']; ?>
             <p><?= $serverName ?></p>
             <a href="../index.php">retour</a>
    </body>
</html>
