<?php

if (!isset($_REQUEST["action"])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "ajouter_compteRendu":

        $index = Pdo_compte_rendu_visite::getLastIndex();
        $motifs = Pdo_motif_visite::getAllMotifs();
        $commerciaux = Pdo_commercial::getAllCommerciaux();
        $distributeurs = Pdo_Distributeurs::getAllDistributeurs();
        $produits = Pdo_produit::getAllProduit();
        include 'vues/vues_comptes_rendus/V_Ajouter_CompteRendu.php';
        break;
    case "valid_add":

        $id = htmlspecialchars($_POST["numeroCom"]);
        $commercial = htmlspecialchars($_POST["choixCommercial"]);
        $distributeur = htmlspecialchars($_POST["choixDistributeur"]);
        $motif = htmlspecialchars($_POST["choixMotif"]);
        $contact = htmlspecialchars($_POST["choixPersonne"]);
        $bilan = htmlspecialchars($_POST["bilan"]);
        $date_compte_rendu = htmlspecialchars($_POST["dateCom"]);
        $date_visite = htmlspecialchars($_POST["dateVis"]);
        $coeff = htmlspecialchars($_POST["coeff"]);
        $produits = $_POST["produits"];

        Pdo_compte_rendu_visite::AjouterCompteRendu($id, $commercial, $distributeur, $motif, $contact, $bilan, $date_compte_rendu, $date_visite, $coeff, $produits);

        echo "<script> document.location.href = 'index.php?uc=compte_rendu&action=ajouter_compteRendu';</script>";
        break;
    case "listes_distributeurs" :

        $distributeursCr = Pdo_Distributeurs::getAllDistributeurs();
        include 'vues/vues_comptes_rendus/V_Listes_Distributeurs_Compte_Rendu.php';

        break;
    case "consulter" :

        $id = htmlspecialchars($_POST["distrib"]);
        $bilan = Pdo_compte_rendu_visite::getBilan($id);
        include 'vues/vues_comptes_rendus/V_Consulter_Compte_Rendu.php';
        break;

    case "modifier" :
       
            $id = htmlspecialchars($_POST["distrib"]);
            $bilan = Pdo_compte_rendu_visite::getBilan($id);
            include 'vues/vues_comptes_rendus/V_Modifier_Compte_Rendu.php';
        break;

    case "valid_modification" :
        
        print_r($_GET);
        print_r($_POST);

        $id = htmlspecialchars($_REQUEST["id"]);
        $bilan = htmlspecialchars($_POST["bilan"]);
        $coeff = htmlspecialchars($_POST["coeff"]);
        Pdo_compte_rendu_visite::newBilan($id, $bilan, $coeff);
        break;
}?>