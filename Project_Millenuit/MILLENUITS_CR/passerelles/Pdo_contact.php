<?php

/**
 * Class d'accées aux données
 * gére la table utilisateur 
 */
class Pdo_Contact {

    public static function ajoutContact($id, $prenom, $nom, $email, $telM, $telF, $privilege, $distrib) {
        try {
            //on récupére une instance de la class Pdo_connexion_bdbd_millenuits qui établit une connexion a la base de données
            $objPdo = Pdo_Connexion::getPdoConnexion();

            if (empty($telF)) {
                $req = "INSERT INTO `contact` (`id`, `nom`, `prenom`, `mail`, `tel_portable`, `privilegie`, `id_distributeur`) VALUES ($id, '$nom', '$prenom', '$email', '$telM', $privilege, $distrib);";
            } elseif (empty($telM)) {
                $req = "INSERT INTO `contact` (`id`, `nom`, `prenom`, `mail`, `tel_fixe`, `privilegie`, `id_distributeur`) VALUES ($id, '$nom', '$prenom', '$email', '$telF', $privilege, $distrib);";
            } else {
                //définition de la requete sql a executer 
                $req = "INSERT INTO `contact` (`id`, `nom`, `prenom`, `mail`, `tel_fixe`, `tel_portable`, `privilegie`, `id_distributeur`) VALUES ($id, '$nom', '$prenom', '$email', '$telF', '$telM', $privilege, $distrib);";
            }
            // demande d'execution de la requete passée en paramétre
            $res = $objPdo->exec($req);
        } catch (Exception $e) {
            echo 'Echec lors de la connexion ! ' . $e->getMessage();
        }
    }

    public static function listeContact($distrib) {

        //on récupére une instance de la class Pdo_connexion_bdbd_millenuits qui établit une connexion a la base de données
        $objPdo = Pdo_Connexion::getPdoConnexion();

        //définition de la requete sql a executer 

        
        $req = "SELECT contact.id, nom , prenom , mail, tel_fixe , tel_portable , privilegie , raison_sociale FROM contact "
        ."INNER JOIN distributeur on distributeur.id = contact.id_distributeur  where contact.id_distributeur = $distrib";
        

        // demande d'execution de la requete passée en paramétre
        $res = $objPdo->query($req);
        // on récupére le resultat de la réquete dans la variable contact
        $contact = $res->fetchAll();
        // ferme le curseur ce qui permet a la requete d'être éxécuter de nouveau
        $res->closeCursor();
        /**
         * Retourne un tableau contenant toutes les ligne du nouveau jeu d'enregistrement
         * ou un tableau vide si aucun enregistrement trouvé
         */
        return $contact;
    }

    public static function modifPrivilege($id) {
        try {
            //on récupére une instance de la class Pdo_connexion_bdbd_millenuits qui établit une connexion a la base de données
            $objPdo = Pdo_Connexion::getPdoConnexion();

            //définition de la requete sql a executer 
            $req = "UPDATE `contact` SET `privilegie` = '0' WHERE `id` = $id; ";

            // demande d'execution de la requete passée en paramétre
            $res = $objPdo->exec($req);
        } catch (Exception $e) {
            echo 'Echec lors de la connexion ! ' . $e->getMessage();
        }
    }

}
