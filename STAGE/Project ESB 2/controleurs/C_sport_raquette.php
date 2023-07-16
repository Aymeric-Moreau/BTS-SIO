<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "tennis":

        include 'vues/vues_sport_raquette/V_tennis.php';
        break;

    case "tennis_table":

        include 'vues/vues_sport_raquette/V_tennis_table.php';
        break;

    case "badminton":
        include 'vues/vues_badminton/V_badminton.php';
        break;
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $email = $_POST['email'];
    $message = $_POST['Textarea'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    // Validation des données (exemple simple)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "L'adresse e-mail n'est pas valide.";
        exit;
    }

    // Construction de l'e-mail
    $to = 'aymeric.moreau13@gmail.com';
    $subject = "Nouveau message du formulaire de $nom $prenom ";
    $body = "Adresse e-mail : $email\n\nMessage : $message";

    // Envoi de l'e-mail
    if (mail($to, $subject, $body)) {
        echo "E-mail envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de l'e-mail.";
    }
}
?>



