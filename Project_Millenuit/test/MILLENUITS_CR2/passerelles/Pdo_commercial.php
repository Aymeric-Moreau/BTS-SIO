<?php

class Pdo_commercial {

    public static function getCommerciaux($ville) {
        try {
            //récupère une connexion à la base de données bd_produits
            $objPdo = Pdo_connexion::getPdoConnexion();

            //definition de la requête SQL à executer
            $req = "SELECT nom,prenom, id FROM commercial"
                    . " WHERE id_secteur = (SELECT id_secteur"
                    . " FROM departement"
                    . " INNER JOIN commune ON departement.id = commune.id_departement"
                    . " WHERE commune.id = $ville)";

            $res = $objPdo->query($req);

            $commerciaux = $res->fetchAll(PDO::FETCH_ASSOC);
            $res->closeCursor();

            return $commerciaux;
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
            return false;
        }
    }
    
    public static function getAllCommerciaux() 
    {
        try {
            //récupère une connexion à la base de données bd_produits
            $objPdo = Pdo_connexion::getPdoConnexion();

            //definition de la requête SQL à executer
            $req = "SELECT id, nom, prenom, mail, tel_fixe, tel_portable, id_secteur FROM commercial ORDER BY nom";

            $res = $objPdo->query($req);

            $commerciaux = $res->fetchAll(PDO::FETCH_ASSOC);
            $res->closeCursor();
            

            return $commerciaux;
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
            return false;
        }
    }
    
        public static function getAjoutCommercial($numCom, $nomCom, $prenomCom, $telFix, $telPort, $sectAff, $mail) {
        try {
            //on récupère une instance de la class Pdo_Connexion qui établit une connexion à la base de données
            $objPdo = Pdo_Connexion::getPdoConnexion();
            if ($telFix != NULL) {
                //définition de la requête SQL à exécuter
                $req = "INSERT INTO `commercial` (`id`, `nom`, `prenom`, `mail`, `tel_fixe`, `tel_portable`, `id_secteur`) VALUES ('$numCom', '$nomCom', '$prenomCom', '$mail', '$telFix', '$telPort', '$sectAff');";
            } else {
                $req = "INSERT INTO `commercial` (`id`, `nom`, `prenom`, `mail`, `tel_portable`, `id_secteur`) VALUES ('$numCom', '$nomCom', '$prenomCom', '$mail', '$telPort', '$sectAff');";
            }

            //demande d'exécution de la requête passée en paramètre
            $res = $objPdo->query($req);
            //on récupère le résultat de la requête dans la variable $commercial
            $ajCommercial = $res->fetchAll();
            //Ferme le curseur ce qui permet à la requête d'être de nouveau exécutée
            $res->closeCursor();
            /* Retourne un tableau contenant toutes les lignes du jeu d'enregistrements
              ou un tableau vide si aucun enregistrement trouvé */
            return $ajCommercial;
        } catch (Exception $e) {
            echo "<script>"
            . "alert(\"IMPOSSIBLE ! Le numéro de commercial est déjà utilisé\");"
            . "document.location.href = 'index.php?uc=commerciaux&action=ajout_commerciaux';"
            . "</script>";

            die();
        }
    }

}
?>