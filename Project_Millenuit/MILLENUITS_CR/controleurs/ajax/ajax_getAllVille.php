<?php

/*
 * 
 * @version 1
 * @author	Célian
 * 
*/
header('content-type:text/json; charset=utf-8');


require_once '../../passerelles/Pdo_connexion.php';
require_once '../../passerelles/Pdo_commune.php';
try {
    
    $code = $_REQUEST['code_postal'];
   
   
    echo json_encode(Pdo_commune::getCommunes($code));
    

   } catch (Exception $ex) {
    var_dump($ex->getMessage());
   }
   

?>