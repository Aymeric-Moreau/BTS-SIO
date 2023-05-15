<!--Aymeric moreau-->
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

        <title>Initiation MVC</title>
    </head>
    <body>
        <?php
        session_start();
        require_once 'passerelles\Pdo_Connexion_bdexemple.php';
        require_once 'passerelles\Pdo_Utilisateur.php';
        include '"\vues\V_nav.php';
        if (!isset($_REQUEST['uc'])) {
            $_REQUEST['uc'] = 'accueil';
        }
        $uc = htmlspecialchars($_REQUEST["uc"]);
        switch ($uc) {
            case 'fonctionnalite_publique':
                include 'controleurs\C_fonctionnalite_publique.php';
                break;
            case 'authentification':
                include 'controleurs\C_authentification.php';
                break;
            case 'liste_autre':
                include 'controleurs\C_liste_autre.php';
                break;
            default :
                include '"\vues\V_accueil.php';
                break;
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </body>
</html>
