<?php 
/**
 * Auteur : XXX
 * Date : 01/02/2022
 * Titre : Tableau des produits en fonction de la marque sélectionnée
 */

$user = "root";
$pass = "";
try{
    $connexion = new PDO('mysql:host=localhost;dbname=topachat_AM',$user,$pass);
}catch(PDOException $e){
    print "Error!:".$e->getMessage()."<br/>";
    die();
}

$marques = $_POST['marque_select'];
$resultat = $connexion->query("SELECT * FROM produit where marque = '$marques'");
$listeProduit = $resultat->fetchAll();
?>
<table>
    <tr>
        <th>nom du produit</th>
        <th>Référence</th>
        <th>prix</th>
    </tr>
    <?php
    foreach ($listeProduit as $valeur) // On affiche tous les produits stockés dans le tableau $listeProduit
    {
    ?>
    <tr>
        <td><?php echo $valeur['designation'];?></td>
        <td><?php echo $valeur['numProduit'];?></td>
        <td><?php echo $valeur['prixUnitaire'];?></td>
    </tr>
    <?php
    }
    ?>
</table>
