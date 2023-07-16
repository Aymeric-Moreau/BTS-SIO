<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "presentation":

        include 'vues/vues_presentation/V_presentation.php';
        break;

    case "form":
        $emailSentMessage2 = "-";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupération des données du formulaire
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['commentaire']);
            $nom = htmlspecialchars($_POST['nom']);
            $tel = htmlspecialchars($_POST['tel']);

            // création du header pour que tous les charctére sois accepter méme les emoji
            $headers = "Content-type: text/plain; charset=utf-8\r\n";
            $headers .= "From: esbourgueil.club-omnisports@orange.fr\r\n";

            // Validation des données 
//            if (!filter_var($email, FILTER_VALIDATE_EMAIL))  {
//                echo "L'adresse e-mail n'est pas valide.";
//                exit;
//            }
            // Construction de l'e-mail
            $to = 'esbourgueil.club-omnisports@orange.fr';
            $subject = "Nouveau message du formulaire de $nom  ";
            $body = "Adresse e-mail : $email , Numéro de téléphone : $tel \n\Message : $message";

            // Envoi de l'e-mail
            if (mail($to, $subject, $body, $headers)) {
                $emailSentMessage2 = "E-mail envoyé avec succès.";
            } else {
                $emailSentMessage2 = "Une erreur s'est produite lors de l'envoi de l'e-mail.";
            }
        }

        include 'vues/vues_presentation/V_presentation.php';
        break;
}
?>