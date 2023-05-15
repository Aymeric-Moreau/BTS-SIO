<?php

/*
 * 
 * @version 1
 * @author	Célian
 * 
 */

class Pdo_Distributeurs {

    public static function AjouterDistributeur($numDis, $raisonSociale, $adresse1, $adresse2, $adresse3, $ville, $commercial) {


        if (!empty($adresse2) && !empty($adresse3)) {

            $req = "INSERT INTO distributeur"
                    . " VALUES($numDis,'$raisonSociale',"
                    . "'$adresse1','$adresse2','$adresse3', $ville, $commercial)";
        } elseif (empty($adresse2) && !empty($adresse3)) {

            $req = "INSERT INTO distributeur"
                    . " VALUES($numDis,'$raisonSociale',"
                    . "'$adresse1',NULL,'$adresse3', $ville, $commercial)";
        } elseif (!empty($adresse2) && empty($adresse3)) {

            $req = "INSERT INTO distributeur"
                    . " VALUES($numDis,'$raisonSociale',"
                    . "'$adresse1','$adresse2',NULL, $ville, $commercial)";
        } elseif (empty($adresse2) && empty($adresse3)) {

            $req = "INSERT INTO distributeur"
                    . " VALUES($numDis,'$raisonSociale',"
                    . "'$adresse1',NULL,NULL, $ville, $commercial)";
        }



        $objPdo = Pdo_Connexion::getPdoConnexion();
        $objPdo->exec($req);

        return true;
    }

    public static function getLastIndex() {
        $objPdo = Pdo_Connexion::getPdoConnexion();

        try {

            $req = "SELECT id FROM distributeur ORDER BY id DESC LIMIT 0,1";

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

    public static function getAllDistributeurs() {

        $objPdo = Pdo_Connexion::getPdoConnexion();

        try {


            $req = "SELECT raison_sociale,code_postal,nom_commune, contact.prenom,contact.nom,contact.id as c,commercial.nom AS nomC,commercial.prenom AS prenomC, contact.tel_fixe,contact.tel_portable,commercial.id_secteur,distributeur.id"
                    . " FROM contact"
                    . " INNER JOIN distributeur ON contact.id_distributeur = distributeur.id"
                    . " INNER JOIN commune ON distributeur.id_ville = commune.id"
                    . " INNER JOIN commercial ON distributeur.id_commercial = commercial.id"
                    . " WHERE privilegie = 1";

            $donnees = $objPdo->query($req);

            $distributeur = $donnees->fetchAll();

            $donnees->closeCursor();

            return $distributeur;
        } catch (Exception $e) {
            print"Requête non éxécuté ! <br>";
            $e->getMessage();
            print $e;
            die();
        }
    }

    public static function getDistributeursCr($distributeurId) {

        $objPdo = Pdo_Connexion::getPdoConnexion();

        try {


            $req = "SELECT compte_rendu_visite.id,nom, prenom, privilegie, raison_sociale, date_visite, coefficient_confiance, motif 
                    FROM compte_rendu_visite
                    INNER JOIN distributeur ON compte_rendu_visite.id_distributeur = distributeur.id 
                    INNER JOIN motif_visite ON compte_rendu_visite.id_motif = motif_visite.id
                    INNER JOIN contact ON compte_rendu_visite.id_contact = contact.id
                    WHERE privilegie = 1 AND compte_rendu_visite.id_distributeur = $distributeurId
                    ORDER BY compte_rendu_visite.id DESC LIMIT 0,1";
            $donnees = $objPdo->query($req);

            $distributeurCr = $donnees->fetchAll();

            $donnees->closeCursor();

            return $distributeurCr;
        } catch (Exception $e) {
            print"Requête non éxécuté ! <br>";
            $e->getMessage();
            print $e;
            die();
        }
    }

}
