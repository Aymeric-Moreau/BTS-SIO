<?php
/**
 * Auteur : XXX
 * Date : 01/02/2022
 * Titre : Tableau des produits en fonction de la marque sélectionnée
 */

$user = "root";
$pass = "";
try {
    $connexion = new PDO('mysql:host=localhost;dbname=CINEMA_AM', $user, $pass);
} catch (PDOException $e) {
    print "Error!:" . $e->getMessage() . "<br/>";
    die();
}

$film = $_POST['film_select'];
$resultat = $connexion->query("SELECT film.numFilm , casting.idFilm , titre ,  casting.idActeur , acteur.idActeur , nom , prenom  FROM film 
INNER JOIN casting on film.numFilm = casting.idFilm
INNER JOIN acteur on casting.idActeur = acteur.idActeur  where idFilm = $film");
$listeActeur = $resultat->fetchAll();
$nbr =0;

?>
<h1>Les acteur du film : <?php $listeActeur['titre'] ?> sont :
     
</h1>
<table>
    <tr>
        <th>nom </th>
        <th>prenom</th>

    </tr>
    <?php
    foreach ($listeActeur as $valeur) // On affiche tous les produits stockés dans le tableau $listeProduit
    {
        
        ?>
        
        <td>
            <?php echo $valeur['nom']; ?>
        </td>
        <td>
            <?php echo $valeur['prenom']; ?>
        </td>

        </tr>
        <?php
    }
    ?>
    <p>il y a eu <?php echo count($listeActeur) ?> acteur pour ce film</p>
    </table>