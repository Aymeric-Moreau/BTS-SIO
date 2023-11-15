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
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Exemple de faille par injection SQL</title>
</head>
<body>
<h1>Une bien belle application</h1>

<h2>Dernières informations</h2>
<table>

<?php 
//interrogation bd
include('config/db.cfg');
$c = new PDO($sgbd.':host='.$host.';dbname='.$base, $user, $passwd);
$req="select texte_info from infos order by id_info desc limit 5";
$res=$c->query($req);

$i=1;
while ($info=$res->fetch(PDO::FETCH_OBJ)) {
	echo '<tr><td>'.$i.')	</td><td>'.$info->texte_info."</td></tr>\n";
	$i++;
}
unset($c);


?>

</table>

<br /><br />
<form method="post" action="traite_form_info.php" enctype="multipart/form-data">
	<label for="texte">Ajouter une information : </label><textarea id="texte" name="texte" ></textarea>
	<input type="submit" value="Envoyer">
	</form>

<p><a href="index.php">Retour &agrave; la page d'accueil</a></p>

</body>
</html>

