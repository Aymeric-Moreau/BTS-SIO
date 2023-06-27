<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "certification":

        include 'vues/vues_certification/V_certification.php';
        break;

  
}
?>