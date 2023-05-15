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

    public static function AjouterCompteRendu($id, $commercial,$distributeur, $motif, $contact, $bilan, $date_compte_rendu, $date_visite, $coeff, $produits) {


        $objPdo = Pdo_Connexion::getPdoConnexion();
        
       

        $req1 = "INSERT INTO compte_rendu_visite"
                . " VALUES($id,$commercial,$distributeur,$motif,$contact,'$bilan','$date_compte_rendu','$date_visite',$coeff)";

        $objPdo->exec($req1);

        foreach ($produits as $produit) 
        {

            $req2 = "INSERT INTO plusieurs_produit VALUES ($id,$produit)";
            $objPdo->exec($req2);
        }


        return true;
    }

}
