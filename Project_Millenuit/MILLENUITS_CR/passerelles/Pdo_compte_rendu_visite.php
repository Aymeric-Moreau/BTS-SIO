<?php

class Pdo_compte_rendu_visite {

    public static function getLastIndex() {

        $objPdo = Pdo_Connexion::getPdoConnexion();

        try {

            $req = "SELECT id FROM compte_rendu_visite ORDER BY id DESC LIMIT 0,1";

            $donnees = $objPdo->query($req);

            $index = $donnees->fetch();

            return $index;
        } catch (Exception $e) {
            print"Requête non éxécuté ! <br>";
            $e->getMessage();
            print $e;
            die();
        }
    }

    public static function AjouterCompteRendu($id, $commercial, $distributeur, $motif, $contact, $bilan, $date_compte_rendu, $date_visite, $coeff, $produits) {


        $objPdo = Pdo_Connexion::getPdoConnexion();

        $req1 = "INSERT INTO compte_rendu_visite"
                . " VALUES($id,$commercial,$distributeur,$motif,$contact,'$bilan','$date_compte_rendu','$date_visite',$coeff)";

        $objPdo->exec($req1);

        foreach ($produits as $produit) {

            $req2 = "INSERT INTO plusieurs_produit VALUES ($id,$produit)";
            $objPdo->exec($req2);
        }


        return true;
    }

    public static function listeCr($commercial, $dateD, $dateF) {

        //on récupére une instance de la class Pdo_connexion_bdbd_millenuits qui établit une connexion a la base de données
        $objPdo = Pdo_Connexion::getPdoConnexion();

        //définition de la requete sql a executer 


        $req = "SELECT compte_rendu_visite.id_commercial, coefficient_confiance, date_visite, contact.nom, contact.prenom,motif, raison_sociale "
                . "FROM compte_rendu_visite "
                . "INNER JOIN distributeur ON distributeur.id = compte_rendu_visite.id_distributeur "
                . "INNER JOIN motif_visite ON motif_visite.id = compte_rendu_visite.id_motif "
                . "INNER JOIN contact ON contact.id = compte_rendu_visite.id_contact "
                . "INNER JOIN commercial ON commercial.id = compte_rendu_visite.id_commercial "
                . "WHERE compte_rendu_visite.id_commercial = $commercial "
                . "AND date_visite >= '$dateD' "
                . "AND date_visite <= '$dateF' ";

//        echo $req ;
        

        // demande d'execution de la requete passée en paramétre
        $res = $objPdo->query($req);
        // on récupére le resultat de la réquete dans la variable contact
        $compte_rendu = $res->fetchAll();
//        print_r($compte_rendu);
        // ferme le curseur ce qui permet a la requete d'être éxécuter de nouveau
        $res->closeCursor();
        /**
         * Retourne un tableau contenant toutes les ligne du nouveau jeu d'enregistrement
         * ou un tableau vide si aucun enregistrement trouvé
         */
       return $compte_rendu;
    }

}
