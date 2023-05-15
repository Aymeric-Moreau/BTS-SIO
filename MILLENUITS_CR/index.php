<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Liaison au fichier css de Bootstrap-->
        <title>Millenuits</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <link href="vues/vues_millenuits/CSS_caroussel/caroussel.css" rel="stylesheet">

    </head>
    <body>
        <?php
        session_start();
        require_once 'passerelles/Pdo_connexion.php';
        require_once 'passerelles/Pdo_utilisateur.php';
        require_once 'passerelles/Pdo_distributeurs.php';
        require_once 'passerelles/Pdo_commune.php';
        require_once 'passerelles/Pdo_commercial.php';
        require_once 'passerelles/Pdo_compte_rendu_visite.php';
        require_once 'passerelles/Pdo_motif_visite.php';
        require_once 'passerelles/Pdo_produit.php';
        require_once 'passerelles/Pdo_categorie.php';
        require_once 'passerelles/Pdo_secteur.php';
        require_once 'passerelles/Pdo_densite.php';
        require_once 'passerelles/Pdo_taille.php';
        require_once 'passerelles/Pdo_garnissage.php';
        require_once 'passerelles/Pdo_conseil_lavage.php';
        include 'vues/vues_millenuits/V_nav.php';
        require_once 'passerelles/Pdo_contact.php';

        if (!isset($_REQUEST['uc'])) {
            $_REQUEST['uc'] = 'accueil';
        }
        $uc = htmlspecialchars($_REQUEST['uc']);
        switch ($uc) {
            case "authentification":
                include 'controleurs/C_authentification.php';
                break;
            case "distributeur":
                include 'controleurs/C_distributeurs.php';
                break;
            case "compte_rendu":
                include 'controleurs/C_comptes_rendus.php';
                break;
             case "commerciaux":
                include 'controleurs/C_commerciaux.php';
                break;
            case "produits":
                include 'controleurs/C_produits.php';
                break;
              case 'contacts':
                include 'controleurs/C_contacts.php';
                break;
            default :
                include 'vues/vues_millenuits/V_accueil.php';
                break;
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>