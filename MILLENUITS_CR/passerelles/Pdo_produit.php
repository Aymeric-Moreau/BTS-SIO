<?php

class Pdo_produit{

    public static function getAllProduit() {
        try {
            //récupère une connexion à la base de données bd_produits
            $objPdo = Pdo_connexion::getPdoConnexion();

            //definition de la requête SQL à executer
            $req = "SELECT id, libelle FROM produit";

            $res = $objPdo->query($req);

            $produits = $res->fetchAll(PDO::FETCH_ASSOC);
            $res->closeCursor();

            return $produits;
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
            return false;
        }
    }
    
    public static function getAjoutProduits($numProd, $lblProd, $prixProd, $densite, $garnissage, $categorie, $conseils, $tailles) {
        try {
            //on récupère une instance de la class Pdo_Connexion qui établit une connexion à la base de données
            $objPdo = Pdo_Connexion::getPdoConnexion();
            //définition de la requête SQL à exécuter
            $req = "INSERT INTO `produit` (`id`, `libelle`, `prix`, `id_densite_garnissage`, `id_type_garnissage`, `id_categorie`) VALUES ('$numProd', '$lblProd', '$prixProd', '$densite', '$garnissage', '$categorie');";

            //demande d'exécution de la requête passée en paramètre
            $objPdo->exec($req);

            foreach ($conseils as $values) {
                $reqq = "INSERT INTO `conseil_produit` (`id_produit`, `id_conseil`) VALUES ($numProd, $values);";
                $objPdo->exec($reqq);
            }
            foreach ($tailles as $value) {
                $reqqq = "INSERT INTO `plusieurs_tailles` (`id_p`, `id_t`) VALUES ($numProd, $value);";
                $objPdo->exec($reqqq);
            }
            return true;
        } catch (Exception $e) {
            echo "<script>"
            . "alert(\"IMPOSSIBLE ! Le numéro de produit est déjà utilisé\");"
            . "document.location.href = 'index.php?uc=produits&action=ajout_produits';"
            . "</script>";

            die();
        }
    }

}
