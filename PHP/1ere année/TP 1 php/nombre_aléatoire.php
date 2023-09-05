<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nombre de 1 a 20</title>
</head>
<body>
    <form method="post" action="nombre_aléatoire.php" name="unformulaire">
        <fieldset>
        <legend>La disposition des chiffre et des nombre : </legend>
            <input type="radio" id="ligne" name="forme" value="l" require checkdate> <label for="ligne">En ligne</label>
            
            <input type="radio" id="colonne" name="forme" value="c" require > <label for="colonne">En colonne</label>

            <input type="radio" id="colonneS" name="forme" value="cs" require > <label for="colonneS">En colonne et au sautant des ligne</label>

            <p id="bouton">
            <input type="submit" id="calculer" value="Activer">
            <input type="reset" id="annuler" value="Annuler">
    
        </p>

        </fieldset>



</form>
<?php 
$value = $_POST['forme'] ;


switch ($value) {
    case 'l':
        for($i =1; $i <= 20; $i++){
            echo $i,',';
        }
            
        break;
    case 'c':
        for($i =1; $i <= 20; $i++){
            echo $i,'<p></p>';
        }
        break;
    case 'cs':
        for($i =1; $i <= 20; $i++){
            if($i>10 && $i%2 == 0){
                echo nl2br ($i),'<br/> </br> <br/> </br>';
                
            }else{
                echo $i,'<p> </p>';
            }
            
        }
        break;

    }
    
?>
</body>
</html>
