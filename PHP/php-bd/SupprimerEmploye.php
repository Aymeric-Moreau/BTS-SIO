<?php 
/**
 * Auteur ; XXX
 * Date : 01/02/2022
 * Titre : PHP avec Connexion PDO à une base de données
 */
$enp = $_POST['enp_supp'];
$user = "root";
$pass = "";
try{
    $connexion = new PDO('mysql:host=localhost;dbname=salaries',$user,$pass);

}catch(PDOException $e){
    print "Error!:".$e->getMessage()."<br/>";
    die();
}

$resultat = $connexion->exet("SELECT * FROM salarie");

if($resultat ==1){
    echo

};





?>