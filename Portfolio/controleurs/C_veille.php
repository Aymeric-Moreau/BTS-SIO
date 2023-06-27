<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "veille":

        include 'vues/vues_veille/V_veille.php';
        break;


}
?>