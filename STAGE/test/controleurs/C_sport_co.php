<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
/*récupération de la reqette*/
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    /*Si la variable $action contient "basket" cela exécute donc le code ci-dessous*/
    case "basket":
        /*insertion du fichier V_basket.php*/
        include 'vues/vues_sport_co/V_basket.php';
        break;

    case "football":

        include 'vues/vues_sport_co/V_football.php';
        break;

    case "hockey":
        include 'vues/vues_sport_co/V_hockey.php';
        break;
}
?>



