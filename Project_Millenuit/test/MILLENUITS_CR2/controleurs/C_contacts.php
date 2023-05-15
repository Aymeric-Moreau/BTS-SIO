<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'user';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "ajouter_contact":
        $distributeur = Pdo_Distributeurs::getAllDistributeurs();
        include 'vues/vues_contacts/V_ajouterContact.php';
        break;
    case "liste_Contact":
        $distributeur =  Pdo_Distributeurs::getAllDistributeurs();
        include 'vues/vues_contacts/V_listeContact.php';

        break;
    case "nouvContact":
        $id = htmlspecialchars($_POST["id"]);
        $nom = htmlspecialchars(($_POST["nom"]));
        $prenom = htmlspecialchars($_POST["prenom"]);
        $email = htmlspecialchars(($_POST["email"]));
        //if (!isset($_POST["telM"]) && !isset($_POST["telF"])) {

        $telM = htmlspecialchars($_POST["telM"]);
        $telF = htmlspecialchars(($_POST["telF"]));
        //}
        $distrib = htmlspecialchars(($_POST["distrib"]));
        if (isset($_POST["privilege"])) {
            $privilege = htmlspecialchars(($_POST["privilege"]));
            $liste = Pdo_Contact::listeContact($distrib);
            foreach ($liste as $value) {
                if ($value["privilegie"] == 1) {
                    $verif = Pdo_Contact::modifPrivilege($value["id"]);
                }
            }
        } else {
            $privilege = htmlspecialchars(0);
        }

        if (empty($id) || empty($nom) || empty($prenom) || empty($email)) {
            echo "<script> alert('Echec veillez remplire tout les champ obligatoire') ;</script>";
            echo"<script> document.location.href = 'index.php?uc=contacts&action=ajouter_contact';</script>";

            exit();
        }
        if (empty($telM) && empty($telF)) {
            echo "<script> alert('Echec veuillez entrer au moins un numéro de téléphone fixe ou mobile') ;</script>";
            echo"<script> document.location.href = 'index.php?uc=contacts&action=ajouter_contact';</script>";
            exit();
        } else {
            $regexM = '#^0[6-7]{1}\d{8}$#';
            $regexF = '#^0[2-5]{1}\d{8}$#';
            if(!empty($telM)){
                 if (!preg_match($regexM, $telM)) {
                    echo "<script> alert('Echec veuillez entrer un numéro de telephone portable valide $telM') ;</script>";
                    echo"<script> document.location.href = 'index.php?uc=contacts&action=ajouter_contact';</script>";
                    exit();
                }
            }
            if(!empty($telF)){
                if (!preg_match($regexF, $telF)) {
                echo "<script> alert('Echec veuillez entrer un numéro de telephone fixe valide $telF') ;</script>";
                echo"<script> document.location.href = 'index.php?uc=contacts&action=ajouter_contact';</script>";
                exit();
            }
        }
    

           
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
        } else {
            echo "<script> alert('Echec veuillez entrer une adresse mail valide') ;</script>";
            echo"<script> document.location.href = 'index.php?uc=contacts&action=ajouter_contact';</script>";

            exit();
        }




        try {
            
            $result = Pdo_Contact::ajoutContact($id, $prenom, $nom, $email, $telM, $telF, $privilege, $distrib);
            

            // echo "<script> alert($privilege);</script>";
            if ($privilege == 1) {
                echo "<script> alert('Vous avez ajouter un contact privilégier ;</script>";
            } else {
                echo "<script> alert('vous avez ajouter un contact non privilégier ;</script>";
            }
            echo"<script> document.location.href = 'index.php?uc=contacts&action=ajouter_contact';</script>";
        } catch (Exception $e) {
            echo 'Echec lors de la connexion ! ' . $e->getMessage();
        }


        break;
}
