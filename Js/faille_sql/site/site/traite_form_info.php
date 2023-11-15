<?php 
//ouverture de la session
session_name('EXINJECTSQL');
session_start();
//on regarde si l'utilisateur est authentifié
if (isset($_SESSION['login'])) {
	$login=$_SESSION['login'];
} else {
	echo 'Vous devez vous authentifier !';
	exit;
}
$pass=$_POST['pass'];
$texte=$_POST['texte'];

//accès bd
include('config/db.cfg');
$c = new PDO($sgbd.':host='.$host.';dbname='.$base, $user, $passwd);
$req="insert into infos (id_info,id_user,texte_info) values (null,(select id_user from users where login_user='$login'),'$texte')";
$res=$c->exec($req);
unset($c);
header('Location: informations.php');
?>