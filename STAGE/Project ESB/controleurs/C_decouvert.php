<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'decouvert';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "decouvert":

        include 'vues/vues_decouvert/V_decouvert.php';
        break;

}
?>