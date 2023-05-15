<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "se_connecter":
        include 'vues\V_connexion.php';

        break;
    case "valid_connexion":
        $login = htmlspecialchars($_POST["login"]);
        $mdp = htmlspecialchars(sha1($_POST["mdp"]));

        //appel de la passerelle
        $result = Pdo_Utilisateur::getUtilisateur($login, $mdp);

        if ($result) {
            $_SESSION['login'] = $result[0]["login"];
            header('Location: index.php');
        } else {
            session_abort();
            include 'vues\V_connexion.php';
        }

        break;
    case "se_deconnecter":
        session_destroy();
        header('Location: index.php');

        break;

    default:
        break;
}