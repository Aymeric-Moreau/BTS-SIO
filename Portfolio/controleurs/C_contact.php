<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "contact":

        include 'vues/vues_contact/V_contact.php';
        break;


}
?>