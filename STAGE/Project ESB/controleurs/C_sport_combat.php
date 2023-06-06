<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "judo":

        include 'vues/vues_sport_combat/V_judo.php';
        break;

    case "karate":

        include 'vues/vues_sport_combat/V_karate.php';
        break;

    case "Escrime":
        include 'vues/vues_sport_combat/V_Escrime.php';
        break;
}
?>