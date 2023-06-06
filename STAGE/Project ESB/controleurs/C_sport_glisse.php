<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "patinage":

        include 'vues/vues_sport_glisse/V_patinage.php';
        break;

    case "roller":

        include 'vues/vues_sport_glisse/V_tennis_roller.php';
        break;

}
?>