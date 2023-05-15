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

    public static function getBilan($id) {


        $objPdo = Pdo_Connexion::getPdoConnexion();

        $req1 = "SELECT raison_sociale,date_visite as date,bilan,coefficient_confiance as coeff,tel_fixe,tel_portable,produit.libelle as pl,categorie.libelle as cl 
                FROM compte_rendu_visite 
                INNER JOIN contact ON id_contact = contact.id 
                INNER JOIN distributeur ON compte_rendu_visite.id_distributeur = distributeur.id 
                INNER JOIN plusieurs_produit ON id_visite = compte_rendu_visite.id 
                INNER JOIN produit ON id_produits = produit.id 
                INNER JOIN categorie ON id_categorie = categorie.id 
                WHERE compte_rendu_visite.id_distributeur = $id;";

        $res = $objPdo->query($req1);

        $bilan = $res->fetchAll();

        $res->closeCursor();

        return $bilan;
    }
    
    public static function newBilan($id,$bilan,$coeff) 
    {
        
        $objPdo = Pdo_Connexion::getPdoConnexion();

        $req1 = "UPDATE compte_rendu_visite
                SET bilan = '$bilan', coefficient_confiance = $coeff
                WHERE id = $id";

        $objPdo->exec($req1);

       
        return true;

        
    
    }
    
    

}
