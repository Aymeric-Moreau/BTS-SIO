<h1> Decouverte de L ardeche : </h1>
<?php  
    $civilite = $_POST['civilite'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['email'];
    $thelephone = $_POST['tel'];
    
    $total = 0;
    $prix;
    $nbrP = $_POST['nbrP'];
    $nbrE16 = $_POST['nbr_enfant16'];
    $nbrPAll = $nbrP + $nbrE16;
    $train = false;
    $barque = false;
    $canoe = false;
    $rosalie = false;
    
    foreach ($_POST['sortie'] as $key => $value)
    {

        switch ($value) {
            case 'train':
                $prix =10;
                $train = true;
                break;
            case 'barque':
                $prix =10;
                $barque = true;
                break;
            case 'canoe':
                $prix =20;
                $canoe = true;
                break;
            case 'rosalie':
                $prix =15;
                $rosalie = true;
                break;
            }
            $total += ($prix*$nbrP + (($prix  - ($prix  * 20 / 100))*$nbrE16));
    }


    echo $civilite,", ",$prenom,", ",$nom,', merci de nous avoir contacté pour les activité suivante :  <br/> </br>';
    echo' Vous souhaitez recevoir des renseignement pour les activité suivant : <br/> </br>';
    if($train == true){
        echo $train,' Le montant estimatif de cette sortie est de ',(10*$nbrP + ((10  - (10  * 20 / 100))*$nbrE16)),'euros pour ',$nbrP,"adulte et ",$nbrE16,' enfant <br/> </br>';
    }
    if($barque == true){
        echo $barque,' Le montant estimatif de cette sortie est de ',(10*$nbrP + ((10  - (10  * 20 / 100))*$nbrE16)),'euros pour ',$nbrP,"adulte et ",$nbrE16,' enfant <br/> </br>';
    }
    if($canoe == true){
        echo $canoe,' Le montant estimatif de cette sortie est de ',(20*$nbrP + ((20  - (20  * 20 / 100))*$nbrE16)),'euros pour ',$nbrP,"adulte et ",$nbrE16,' enfant <br/> </br>';
    }
    if($rosalie == true){
        echo $rosalie,' Le montant estimatif de cette sortie est de ',(15*$nbrP + ((15  - (15  * 20 / 100))*$nbrE16)),'euros pour ',$nbrP,"adulte et ",$nbrE16,' enfant <br/> </br>';
    }
    echo' Le totale est de ',$total,' euros <br/> </br>';
    echo' Vous recevrez les documentation administratif au format pdf à l adresse suivant ',$mail,'<br/> </br>';
    echo ' Bien cordialement <br/> </br>';


?>
