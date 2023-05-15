<html>
    <head>
        <meta charset="utf-8">
        <title>Site produit</title>
    </head>
    <body id="zoneResultat">
        <?php 
        //charge les fichier nécessaire
        //pour l'accès a la table "categorie" de la base de données
        require_once 'passerelles/Pdo_Connexion.php';
        require_once 'passerelles/Pdo_Categorie.php';
        
        //appel de la methode getCategories() de la passerelle pdo_categories
        $listeCategories = Pdo_Categorie::getCategorie();
        // charge de la vue V_produit
        include'vues/V_produit.php';
        
        
        
        ?>
        <script>

                    </script>
    </body>
</html>






