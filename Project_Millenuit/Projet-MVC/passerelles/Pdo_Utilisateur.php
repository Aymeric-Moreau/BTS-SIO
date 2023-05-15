<?php

/**
 * Class d'accées aux données
 * gére la table utilisateur 
 */
class Pdo_Utilisateur {

    /**
     * obtien l'utilisateur correspond au login et mdp recu en paramétre
     * @return Array $utilisateur Un tableau vide ou contenant une seul ligne
     */
    public static function getUtilisateur($login, $mdp) {
        //on récupére une instance de la class Pdo_connexion_bdexemple qui établit une connexion a la base de données
        $objPdo = Pdo_Connexion_bdexemple::getPdoConnexion();

        //définition de la requete sql a executer 
        $req = "SELECT login FROM utilisateur where login = '$login' and mdp = '$mdp'";

        // demande d'execution de la requete passée en paramétre
        $res = $objPdo->query($req);
        // on récupére le resultat de la réquete dans la variable utilisateur
        $utilisateur = $res->fetchAll();
        // ferme le curseur ce qui permet a la requete d'être éxécuter de nouveau
        $res->closeCursor();
        /**
         * Retourne un tableau contenant toutes les ligne du nouveau jeu d'enregistrement
         * ou un tableau vide si aucun enregistrement trouvé
         */
        return $utilisateur;
    }

    public static function listeUtilisateur() {

        //on récupére une instance de la class Pdo_connexion_bdexemple qui établit une connexion a la base de données
        $objPdo = Pdo_Connexion_bdexemple::getPdoConnexion();

        //définition de la requete sql a executer 
        $req = "SELECT * FROM utilisateur";

        // demande d'execution de la requete passée en paramétre
        $res = $objPdo->query($req);
        // on récupére le resultat de la réquete dans la variable utilisateur
        $utilisateur = $res->fetchAll();
        // ferme le curseur ce qui permet a la requete d'être éxécuter de nouveau
        $res->closeCursor();
        /**
         * Retourne un tableau contenant toutes les ligne du nouveau jeu d'enregistrement
         * ou un tableau vide si aucun enregistrement trouvé
         */
        return $utilisateur;
    }

}
