<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "gymnastique":

        include 'vues/vues_gym/V_gymnastique.php';
        break;

    case "taiso":

        include 'vues/vues_gym/V_taiso.php';
        break;

}
?>