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
    $numC = $_POST['numC'];
    $paie = $_POST['paie'];
    $qt1 = $_POST['qt1'];
    $qt2 = $_POST['qt2'];
    $qt3 = $_POST['qt3'];
    $date = $_POST['date'];
    $produit1 = $_POST['produit1'];
    $produit2 = $_POST['produit2'];
    $produit3 = $_POST['produit3'];
    $partCommande = $connexion->query("INSERT INTO `commande` (`numCommande`, `dateCommande`, `paiement`, `numclient`) VALUES ('', $date, $paie, $numC)");

    $id = $connexion->lastInsertId();
    $partLigneCommande = $connexion->query(" INSERT INTO `lignecommande` (`numCommande`, `numProduit`, `qteCommandee`) VALUES ($id, $produit1, qt1);  ") ;
    $partLigneCommande2 = $connexion->query(" INSERT INTO `lignecommande` (`numCommande`, `numProduit`, `qteCommandee`) VALUES ($id, $produit2, qt2);  ") ;
    $partLigneCommande3 = $connexion->query(" INSERT INTO `lignecommande` (`numCommande`, `numProduit`, `qteCommandee`) VALUES ($id, $produit3, qt3);  ") ;

    $clientC->execute([$client]);
    echo "la commande a bien été ajouter";
} catch (PDOException $e) {
    print "Error!:" . $e->getMessage() . "<br/>";
}

?>


<br />
<b>Warning</b>:  require_once(passerelles/Pdo_Connexion.php): Failed to open stream: No such file or directory in <b>C:\xampp\htdocs\mes_site_web\JSON_AJAX\project_ajax_entreprise\ajax\ajax_getEntreprise.php</b> on line <b>10</b><br />
<br />
<b>Fatal error</b>:  Uncaught Error: Failed opening required 'passerelles/Pdo_Connexion.php' (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\mes_site_web\JSON_AJAX\project_ajax_entreprise\ajax\ajax_getEntreprise.php:10
Stack trace:
#0 {main}
  thrown in <b>C:\xampp\htdocs\mes_site_web\JSON_AJAX\project_ajax_entreprise\ajax\ajax_getEntreprise.php</b> on line <b>10</b><br />
