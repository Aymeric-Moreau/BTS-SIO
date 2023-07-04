<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "petanque":

        include 'vues/vues_petanque/V_petanque.php';
        break;

}
?>