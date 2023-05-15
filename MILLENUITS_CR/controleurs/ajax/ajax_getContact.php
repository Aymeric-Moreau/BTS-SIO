<?php
// Inclure votre fichier PDO
require_once '../../passerelles/Pdo_connexion.php';
require_once '../../passerelles/Pdo_contact.php';



try {
    
// Récupérer le distributeur sélectionné
$distributeur_id = $_POST['distributeur'];

// Récupérer les contacts en fonction du distributeur sélectionné à l'aide de votre fonction PDO existante
$contacts = Pdo_Contact::listeContact($distributeur_id);
    

   } catch (Exception $ex) {
    var_dump($ex->getMessage());
   }

// Envoyer les données au format JSON en réponse
header('Content-Type: application/json');
echo json_encode($contacts);
