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

$resultat = $connexion->query("SELECT * FROM marque");

$listeMarque = $resultat->fetchAll();

?>
<body>
    <legend></legend>
    <form method="post" action="formq3.php">

    <p>Sélectionner une marque</p>
    <select name="marque_select">
    <?php
        
        foreach ($listeMarque as $valeur){
            ?>
            <option value="<?php echo $valeur['numMarque'];?>"><?php echo $valeur['libMarque'];?></option><?php
           
            
        }
        
        ?>
    </select>
    <p>
        <label for="produit"> nom du produit : </label>
        <input type="text" id="produit" name="produit"  >
    </p>
    <p>
        <label for="prix"> prix du produit : </label>
        <input type="number" id="prix" name="prix"  >
    </p>
    <br/>
    <br/>
    <input type="submit" name="Valider" value="Envoyer">
    <input type="reset" name="Annuler" value="Annuler">


    </form>
<?php

$prix = $_POST['prix'];
$nom = $_POST['produit'];
$marque = $_POST['marque_select'];

try{
    $res = $connexion->query("INSERT INTO produit (prixUnitaire, designation, marque)
VALUES ('$prix', '$nom', '$marque')");
}catch(Exception $e){
    echo "Une erreur est survenue : " . $e->getMessage();
}


?>