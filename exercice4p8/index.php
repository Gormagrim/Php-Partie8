<?php
$_COOKIE['login'];
$_COOKIE['password'];
$loginError = NULL;
$_POST['login'] = NULL;
$_POST['password'] = NULL;
$time = 300;
if (!empty($_POST['login']) && !empty($_POST['password'])){
    setcookie('login', $_POST['login']);
    setcookie('password', $_POST['password']);
    $login = $_POST['login'];
    $password = $_POST['password'];
}else {
    $loginError = 'Merci d\'entrer un login';
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title>Exercice 4 Partie 8 php</title>
    </head>
    <body>
        <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p>
        <form name="nameForm" action="user.php" method="post">
            <label for="login">Identifiant :</label>
            <input type="text" name="login" value=""  />
            <label for="password">Mot de Passe :</label>
            <input type="text" name="password" value=""  />
            <input type="submit" name="submit" value="Valider" />
        </form> 
    </body>
</html>