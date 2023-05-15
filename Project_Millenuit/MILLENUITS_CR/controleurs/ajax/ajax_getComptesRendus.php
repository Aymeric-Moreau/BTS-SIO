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
    
    $distributeurId = $_REQUEST['id_distrib'];
   
   
    echo json_encode(Pdo_Distributeurs::getDistributeursCr($distributeurId));
    

   } catch (Exception $ex) {
    var_dump($ex->getMessage());
   }
   

?>