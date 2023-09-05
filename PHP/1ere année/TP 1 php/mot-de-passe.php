<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 4</title>
</head>
<body>
 <form method="post" action="mot-de-passe.php">
 <fieldset>
    <legend>Generer un mot de passe</legend>
 <p>
        <label for="nom">Votre nom : </label>
        <input type="text" id="nom" name="nom" >
    </p>
    <p>
        <label for="prenom">Votre prenom : </label>
        <input type="text" id="prenom" name="prenom"  >
    </p>
    <p>
        <label for="pseudo">Pseudo : </label>
        <input type="text" id="pseudo" name="pseudo"  >
    </p>
    <p id="bouton">
            <input type="submit" id="calculer" value="Envoyer">
            <input type="reset" id="annuler" value="Annuler">
    
        </p>
</fieldset>
 </form>   





<?php 

$mdp ="";

for ($i = 0; $i <= 15; $i++) {
$int = rand(0,9);
$acsii1 = rand(48, 56);
$acsii2 = rand(66, 122);
$choix =rand(0,2);

switch ($choix) {
    case '1':
        $mdp .= $int;
        break;
    case '2':
        $mdp .= chr($acsii1);
        break;
    case '0':
        $mdp .= chr($acsii2);
        break;
    }
}
echo $mdp;
?>
</body>
</html>