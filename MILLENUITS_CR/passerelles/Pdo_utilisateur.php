<?php

/*
 * 
 * @version 1
 * @author	Célian
 * 
*/

class Pdo_Utilisateur{
    
    public static function getUtilisateur($login, $mdp){
        try {
            //récupère une connexion à la base de données bd_produits
            $objPdo = Pdo_connexion::getPdoConnexion();
            
            //definition de la requête SQL à executer
            $req = "SELECT login FROM table_acces_app where login = '$login' and password = '$mdp'";
            //demande d'éxécution de la requête passée en paramètre
            $res = $objPdo->query($req);
            //on récupère le résultat de la requête dans la variable $lesCategories
            $utilisateur = $res->fetchAll();
            $res->closeCursor();
            /*retourne un tableau contenant toutes les lignes du jeu d'enregistrements ou un tableau vide si aucun enregestriment trouvé*/
            return $utilisateur;
                   
        } catch (Exception $ex) {
            
            var_dump($ex->getMessage());
            return false;
                
        }
    }
    
   
}