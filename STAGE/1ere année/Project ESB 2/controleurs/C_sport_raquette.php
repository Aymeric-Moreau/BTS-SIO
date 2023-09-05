<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "tennis":

        include 'vues/vues_tennis/V_tennis.php';
        break;
    
    case "formt":
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
            $to = 'christophe2.aubin@gmail.com';
            $subject = "Nouveau message du formulaire de $nom  ";
            $body = "Adresse e-mail : $email , Numéro de téléphone : $tel \n\Message : $message";

            // Envoi de l'e-mail
            if (mail($to, $subject, $body, $headers)) {
               $emailSentMessage = "E-mail envoyé avec succès.";
            } else {
                $emailSentMessage = "Une erreur s'est produite lors de l'envoi de l'e-mail.";
            }
        }

        include 'vues/vues_tennis/V_tennis.php';
        break;

    case "tennis_table":

        include 'vues/vues_tennis_table/V_tennis_table.php';
        break;
    
    case "formtt":
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
            $to = 'esb.tennisdetable@outlook.fr';
            $subject = "Nouveau message du formulaire de $nom  ";
            $body = "Adresse e-mail : $email , Numéro de téléphone : $tel \n\Message : $message";

            // Envoi de l'e-mail
            if (mail($to, $subject, $body, $headers)) {
               $emailSentMessage = "E-mail envoyé avec succès.";
            } else {
                $emailSentMessage = "Une erreur s'est produite lors de l'envoi de l'e-mail.";
            }
        }

        include 'vues/vues_tennis_table/V_tennis_table.php';
        break;

    case "badminton":
        include 'vues/vues_badminton/V_badminton.php';
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
//            if (!filter_var($email, FILTER_VALIDATE_EMAIL))  {
//                echo "L'adresse e-mail n'est pas valide.";
//                exit;
//            }
            // Construction de l'e-mail
            $to = 'homer7@hotmail.fr';
            $subject = "Nouveau message du formulaire de $nom  ";
            $body = "Adresse e-mail : $email , Numéro de téléphone : $tel \n\Message : $message";

            // Envoi de l'e-mail
            if (mail($to, $subject, $body, $headers)) {
               $emailSentMessage = "E-mail envoyé avec succès.";
            } else {
                $emailSentMessage = "Une erreur s'est produite lors de l'envoi de l'e-mail.";
            }
        }

        include 'vues/vues_badminton/V_badminton.php';
        break;
}
?>
//<?php
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    // Récupération des données du formulaire
//    $email = $_POST['email'];
//    $message = $_POST['Textarea'];
//    $nom = $_POST['nom'];
//    $prenom = $_POST['prenom'];
//
//    // Validation des données (exemple simple)
//    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        echo "L'adresse e-mail n'est pas valide.";
//        exit;
//    }
//
//    // Construction de l'e-mail
//    $to = 'aymeric.moreau13@gmail.com';
//    $subject = "Nouveau message du formulaire de $nom $prenom ";
//    $body = "Adresse e-mail : $email\n\nMessage : $message";
//
//    // Envoi de l'e-mail
//    if (mail($to, $subject, $body)) {
//        echo "E-mail envoyé avec succès.";
//    } else {
//        echo "Une erreur s'est produite lors de l'envoi de l'e-mail.";
//    }
//}
//?>



