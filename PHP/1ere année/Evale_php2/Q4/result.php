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
?>

<?php
try {
    $ID = $_POST['ID'];
    $Duree = $_POST['Duree'];
    $titre = $_POST['titre'];
    $date = $_POST['date'];
    $pays = $_POST['pays'];
    $genre = $_POST['genre'];
    $real = $_POST['real'];
    print_r($_POST);
    $partCommande = $connexion->query("INSERT INTO `film` (`numFilm`, `titre`, `duree`, `dateSortie`, `codeGenre`, `idRealisateur`, `idPays`) VALUES ($ID, '$titre', $Duree, $date, $genre, $real, $pays); ");
// il ya toujour l'erreur mais le film s'ajoute bien
    $partCommande->execute([$partCommande]);
    echo "le film a bien été ajouter";
} catch (PDOException $e) {
    print "Error!:" . $e->getMessage() . "<br/>";
}

?>