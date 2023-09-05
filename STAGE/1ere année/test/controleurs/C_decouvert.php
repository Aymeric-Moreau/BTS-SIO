<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'decouvert';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "decouvert":

        include 'vues/vues_decouvert/V_decouvert.php';
        break;

    case "form":
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupération des données du formulaire
            $email = $_POST['email'];
            $message = $_POST['Textarea'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            // création du header pour que tous les charctére sois accepter méme les emoji
            $headers = "Content-type: text/plain; charset=utf-8\r\n";
            $headers .= "From: test.test.test.esb@gmail.com\r\n";



            // Validation des données (exemple simple)
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))  {
                echo "L'adresse e-mail n'est pas valide.";
                exit;
            }
            // Construction de l'e-mail
            $to = 'aymeric.moreau13@gmail.com';
            $subject = "Nouveau message du formulaire de $nom $prenom ";
            $body = "Adresse e-mail : $email\n\nMessage : $message";

            // Envoi de l'e-mail
            if (mail($to, $subject, $body, $headers)) {
                echo "E-mail envoyé avec succès.";
            } else {
                echo "Une erreur s'est produite lors de l'envoi de l'e-mail.";
            }
        }

        include 'vues/vues_decouvert/V_decouvert.php';
        break;
}
?>