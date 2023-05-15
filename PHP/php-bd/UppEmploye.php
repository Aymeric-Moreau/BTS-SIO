<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
$user = "root";
$pass = "";
try{
    $connexion = new PDO('mysql:host=localhost;dbname=salaries',$user,$pass);

}catch(PDOException $e){
    print "Error!:".$e->getMessage()."<br/>";
    die();
}

$resultat = $connexion->query("SELECT * FROM salarie");

$listeEmployes = $resultat->fetchAll();

?>
<body>
    <legend>Supprimer un employe</legend>
    <form method="poste" action="SupprimerEmploye.php">
    <p>Sélectionner un employer</p>
    <select name="enp_supp"></select>
    <?php
        
        foreach ($listeEmployes as $valeur){
            ?>
            <option value="<?php echo $valeur['matricule'];?>"><?php echo $valeur['nom']." ".$valeur['prenom'];?></option><?php
           
            
        }
        
        ?>
    </select>
    <br/>
    <br/>
    <input type="submit" name="Valider" value="Supprimer">
    <input type="reset" name="Annuler" value="Annuler">


    </form>
    
      

    
</body>
</html>