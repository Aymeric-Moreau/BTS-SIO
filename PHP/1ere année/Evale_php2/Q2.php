<?php 
/**
 * Auteur ; aymeric moreau
 * Date : 31/03/2023
 * Titre : q2 evale tableau acteur
 */

$user = "root";
$pass = "";
try{
    $connexion = new PDO('mysql:host=localhost;dbname=CINEMA_AM',$user,$pass);

}catch(PDOException $e){
    print "Error!:".$e->getMessage()."<br/>";
    die();
}
//on récupére les acteur anglais dans la base de donnée
$resultat = $connexion->query("SELECT * FROM acteur where idPays = 1");

$listeActeur = $resultat->fetchAll();

?>
<table>
<tr>
<th>nom </th>
<th>prenom</th>

</tr>
<?php
foreach ($listeActeur as $valeur) // On affiche tous les acteur stockés dans le tableau $liste
{
?>
<tr>
<td><?php echo $valeur['nom'];?></td>
<td><?php echo $valeur['prenom'];?></td>

</tr>
<?php
}
?>
</table>