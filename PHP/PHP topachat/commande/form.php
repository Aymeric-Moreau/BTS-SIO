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

$resultat = $connexion->query("SELECT * FROM produit");
$listeproduit = $resultat->fetchAll();
?>
<form method="post" action="resultC.php">
    <p>Sélectionner 3 produits : </p>
    <p>
        <label for="numC"> numéro du client : </label>
        <input type="number" id="numC" name="numC"  >
    </p>
    <p>
        <label for="date"> Date : </label>
        <input type="text" id="date" name="date"  >
    </p>
    <p>
        <label for="paie"> moyen de paiment : </label>
        <input type="text" id="paie" name="paie" >
    </p>
    <p>
        <label for="qt1"> Quantité : </label>
        <input type="number" id="qt1" name="qt1"  >
    </p>
    <select name="produit1">
        <?php
        foreach ($listeproduit as $valeur) {
            ?>
            <option value= " <?php echo $valeur['numProduit']; ?> " ><?php echo "", $valeur['designation'], " au prix de  ", $valeur['prixUnitaire']; ?></option>
            <?php
        }
        ?>
    </select>
    <p>
        <label for="qt2"> Quantité : </label>
        <input type="number" id="qt2" name="qt2"  >
    </p>
    <select name="produit2">
        <?php
        foreach ($listeproduit as $valeur) {
            ?>
            <option value= " <?php echo $valeur['numProduit']; ?> " ><?php echo "", $valeur['designation'], " au prix de  ", $valeur['prixUnitaire']; ?></option>
            <?php
        }
        ?>
    </select>
    <p>
        <label for="qt3"> Quantité : </label>
        <input type="number" id="qt3" name="qt3"  >
    </p>
    <select name="produit3">
        <?php
        foreach ($listeproduit as $valeur) {
            ?>
            <option value= " <?php echo $valeur['numProduit']; ?> " ><?php echo "", $valeur['designation'], " au prix de  ", $valeur['prixUnitaire']; ?></option>
            <?php
        }
        ?>
    </select>
    <br>
    <input type="submit" value="Ajouter">
    <input type="reset" value="Annulez">
</form>