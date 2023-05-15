<?php

class Pdo_motif_visite{
    
     public static function getAllMotifs() 
    {
        try {
            //récupère une connexion à la base de données bd_produits
            $objPdo = Pdo_connexion::getPdoConnexion();

            //definition de la requête SQL à executer
            $req = "SELECT id, motif FROM motif_visite";

            $res = $objPdo->query($req);

            $commerciaux = $res->fetchAll(PDO::FETCH_ASSOC);
            $res->closeCursor();
            

            return $commerciaux;
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
            return false;
        }
    }
    
}