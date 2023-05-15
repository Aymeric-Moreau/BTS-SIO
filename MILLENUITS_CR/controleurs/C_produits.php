<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "ajout_produits":
        $categories = Pdo_Categories::getCategories();
        $densite = Pdo_Densite::getDensite();
        $taille = Pdo_Taille::getTaille();
        $garnissage = Pdo_Garnissage::getGarnissage();
        $conseils = Pdo_ConseilsLavage::getConseils();
        include 'vues/vues_produits/V_ajout_produits.php';
        break;
    case "liste_produits":
        $commercial = Pdo_Commercial::getAllCommerciaux();
        include 'vues/vues_produits/V_liste_produits.php';
        break;

    case "validation_ajouts":
        try {
            $numProd = htmlspecialchars($_POST['numProd']);
            $lblProd = htmlspecialchars($_POST['lblProd']);
            $prixProd = htmlspecialchars($_POST['prixProd']);
            $categorie = htmlspecialchars($_POST['allCate']);
            $densite = htmlspecialchars($_POST['allDens']);
            $garnissage = htmlspecialchars($_POST['allGarn']);
            $conseil = $_POST['listeConseils'];
            $taille = $_POST['listeTailles'];

            $sect = Pdo_produit::getAjoutProduits($numProd, $lblProd, $prixProd, $densite, $garnissage, $categorie, $conseil, $taille);

            echo "<script>"
            . "alert(\"Le produit à bien été ajouté !\");"
            . "document.location.href = 'index.php?uc=produits&action=ajout_produits';"
            . "</script>";
        } catch (Exception $e) {
            echo "<script>"
            . "alert($e->getMessage());"
            . "document.location.href = 'index.php?uc=produits&action=ajout_produits';"
            . "</script>";
            echo 'Echec lors de la connexion ! ' . $e->getMessage();
            die();
        }
        break;
}
?>