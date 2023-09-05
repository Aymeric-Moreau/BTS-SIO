<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "basket":

        include 'vues/vues_basket/V_basket.php';
        break;
    
    case "formb":
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
            $to = 'secretariat.esbourgueilbasket37@gmail.com';
            $subject = "Nouveau message du formulaire de $nom  ";
            $body = "Adresse e-mail : $email , Numéro de téléphone : $tel \n\Message : $message";

            // Envoi de l'e-mail
            if (mail($to, $subject, $body, $headers)) {
               $emailSentMessage = "E-mail envoyé avec succès.";
            } else {
                $emailSentMessage = "Une erreur s'est produite lors de l'envoi de l'e-mail.";
            }
        }

        include 'vues/vues_basket/V_basket.php';
        break;

    case "football":

        include 'vues/vues_foot/V_football.php';
        break;
    
    case "formf":
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
            $to = '505083@lcfoot.fr';
            $subject = "Nouveau message du formulaire de $nom  ";
            $body = "Adresse e-mail : $email , Numéro de téléphone : $tel \n\Message : $message";

            // Envoi de l'e-mail
            if (mail($to, $subject, $body, $headers)) {
               $emailSentMessage = "E-mail envoyé avec succès.";
            } else {
                $emailSentMessage = "Une erreur s'est produite lors de l'envoi de l'e-mail.";
            }
        }

        include 'vues/vues_foot/V_football.php';
        break;
        

    case "hockey":
        include 'vues/vues_hockey/V_hockey.php';
        break;
    
    case "formh":
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
            $to = 'esbhockeysurglace@gmail.com';
            $subject = "Nouveau message du formulaire de $nom  ";
            $body = "Adresse e-mail : $email , Numéro de téléphone : $tel \n\Message : $message";

            // Envoi de l'e-mail
            if (mail($to, $subject, $body, $headers)) {
               $emailSentMessage = "E-mail envoyé avec succès.";
            } else {
                $emailSentMessage = "Une erreur s'est produite lors de l'envoi de l'e-mail.";
            }
        }

        include 'vues/vues_hockey/V_hockey.php';
        break;
}
?>