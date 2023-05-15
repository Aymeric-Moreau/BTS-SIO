<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 1</title>
</head>
<body>
<form method="post" action="ex1.php">
 <fieldset>
    <legend>Saisie des medecin</legend>
 <p>
        <label for="nom"> nom du 1er medecin : </label>
        <input type="text" id="nom1" name="nom[]" >
    </p>
    <p>
        <label for="prenom1"> prenom du 1er medecin : </label>
        <input type="text" id="prenom1" name="prenom[]"  >
    </p>

</fieldset>
<fieldset>
    
 <p>
        <label for="nom2"> nom du 2eme medecin : </label>
        <input type="text" id="nom2" name="nom[]" >
    </p>
    <p>
        <label for="prenom2"> prenom du 2eme medecin : </label>
        <input type="text" id="prenom2" name="prenom[]"  >
    </p>

</fieldset>
<fieldset>
    
 <p>
        <label for="nom3"> nom du 3eme medecin : </label>
        <input type="text" id="nom3" name="nom[]" >
    </p>
    <p>
        <label for="prenom3"> prenom du 3eme medecin: </label>
        <input type="text" id="prenom3" name="prenom[]"  >
    </p>

</fieldset>
<p id="bouton">
            <input type="submit" id="calculer" value="Valider">
            <input type="reset" id="annuler" value="Annuler">
    
        </p>
 </form> 
 
 <?php 
 
$nom = 
 
 $result = array_map(null, $nom, $prenom);

 foreach ($_POST["nom"] as $value1) {
   echo "$value1";
 }


 ?>

</body>
</html>    