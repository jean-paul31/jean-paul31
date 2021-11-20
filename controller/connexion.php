<?php

require_once "db.php";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    if (isset($_POST['connexion'])) {
        $username = htmlspecialchars($_POST['username']);
        $pwd = htmlspecialchars($_POST['pwd']);

        if (!empty($username) and !empty($pwd)) {
            $reqUser = $conn->prepare("SELECT * FROM user WHERE username = ? AND pwd = ?");
            $reqUser->execute(array($username, $pwd));

            $userinfo = $reqUser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['username'] = $userinfo['username'];
            header("Location: index.php?id=" . $_SESSION['id']);
        } else {
            $erreur = "Tous les champs doivent être complétés !";
        }
    }
} catch (\Throwable $th) {
    echo $th;
}