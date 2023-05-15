<?php 
/**
 * Auteur : XXX
 * Date : 01/02/2022
 * Titre : Liste déroulante des marques
 */

$user = "root";
$pass = "";
try{
    $connexion = new PDO('mysql:host=localhost;dbname=CINEMA_AM',$user,$pass);
}catch(PDOException $e){
    print "Error!:".$e->getMessage()."<br/>";
    die();
}

$resultat = $connexion->query("SELECT * FROM film");
$listeFilm = $resultat->fetchAll();
?>
<form method="post" action="result.php">
    <p>Sélectionner un film</p>
    <select name="film_select">
    <?php
        foreach ($listeFilm as $valeur){
            ?>
            <option value="<?php echo $valeur['numFilm'];?>"><?php echo $valeur['titre'];?></option>
            <?php
        }
    ?>
    </select>
    <br>
    <input type="submit" value="Afficher">
    <input type="reset" value="Annulez">
</form>
