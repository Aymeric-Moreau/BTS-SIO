<?php

header('content-type:text/json; charset=utf-8');
// Inclure votre fichier PDO
require_once '../../passerelles/Pdo_connexion.php';
require_once '../../passerelles/Pdo_compte_rendu_visite.php';



try {
    

$commercial = $_REQUEST['commercial'];
$dateD = $_REQUEST['dateD'];
$dateF = $_REQUEST['dateF'];



// Récupérer les contacts en fonction du distributeur sélectionné à l'aide de votre fonction PDO existante
$cr = Pdo_compte_rendu_visite::listeCr($commercial,$dateD,$dateF);
    

   } catch (Exception $ex) {
    var_dump($ex->getMessage());
   }

// Envoyer les données au format JSON en réponse
header('Content-Type: application/json');
echo json_encode($cr);
