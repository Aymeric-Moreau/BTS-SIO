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

//on récupère l'id depuis l'URL
// $id = htmlspecialchars($_GET['id'],ENT_QUOTES);
$id = $_GET['id'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Exemple de faille par injection SQL</title>
</head>
<body>
<h1>Une bien belle application</h1>

<h2>Détail de l'info</h2>

<?php 
//interrogation bd
include('config/db.cfg');
try {
$c = new PDO($sgbd.':host='.$host.';dbname='.$base, $user, $passwd);
$c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // Utilisation de la requête préparée
	   $req = "SELECT texte_info, login_user FROM infos NATURAL JOIN users WHERE id_info = :id";
	   $stmt = $c->prepare($req);
	   $stmt->bindParam(':id', $id, PDO::PARAM_INT);
	   $stmt->execute();

$info=$stmt->fetchAll();

foreach ($info as $uneInfo) {
	echo '<p><b>Auteur de l\'information : ' . $uneInfo['login_user'] . '</b></p>';
	echo '<p>L\'info :</p>';
	echo '<p>' . $uneInfo['texte_info'] . '</p>';
}
} catch (PDOException $e) {
	echo "Erreur : " . $e->getMessage();
} finally {
	unset($c);
}


?>

<p><a href="index.php">Retour &agrave; la page d'accueil</a></p>

</body>
</html>

