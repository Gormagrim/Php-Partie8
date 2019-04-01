<?php
$_COOKIE['login'];
$_COOKIE['password'];
$error = NULL;
$time = 300;
if (!empty($_POST['login']) && !empty($_POST['password'])){
    setcookie('login', $_POST['login']);
    setcookie('password', $_POST['password']);
    $login = $_POST['login'];
    $password = $_POST['password'];
}else{
    $error = 'Merci de remplir les champs.';
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title>Exercice 3 Partie 8 php</title>
    </head>
    <body>
        <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</p>
        <form name="nameForm" action="index.php" method="post">
            <label for="login">Identifiant :</label>
            <input type="text" name="login" id="login" value="" />
            <label for="password">Mot de Passe :</label>
            <input type="password" name="password" id="password" value=""  />
            <input type="submit" name="submit" value="Valider" />
        </form>
        <p><?= $_POST['login']; ?></p>
        <p><?= $_POST['password']; ?></p>
        <p><?= $error; ?></p>
        <a href="../index.php">retour</a>
    </body>
</html>