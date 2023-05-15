<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    
    <h1>formulaire de contact</h1>
    <form method="post" action="contact.php" name="unformulaire">
        <fieldset>
            <legend>Votre civilité</legend>
            <input type="radio" id="madame" name="civilite" value="Mme" require checkdate> <label for="madame">Madame</label>
            
            <input type="radio" id="monsieur" name="civilite" value="M" require > <label for="monsieur">Monsieur</label>
        
        <p>
            <label for="nom">Nom : </label>
            <input type="text" id="nom" name="nom" required placeholder="ex : Dupont">
        </p>
        <p>
            <label for="prenom">Prenom : </label>
            <input type="text" id="prenom" name="prenom" placeholder="ex : Paul">
        </p>
        <p>
            <label for="email">Mail : </label>
            <input type="email" id="email" name="email" placeholder="ex : nomprenom@gmail.com" required>
        </p>
        <p>
            <label for="tel">Téléphone : </label>
            <input type="tel" id="tel" name="tel" placeholder="ex : 0247474747" required>
        </p>
        </fieldset>
    
        <fieldset>
            <legend>Sortie souhaitées</legend>
            <p>A quelle(s) sortie(s) souhaitez-vous participer ?</p>
            <p>
            <input type="checkbox" id="train" name="sortie[]" value="train"><label for="train">Train Touristique (10$/pers)</label>
            <br>
            <input type="checkbox" id="barque" name="sortie[]" value="barque" ><label for="barque">Barque (10$/pers)</label>
            <br>
            <input type="checkbox" id="canoe" name="sortie[]" value="canoe"><label for="canoe">Canoë (20$/pers)</label>
            <br>
            <input type="checkbox" id="rosalie" name="sortie[]" value="rosalie" ><label for="rosalie" >Rosalie (15$/pers)(</label>
            </p>
        </fieldset>
        <fieldset>
            <legend>Participants</legend>
    
            <p>
            <label >Nombre de personnes : </label>
                <select id="nombreP" name="nbrP">
                <option value="6">6</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
                </select>
            </p>

            <p>
                <label >nombre d'enfant : </label>
                <input type="number" id="nbr_enfant16" name="nbr_enfant16" placeholder="4">
            </p>

        </fieldset>
    
        <p id="bouton">
            <input type="submit" id="envoyer" value="Envoyer">
            <input type="reset" id="annuler" value="Annuler">
    
        </p>
    
    </form>

</body>
</html>

