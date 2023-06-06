<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "ajout_commerciaux":
        $sect = Pdo_Secteurs::getSecteurs();
        include 'vues/vues_commerciaux/V_football.php';
        break;

    case "liste_commerciaux":
        $commercial = Pdo_Commercial::getAllCommerciaux();
        include 'vues/vues_commerciaux/V_basket.php';
        break;

    case "validation_ajout":
        
        break;
}
?>