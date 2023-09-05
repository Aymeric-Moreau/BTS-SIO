<?php

// classe d'accés aux données 
// gere la table secteur

class Pdo_Secteur{
    
    
    public static function getsecteur() {
        try {
            // récupére une connexion a la base de données bd_produit
            $objJpdo = Pdo_Connexion::getPdoConnexion();
            
            //définition de la requete sql a executer
            $req = "SELECT * FROM secteur "
                    ."order by codeSecteur";
            //demande d'éxécution de la requête passée en paramétre
            $res = $objJpdo->query($req);
            //on recupére le resultat de la requeête dans la variable $lesCategorie
            $lesSecteur = $res->fetchAll(PDO::FETCH_ASSOC);
            //ferme le curseur ce qui permet a la requête d'être de nouveau exécuter
            $res ->closeCursor();
            //retourne un tableau contenant toutes les ligne du jeux d'enregistrements ou un tableau vide qi aucun enregistrement trouvé
            return $lesSecteur;
            
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
            return false;
            
        }
        
    }
}
?>