<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "patinage":

        include 'vues/vues_patinage/V_patinage.php';
        break;
    
    case "formp":
        $emailSentMessage ="-";
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
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))  {
                echo "L'adresse e-mail n'est pas valide.";
                exit;
            }
            // Construction de l'e-mail
            $to = 'esbpatinage@yahoo.com';
            $subject = "Nouveau message du formulaire de $nom  ";
            $body = "Adresse e-mail : $email , Numéro de téléphone : $tel \n\Message : $message";

            // Envoi de l'e-mail
            if (mail($to, $subject, $body, $headers)) {
               $emailSentMessage = "E-mail envoyé avec succès.";
            } else {
                $emailSentMessage = "Une erreur s'est produite lors de l'envoi de l'e-mail.";
            }
        }

       include 'vues/vues_patinage/V_patinage.php';
        break;

    case "roller":

        include 'vues/vues_roller/V_roller.php';
        break;
    
    case "formr":
        $emailSentMessage ="-";
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
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))  {
                echo "L'adresse e-mail n'est pas valide.";
                exit;
            }
            // Construction de l'e-mail
            $to = 'roller-bourgueil@laposte.net';
            $subject = "Nouveau message du formulaire de $nom  ";
            $body = "Adresse e-mail : $email , Numéro de téléphone : $tel \n\Message : $message";

            // Envoi de l'e-mail
            if (mail($to, $subject, $body, $headers)) {
               $emailSentMessage = "E-mail envoyé avec succès.";
            } else {
                $emailSentMessage = "Une erreur s'est produite lors de l'envoi de l'e-mail.";
            }
        }

        include 'vues/vues_roller/V_roller.php';
        break;

}
?>