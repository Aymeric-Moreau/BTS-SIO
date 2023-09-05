<?php
/**
 * Auteur : XXX
 * Date : 01/02/2022
 * Titre : Liste déroulante des marques
 */

$user = "root";
$pass = "";
try {
    $connexion = new PDO('mysql:host=localhost;dbname=CINEMA_AM', $user, $pass);
} catch (PDOException $e) {
    print "Error!:" . $e->getMessage() . "<br/>";
    die();
}

$resultatP = $connexion->query("SELECT * FROM pays");
$resultatR = $connexion->query("SELECT * FROM realisateur");
$resultatG = $connexion->query("SELECT * FROM genre");
$listePays = $resultatP->fetchAll();
$listeReal = $resultatR->fetchAll();
$listeGenre = $resultatG->fetchAll();
?>
<form method="post" action="result.php">
    <p>Sélectionner 3 produits : </p>
    <p>
        <label for="ID"> ID : </label>
        <input type="number" id="ID" name="ID" required >
    </p>
    <p>
        <label for="Duree"> Durée : </label>
        <input type="number" id="Duree" name="Duree" required >
    </p>
    <p>
        <label for="titre"> titre : </label>
        <input type="text" id="titre" name="titre" required >
    </p>
    <p>
        <label for="date"> Date de sortie : </label>
        <input type="date" id="date" name="date" required >
    </p>
    
    <select name="pays" required>
        <?php
        foreach ($listePays as $valeur) {
            ?>
            <option value= " <?php echo $valeur['idPays']; ?> " ><?php echo "", $valeur['nomPays'];  ?></option>
            <?php
        }
        ?>
    </select>
    
    <select name="genre" required>
        <?php
        foreach ($listeGenre as $valeur) {
            ?>
            <option value= " <?php echo $valeur['codeGenre']; ?> " ><?php echo "", $valeur['libelle']; ?></option>
            <?php
        }
        ?>
    </select>

    <select name="real" required>
        <?php
        foreach ($listeReal as $valeur) {
            ?>
            <option value= " <?php echo $valeur['idRealisateur']; ?> " ><?php echo "", $valeur['nom']," " , $valeur['prenom']; ?></option>
            <?php
        }
        ?>
    </select>
    <br>
    <input type="submit" value="Ajouter">
    <input type="reset" value="Annulez">
</form>