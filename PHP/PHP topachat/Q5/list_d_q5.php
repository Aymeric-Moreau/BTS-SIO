<?php
/**
 * Auteur : XXX
 * Date : 01/02/2022
 * Titre : Liste déroulante des marques
 */

$user = "root";
$pass = "";
try {
    $connexion = new PDO('mysql:host=localhost;dbname=topachat_AM', $user, $pass);
} catch (PDOException $e) {
    print "Error!:" . $e->getMessage() . "<br/>";
    die();
}

$resultat = $connexion->query("SELECT * FROM commande");
$listeproduit = $resultat->fetchAll();
?>
<form method="post" action="tableauq5.php">
    <p>Sélectionner une Commande</p>
    <select name="commande_select">
        <?php
        foreach ($listeproduit as $valeur) {
            ?>
            <option value= " <?php echo $valeur['numCommande']; ?> " ><?php echo "n°", $valeur['numCommande'], ",  ", $valeur['dateCommande']; ?></option>
            <?php
        }
        ?>
    </select>
    <br>
    <input type="submit" value="Afficher">
    <input type="reset" value="Annulez">
</form>