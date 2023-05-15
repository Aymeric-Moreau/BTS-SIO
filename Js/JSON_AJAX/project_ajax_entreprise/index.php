<html>
    <head>
        <meta charset="utf-8">
        <title>Site produit</title>
    </head>
    <body id="zoneResultat">
        <?php 
        //charge les fichier nécessaire
        //pour l'accès a la table "entreprise" et "secteur" de la base de données
        require_once 'passerelles\Pdo_Connexion.php';
        require_once 'passerelles/Pdo_Secteur.php';
        
        require_once 'passerelles/Pdo_Entreprise.php';
        //appel de la methode getsecteur() de la passerelle Pdo_Secteur
        $lesSecteur = Pdo_Secteur::getsecteur();
        
        // charge de la vue V_produit
        include'vues/liste.php';
        
        
        
        ?>
        <script>



                    </script>
    </body>
</html>

