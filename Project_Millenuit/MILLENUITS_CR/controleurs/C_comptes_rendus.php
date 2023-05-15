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
    case "afficher_cr":
        $commerciaux = Pdo_commercial::getAllCommerciaux();
        include 'vues/vues_comptes_rendus/V_afficher_cr.php';
        break;
        case "consulter_detail":
        $commerciaux = Pdo_commercial::getAllCommerciaux();
                $commercial = htmlspecialchars($_POST['commercial']);
        $dateD = htmlspecialchars($_POST['dateD']);
        $dateF = htmlspecialchars($_POST['dateF']);
        $cr = Pdo_compte_rendu_visite::listeCr($commercial, $dateD, $dateF);
        include 'vues/vues_comptes_rendus/V_detail_cr.php';
        break;
   
    case "sans_visite":
        $distribSV = Pdo_Distributeurs::getDistributeursSansCR();
        break;
}
?>
