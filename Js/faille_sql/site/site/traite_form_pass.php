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

//accès bd
include('config/db.cfg');
$c = new PDO($sgbd.':host='.$host.';dbname='.$base, $user, $passwd);
$req="update users set pass_user='$pass' where login_user='$login'";
$res=$c->exec($req);
unset($c);
header('Location: index.php');
?>