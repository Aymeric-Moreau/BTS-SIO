
<footer>
<a href="#debut"><img src="img/hautdepage.png" alt="logo fléche vers le haut"></a>

<p> <a href="https://validator.w3.org/"><img src="img/vcss-blue.gif" alt="logo de w3c"></a></p>
</footer>
<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$email = $_POST['email'];
$dateN = $_POST['date'];
echo "le nom :", $nom, " le prenom : ", $prenom, " l'age : ", $age, " le mail : ", $email, " et la date de naissance : ", $dateN ;
?>


</body>
</html>