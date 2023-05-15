<?php

/*
 * 
 * @version 1
 * @author	Célian
 * 
*/
header('content-type:text/json; charset=utf-8');


require_once '../../passerelles/Pdo_connexion.php';
require_once '../../passerelles/Pdo_commercial.php';
try {
    
    $secteur= $_REQUEST['secteur'];
   
   
    echo json_encode(Pdo_commercial::getCommerciaux($secteur));
    

   } catch (Exception $ex) {
    var_dump($ex->getMessage());
   }
   

?>