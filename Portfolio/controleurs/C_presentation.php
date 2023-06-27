<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "presentation":

        include 'vues/vues_presentation/V_presentation.php';
        break;



}
?>