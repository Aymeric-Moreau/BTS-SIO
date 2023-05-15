<?php

//entête nécessaire pour la récupération des données par le script
header('content-type:text/json; charset=utf-/');

/**
 * charge les fichier nécessaires
 * pour l'accées a la table << entreprise >> de la base de données.
 */
 require_once '../passerelles/Pdo_Connexion.php';
        require_once '../passerelles/Pdo_Entreprise.php';

try{
    // id_categorie est le paramétre fourni dans le script js
    $entreprise = $_REQUEST['secteur'];
    //encode les données récupérées au format json
    echo json_encode(Pdo_Entreprise::getEntrepriseSecteur($entreprise));
}catch(Exception $ex){
    var_dump($ex->getMessage());
}
//"C:\xampp\htdocs\mes_site_web\JSON_AJAX\project_ajax_entreprise\passerelles\Pdo_Entreprise.php"