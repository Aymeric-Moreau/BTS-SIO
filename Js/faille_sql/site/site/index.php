<?php 
//ouverture d'une session
session_name('EXINJECTSQL');
session_start();

//on regarde si l'utilisateur est authentifié
$login=null;
if (isset($_SESSION['login'])) {
	$login=$_SESSION['login'];
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

<p>Cette application n&eacute;cessite de s'identifier car elle contient des donn&eacute;es secr&egrave;tes</p>
<br /><br />
<?php 
if (empty($login)) {
	echo '<form method="post" action="traite_form_login.php" enctype="multipart/form-data">
	<label for="login">Login :</label><input type="text" id="login" name="login" />
	<label for="pass">Mot de passe :</label><input type="text" id="pass" name="pass" />
	<input type="submit" value="Valider">
	</form>';
} else {
	echo '
	<ul>
		<li><a href="informations.php">Informations</a></li>
		<li><a href="form_pass.php">Modifier mot de passe</a></li>
		<li>...</li>
		<li>...</li>
	</ul>
	';
	echo 'Utilisateur connect&eacute; :'.$login;
	echo '<a href="deconnexion.php" > Se d&eacute;connecter</a>';
}

?>

</body>
</html>