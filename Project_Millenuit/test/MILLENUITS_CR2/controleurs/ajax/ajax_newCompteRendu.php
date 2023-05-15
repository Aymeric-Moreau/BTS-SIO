<?php

/*
 * 
 * @version 1
 * @author	Célian
 * 
*/
header('content-type:text/json; charset=utf-8');


require_once '../../passerelles/Pdo_connexion.php';
require_once '../../passerelles/Pdo_compte_rendu_visite.php';

try {
    
    $Id = $_REQUEST['id'];
    
    
   
   
    echo json_encode(Pdo_Distributeurs::getDistributeursCr($Id));
    

   } catch (Exception $ex) {
    var_dump($ex->getMessage());
   }