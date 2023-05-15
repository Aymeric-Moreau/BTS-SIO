<?php

// classe d'accés aux données 
// gere la table entreprise

class Pdo_Entreprise{
    
    
    public static function getEntrepriseSecteur($secteur) {
        try {
            // récupére une connexion a la base de données bd_produit
            $objJpdo = Pdo_Connexion::getPdoConnexion();
            
            //définition de la requete sql a executer
            $req = "SELECT * FROM entreprise " 
                    ."WHERE codeSecteur = $secteur "
                    ."order by codeEntreprise";
            //demande d'éxécution de la requête passée en paramétre
            $res = $objJpdo->query($req);
            //on recupére le resultat de la requeête dans la variable $lesCategorie
            $lesEntreprise = $res->fetchAll(PDO::FETCH_ASSOC);
            //ferme le curseur ce qui permet a la requête d'être de nouveau exécuter
            $res ->closeCursor();
            //retourne un tableau contenant toutes les ligne du jeux d'enregistrements ou un tableau vide qi aucun enregistrement trouvé
            return $lesEntreprise;
            
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
            return false;
            
        }
        
    }
    
     public static function getUneEntreprise($code) {
        try {
            // récupére une connexion a la base de données bd_produit
            $objJpdo = Pdo_Connexion::getPdoConnexion();
            
            //définition de la requete sql a executer
            $req = "SELECT * FROM entreprise "
                    ."WHERE codeEntreprise = $code "
                    ."order by codeEntreprise";
            //demande d'éxécution de la requête passée en paramétre
            $res = $objJpdo->query($req);
            //on recupére le resultat de la requeête dans la variable $lesCategorie
            $uneEntreprise = $res->fetchAll(PDO::FETCH_ASSOC);
            //ferme le curseur ce qui permet a la requête d'être de nouveau exécuter
            $res ->closeCursor();
            //retourne un tableau contenant toutes les ligne du jeux d'enregistrements ou un tableau vide qi aucun enregistrement trouvé
            return $uneEntreprise;
            
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
            return false;
            
        }
        
    }
    
}
?>