<?php

$texte = htmlspecialchars($_POST['texte']);
//accès bd
$sgbd = 'mysql';
$host = 'localhost';
$base = 'ex_faille_xss';
$user = 'root';
$passwd = '';
$c = new PDO($sgbd . ':host=' . $host . ';dbname=' . $base, $user, $passwd);
$req = "insert into commentaire(contenu) values ('$texte')";
$res = $c->exec($req);
header('Location: affiche_commentaires.php');
?>
