<?php 
//ouverture de la session
session_name('EXINJECTSQL');
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Exemple de faille par injection SQL</title>
</head>
<body>
<h1>Une bien belle application</h1>

<p>Modification de votre mot de passe</p>
<br /><br />
<form method="post" action="traite_form_pass.php" enctype="multipart/form-data">
	<label for="pass">Nouveau mot de passe :</label><input type="text" id="pass" name="pass" />
	<input type="submit" value="Valider">
	</form>

<p><a href="index.php">Retour &agrave; la page d'accueil</a></p>

</body>
</html>