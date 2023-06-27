<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "stage":

        include 'vues/vues_stage/V_stage.php';
        break;



}
?>