<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Site pirate</title>
</head>
<body>
<h1>Un exemple simple</h1>

<h2>Vous êtes sur le site pirate</h2>
<?php
            if(!empty($_GET['cookies'])){
          
                echo "Résultat(s) pour le cookie : ". $_GET['cookies'] ;
            }
        ?>
</body>
</html>