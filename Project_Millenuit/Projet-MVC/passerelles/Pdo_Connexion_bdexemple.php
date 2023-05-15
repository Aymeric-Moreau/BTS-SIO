<?php

/**
 * 	Classe d'accès aux données.
 * 	Utilise les services de la classe PDO
 * 	Les attributs sont tous statiques,
 * 	les 4 premiers pour la connexion
 * 	$objPdo de type PDO
 * 	$objPdoConnexion qui contiendra l'unique instance de la classe
 * 	@author: 	SIO
 * 	@version: 	1.0
 * 	@link: 		https://www.php.net/manual/fr/book.pdo.php
 */
class Pdo_Connexion_bdexemple {

    private static $strServeur = 'mysql:host=localhost';
    private static $strBdd = 'dbname=exemple';
    private static $strUser = 'root';
    private static $strMdp = '';
    private static $objPdo;
    private static $objPdoConnexion = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct() {
        try {
            Pdo_Connexion_bdexemple::$objPdo = new PDO(Pdo_Connexion_bdexemple::$strServeur . ';'
                    . Pdo_Connexion_bdexemple::$strBdd, Pdo_Connexion_bdexemple::$strUser, Pdo_Connexion_bdexemple::$strMdp);
            Pdo_Connexion_bdexemple::$objPdo->query("SET CHARACTER SET utf8");
            Pdo_Connexion_bdexemple::$objPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo 'Echec lors de la connexion ! ' . $e->getMessage();
            die();
        }
    }

    /**
     * destructeur de la classe
     */
    public function __destruct() {
        Pdo_Connexion_bdexemple::$objPdo = null;
    }

    /**
     * Fonction statique qui crée l'unique instance de la classe
     * @return l'objet objPdo de la classe Pdo_Connexion_bdexemple
     */
    public static function getPdoConnexion() {
        if (Pdo_Connexion_bdexemple::$objPdoConnexion == null) {
            Pdo_Connexion_bdexemple::$objPdoConnexion = new Pdo_Connexion_bdexemple();
        }
        return Pdo_Connexion_bdexemple::$objPdo;
    }

}

?>