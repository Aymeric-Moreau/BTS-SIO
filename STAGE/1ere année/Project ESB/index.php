<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Liaison au fichier css de Bootstrap-->
        <title>E.S.B</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link href="style/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        session_start();

        include 'vues/V_nav.php';

        if (!isset($_REQUEST['uc'])) {
            $_REQUEST['uc'] = 'accueil';
        }
        $uc = htmlspecialchars($_REQUEST['uc']);
        switch ($uc) {
            case "authentification":
                include 'controleurs/C_authentification.php';
                break;
            case "presentation":
                include 'controleurs/C_presentation.php';
                break;
            case "sport_co":
                include 'controleurs/C_sport_co.php';
                break;
            case "sport_combat":
                include 'controleurs/C_sport_combat.php';
                break;
            case "sport_raquette":
                include 'controleurs/C_sport_raquette.php';
                break;
            case "sport_glisse":
                include 'controleurs/C_sport_glisse.php';
                break;
            case "gym":
                include 'controleurs/C_gym.php';
                break;
            case 'petanque':
                include 'controleurs/C_petanque.php';
                break;
            case 'decouvert':
                include 'controleurs/C_decouvert.php';
                break;
            default :
                include 'vues/V_accueil.php';
                break;
        }
        include 'vues/V_footer.php';
        ?>


        

         </body>
</html>