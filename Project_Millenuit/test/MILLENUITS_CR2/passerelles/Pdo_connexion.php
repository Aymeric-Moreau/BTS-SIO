<?php

Class Pdo_connexion {

private static $strServeur = 'mysql:host=localhost';
private static $strBdd = 'dbname=bd_millenuits';
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
        Pdo_connexion::$objPdo = new PDO(Pdo_connexion::$strServeur . ';'
                . Pdo_connexion::$strBdd, Pdo_connexion::$strUser, Pdo_connexion::$strMdp);
        Pdo_connexion::$objPdo->query("SET CHARACTER SET utf8");
        Pdo_connexion::$objPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo 'Echec lors de la connexion ! <br>' . $e->getMessage();
        die();
    }
}

/**
 * destructeur de la classe
 */
public function __destruct() {
    Pdo_connexion::$objPdo = null;
}

/**
 * Fonction statique qui crée l'unique instance de la classe
 * @return l'objet objPdo de la classe Pdo_connexion
 */
public static function getPdoConnexion() {
    if (Pdo_connexion::$objPdoConnexion == null) {
        Pdo_connexion::$objPdoConnexion = new Pdo_connexion();
    }
    return Pdo_connexion::$objPdo;
}

}

?>