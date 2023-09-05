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
    <table>
        <tr>
            <th>nom du produit</th>
            <th>Référence</th>
            <th>prix</th>
        </tr>
<?php
$commande = $_POST['commande_select'];
$commandet = $connexion->query("SELECT  numCommande ,  ligneCommande.numproduit , produit.numProduit , designation , prixUnitaire  FROM ligneCommande
INNER JOIN produit on ligneCommande.numproduit = produit.numProduit  where ligneCommande.numCommande = $commande");
$listeCommande = $commandet->fetchAll();
foreach ($listeCommande as $valeur) {

    ?>

        <?php

            ?>
            <tr>
                <td>
                    <?php echo $valeur['designation']; ?>
                </td>
                <td>
                    <?php echo $valeur['numProduit']; ?>
                </td>
                <td>
                    <?php echo $valeur['prixUnitaire']; ?>
                </td>
            </tr>
            <?php
        
        ?>
    
    <?php
}
?>
</table>

