<?php
/**
 * classe d'accès aux données
 * Gére la table produit
 */

class Pdo_Produit{
    
    /**
     * récupére les produit d'une catégorie
     * @param int $id_categ id de la catégorie
     * @return $lesProduits Tableau des lignes de la table produit
     */
    
    public static function getProduitsCategories($id_categ){
        
        try{
            $objPdo = Pdo_Connexion::getPdoConnexion();
            $req = "SELECT pr_libelle, pr_prix FROM produit"
                    . " where pr_categorie = $id_categ"
                        . " order by pr_libelle";
            $res = $objPdo->query($req);
            $lesProduits = $res->fetchAll (PDO::FETCH_ASSOC);
            return $lesProduits;
            
        } catch (Exception $ex){
            //affiche le message retoruné^par le SGBD,
            //cette ligne sera supprimée lors de la mise en production
            var_dump($ex->getMessage());
            return false;
            
        } 
            
        }
    }
    
    
    
    
    








/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

