<?php

//entête nécessaire pour la récupération des données par le script
header('content-type:text/json; charset=utf-/');

/**
 * charge les fichier nécessaires
 * pour l'accées a la table << produit>> de la base de données.
 */
 require_once 'passerelles/Pdo_Connexion.php';
        require_once 'passerelles/Pdo_Entreprise.php';

try{
    // id_categorie est le paramétre fourni dans le script js
    $entreprise = $_REQUEST['codeEntreprise'];
    //encode les données récupérées au format json
    echo json_encode(Pdo_Entreprise::getUneEntreprise($entreprise));
}catch(Exception $ex){
    var_dump($ex->getMessage());
}
