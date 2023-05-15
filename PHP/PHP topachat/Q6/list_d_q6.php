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

$resultat = $connexion->query("SELECT * FROM client");
$listeproduit = $resultat->fetchAll();
?>
<form method="post" action="result.php">
    <p>Sélectionner une Commande</p>
    <select name="client_select">
        <?php
        foreach ($listeproduit as $valeur) {
            ?>
            <option value=" <?php echo $valeur['numClient']; ?> "><?php echo "n°", $valeur['numClient'], ",  ", $valeur['nomClient']; ?></option>
            <?php
        }
        ?>
    </select>
    <br>
    <input type="submit" value="Supprimez">
    <input type="reset" value="Annulez">
</form>