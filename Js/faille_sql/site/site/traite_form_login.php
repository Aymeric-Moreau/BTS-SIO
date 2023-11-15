<?php 

//recuperation données formulaire
$login_a_tester=$_POST['login'];
$pass_a_tester=$_POST['pass'];

//interrogation bd
include('config/db.cfg');
$c = new PDO($sgbd.':host='.$host.';dbname='.$base, $user, $passwd);
$req="SELECT login_user,pass_user FROM users WHERE login_user='$login_a_tester' AND pass_user='$pass_a_tester'";

$res=$c->query($req);
unset($c);

if ($login_db=$res->fetch(PDO::FETCH_OBJ)) {
	//ouverture de la session
	session_name('EXINJECTSQL');
	session_start();
	$_SESSION['login']=$login_a_tester;
	header('Location: index.php');
} else {
	//refus
	echo 'authentification non valide';
}


?>