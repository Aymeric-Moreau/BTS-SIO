<?php
/**
 * Auteur : XXX
 * Date : 01/02/2022
 * Titre : Tableau des produits en fonction de la marque sélectionnée
 */

$user = "root";
$pass = "";
try {
    $connexion = new PDO('mysql:host=localhost;dbname=topachat_AM', $user, $pass);
} catch (PDOException $e) {
    print "Error!:" . $e->getMessage() . "<br/>";
    die();
}
?>

<?php
try {
    $client = $_POST['client_select'];
    $clientC = $connexion->prepare("DELETE FROM client where numClient = $client");
    echo "DELETE FROM client where numClient = $client";
    $clientC->execute([$client]);
    echo "Le client a bien été supprimé";
} catch (PDOException $e) {
    print "Error!:" . $e->getMessage() . "<br/>";
}
echo "DELETE FROM client where numClient = $client";
?>