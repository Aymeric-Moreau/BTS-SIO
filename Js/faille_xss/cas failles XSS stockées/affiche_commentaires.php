<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Exemple de faille XSS stockée</title>
    </head>
    <body>
        <h1>Un exemple simple</h1>

        <h2>Liste des commentaires</h2>
        <?php
        $sgbd = 'mysql';
        $host = 'localhost';
        $base = 'ex_faille_xss';
        $user = 'root';
        $passwd = '';
        $c = new PDO($sgbd . ':host=' . $host . ';dbname=' . $base, $user, $passwd);
        $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $req = "select id, contenu from commentaire";
        $res = $c->query($req);
        $commentaires = $res->fetchAll();

        foreach ($commentaires as $unCommentaire) {
            echo '<p>' . $unCommentaire['id'] . ' ' . $unCommentaire['contenu'] . '</p>';
        }
        ?>

    </body>
</html>