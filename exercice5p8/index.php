<?php
$_COOKIE['login'] = NULL;
$_COOKIE['password'] = NULL;
$time = 300;
if (isset($_POST['submit'])) {
    setcookie('login', $_POST['login'], time() + $time, null, null, false, true);
    setcookie('password', $_POST['password'], time() + $time, null, null, false, true);
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title>Exercice 5 Partie 8 php</title>
    </head>
    <body>
        <p>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>
        <form name="nameForm" action="index.php" method="post">
            <label for="login">Identifiant :</label>
            <input type="text" name="login" value=""  />
            <label for="password">Mot de Passe :</label>
            <input type="text" name="password" value=""  />
            <input type="submit" name="submit" value="Valider" />
        </form>
        <p><?= $_COOKIE['login']; ?></p>
        <p><?= $_COOKIE['password']; ?></p>
    </body>
</html>