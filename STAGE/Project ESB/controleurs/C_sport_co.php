<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "basket":

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