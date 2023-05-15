<?php

/**
 * Classe d'accès aux données
 * Gère la table utilisateur
 */
class Pdo_Categories {

    /**
     * Obtient l'utilisateur correspondant au login et mot de passe reçu en paramètre
     * @return Array $commercial   Un tableau vide ou contenant une seule ligne
     */
    public static function getCategories() {
        try {
            //on récupère une instance de la class Pdo_Connexion qui établit une connexion à la base de données
            $objPdo = Pdo_Connexion::getPdoConnexion();

            //définition de la requête SQL à exécuter
            $req = "SELECT id, libelle FROM categorie";

            //demande d'exécution de la requête passée en paramètre
            $res = $objPdo->query($req);
            //on récupère le résultat de la requête dans la variable $commercial
            $categories = $res->fetchAll();
            //Ferme le curseur ce qui permet à la requête d'être de nouveau exécutée
            $res->closeCursor();
            /* Retourne un tableau contenant toutes les lignes du jeu d'enregistrements
              ou un tableau vide si aucun enregistrement trouvé */
            return $categories;
        } catch (Exception $e) {
            echo 'Echec lors de la connexion ! ' . $e->getMessage();
            die();
        }
    }

}
