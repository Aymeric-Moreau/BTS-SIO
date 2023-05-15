<?php 
/**
 * Auteur : XXX
 * Date : 01/02/2022
 * Titre : Liste déroulante des marques
 */

$user = "root";
$pass = "";
try{
    $connexion = new PDO('mysql:host=localhost;dbname=topachat_AM',$user,$pass);
}catch(PDOException $e){
    print "Error!:".$e->getMessage()."<br/>";
    die();
}

$resultat = $connexion->query("SELECT * FROM marque");
$listeMarque = $resultat->fetchAll();
?>
<form method="post" action="tableauq4.php">
    <p>Sélectionner une marque</p>
    <select name="marque_select">
    <?php
        foreach ($listeMarque as $valeur){
            ?>
            <option value="<?php echo $valeur['numMarque'];?>"><?php echo $valeur['libMarque'];?></option>
            <?php
        }
    ?>
    </select>
    <br>
    <input type="submit" value="Afficher">
    <input type="reset" value="Annulez">
</form>
