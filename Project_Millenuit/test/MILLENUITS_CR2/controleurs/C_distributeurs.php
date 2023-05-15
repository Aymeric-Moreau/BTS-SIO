<?php

if (!isset($_REQUEST["action"])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "ajouter_distributeur":
        $index = Pdo_Distributeurs::getLastIndex();
        include 'vues/vues_distributeurs/V_Ajouter_Distributeur.php';

        break;
    case "valid_add":

        try {

            $numDis = htmlspecialchars($_POST["numeroDis"]);
            $raisonSociale = htmlspecialchars($_POST["rsociale"]);
            $adresse1 = htmlspecialchars($_POST["adresse1"]);
            $adresse2 = htmlspecialchars($_POST["adresse2"]);
            $adresse3 = htmlspecialchars($_POST["adresse3"]);
            $ville = htmlspecialchars($_POST["choixVille"]);
            $commercial = htmlspecialchars($_POST["commerciaux"]);

            if (empty($numDis) || empty($raisonSociale) || empty($adresse1) || empty($ville) || empty($commercial)) 
            {
                echo 
                "<script>"
                . "alert('Distributeur non ajouté, veuillez vérifier les informations entrées !');"
                . "document.location.href = 'index.php?uc=distributeur&action=ajouter_distributeur';"
                . "</script>";
            } 
            else 
            {

                Pdo_Distributeurs::AjouterDistributeur($numDis, $raisonSociale, $adresse1, $adresse2, $adresse3, $ville, $commercial);

                echo "<script>"
                . "alert('Distributeur bien ajouté !');"
                . "document.location.href = 'index.php?uc=distributeur&action=ajouter_distributeur';"
                . "</script>";
            }
        } 
        catch (Exception $ex) 
        {
            echo "<script>"
            . "alert('Distributeur non ajouté, veuillez vérifier les informations entrées !');"
            . "document.location.href = 'index.php?uc=distributeur&action=ajouter_distributeur';"
            . "</script>";
            exit('');
        }

        break;

    case "listes_distributeurs" :

        $distributeurs = Pdo_Distributeurs::getAllDistributeurs();
        include 'vues/vues_distributeurs/V_Listes_Distributeurs_Secteurs.php';
        break;
}?>