<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "ajout_commerciaux":
        $sect = Pdo_Secteurs::getSecteurs();
        include 'vues/vues_commerciaux/V_ajout_commerciaux.php';
        break;

    case "liste_commerciaux":
        $commercial = Pdo_Commercial::getAllCommerciaux();
        include 'vues/vues_commerciaux/V_liste_commerciaux.php';
        break;

    case "validation_ajout":
        try {

            $numCom = htmlspecialchars($_POST["numCom"]);
            $nomCom = htmlspecialchars(($_POST["nomCom"]));
            $prenomCom = htmlspecialchars($_POST["prenomCom"]);
            $telFix = htmlspecialchars(($_POST["numFix"]));
            $telPort = htmlspecialchars($_POST["numPort"]);
            $sectAff = htmlspecialchars(($_POST["allSecteur"]));
            $mail = strtolower($prenomCom . "." . $nomCom . "@millenuits.com");

            if (empty($numCom) || empty($nomCom) || empty($prenomCom) || empty($telPort) || empty($sectAff)) {
                echo "<script>"
                . "alert(\"L'un des champs obligatoire est vide !\");"
                . "document.location.href = 'index.php?uc=commerciaux&action=ajout_commerciaux';"
                . "</script>";
            } else {
                if (preg_match('`^0\d{9}$`', $telPort)) {
                    $sect = Pdo_Commercial::getAjoutCommercial($numCom, $nomCom, $prenomCom, $telFix, $telPort, $sectAff, $mail);
                    echo "<script>"
                    . "alert(\"Le commercial à bien été ajouté !\");"
                    . "document.location.href = 'index.php?uc=commerciaux&action=ajout_commerciaux';"
                    . "</script>";
                } else {
                    echo "<script>"
                    . "alert(\"Le numéro de téléphone n'est pas valide !\");"
                    . "document.location.href = 'index.php?uc=commerciaux&action=ajout_commerciaux';"
                    . "</script>";
                }
            }
        } catch (Exception $e) {
            echo "<script>"
            . "alert($e->getMessage());"
            . "document.location.href = 'index.php?uc=commerciaux&action=ajout_commerciaux';"
            . "</script>";
            echo 'Echec lors de la connexion ! ' . $e->getMessage();
            die();
        }
        break;
}
?>