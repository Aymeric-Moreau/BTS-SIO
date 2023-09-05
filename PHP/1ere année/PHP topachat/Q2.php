<?php 
/**
 * Auteur ; XXX
 * Date : 01/02/2022
 * Titre : PHP avec Connexion PDO à une base de données
 */

$user = "root";
$pass = "";
try{
    $connexion = new PDO('mysql:host=localhost;dbname=topachat_AM',$user,$pass);

}catch(PDOException $e){
    print "Error!:".$e->getMessage()."<br/>";
    die();
}

$resultat = $connexion->query("SELECT * FROM produit where prixUnitaire > 100");

$listeProduit = $resultat->fetchAll();

?>
<table>
<tr>
<th>nom du produit</th>
<th>Référence</th>
<th>prix</th>
</tr>
<?php
foreach ($listeProduit as $valeur) // On affiche tous les employés stockés dans le tableau $liste
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