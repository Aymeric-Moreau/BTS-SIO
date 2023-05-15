<?php

/*
 * 
 * @version 1
 * @author	Célian
 * 
*/
header('content-type:text/json; charset=utf-8');


require_once '../../passerelles/Pdo_connexion.php';
require_once '../../passerelles/Pdo_distributeurs.php';
try {
    
    $Entreprisecteurs = $_REQUEST['code_postale'];
   
   
    echo json_encode(Pdo_Entreprise::getEntreprisesSecteur($Entreprisecteurs));
    

   } catch (Exception $ex) {
    var_dump($ex->getMessage());
   }
   

?>