<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Exemple de faille XSS stockée</title>
        <script>
            document.cookie = 'login=admin';
            document.cookie = 'motdepasse=mon_super_mot_de_passe_secret';
        </script>
    </head>
    <body>
        <h1>Un exemple simple</h1>
        <br><br>
        <form method="post" action="traite_form_commentaire.php">
            <label for="texte">Ajouter un commentaire : </label><br>
            <textarea id="texte" name="texte" cols="30" rows="8"></textarea>
            <br><br>
            <input type="submit" value="Envoyer">
        </form>
    </body>
</html>

