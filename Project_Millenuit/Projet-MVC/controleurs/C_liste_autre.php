<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'user';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "liste_des_utilisateurs":
        $utilisateur = Pdo_Utilisateur::listeUtilisateur();
        include 'vues\V_gerer_utilisateur.php';
        break;
    case "Autre_fonctionnalite_utilisateur":
        include 'vues\V_autre-fonctionnaliter.php';

        break;
}