<?php

class Pdo_commune{

        public static function getCommunes($code) {
        try {
            //récupère une connexion à la base de données bd_produits
            $objPdo = Pdo_connexion::getPdoConnexion();

            //definition de la requête SQL à executer
            $req = "SELECT commune.id, id_departement,id_secteur, nom_commune FROM commune"
                    . " INNER JOIN departement ON commune.id_departement = departement.id"
                    . " WHERE code_postal = '$code' OR id_departement = '$code'"
                    . " ORDER BY nom_commune";
            //demande d'éxécution de la requête passée en paramètre
            $res = $objPdo->query($req);
            //on récupère le résultat de la requête dans la variable $lesCategories
            $utilisateur = $res->fetchAll(PDO::FETCH_ASSOC);
            $res->closeCursor();
            /* retourne un tableau contenant toutes les lignes du jeu d'enregistrements ou un tableau vide si aucun enregestriment trouvé */
            return $utilisateur;
        } catch (Exception $ex) {

            var_dump($ex->getMessage());
            return false;
        }
    }

}
?>