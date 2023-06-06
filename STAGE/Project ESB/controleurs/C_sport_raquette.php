<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "tennis":

        include 'vues/vues_sport_raquette/V_tennis.php';
        break;

    case "tennis_table":

        include 'vues/vues_sport_raquette/V_tennis_table.php';
        break;

    case "badminton":
        include 'vues/vues_sport_raquette/V_badminton.php';
        break;
}
?>