<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exemple de faille XSS reflétée</title>
        <script>
            document.cookie = 'login=admin';
            document.cookie = 'motdepasse=mon_super_mot_de_passe_secret';
        </script>
    </head>
    <body>
        <h1>Mon super moteur de recherche</h1>    
        <form type="get" action="">
            <input type="text" name="keyword"/>
            <input type="submit" value="Rechercher"/>
        </form> 
        <br>
        <?php
        if (!empty($_GET['keyword'])) {
            echo htmlspecialchars($_GET['keyword']);
        }
        ?>		
    </body>
</html>