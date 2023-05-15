<h1>Demande de Renseignements</h1>
<form method="post" action="fin_page.php" name="unformulaire">
    <fieldset>
        <legend>Votre civilité</legend>
        <input type="radio" id="madame" name="civilite" value="Mme"  > <label for="madame">Madame</label>
        
        <input type="radio" id="monsieur" name="civilite" value="M"> <label for="monsieur">Monsieur</label>
    </fieldset>
    <p>
        <label for="nom">Votre nom : </label>
        <input type="text" id="nom" name="nom" required pattern="^[A-Z][a-zàâäçéèêëîïôöùûüÿ|\s?-?'?]*">
    </p>
    <p>
        <label for="prenom">Votre prenom : </label>
        <input type="text" id="prenom" name="prenom"  pattern="[A-Z][a-zàâäçéèêëîïôöùûüÿ]*([-\s][a-zàâäçéèêëîïôöùûüÿ]*)?">
    </p>
    <p>
        <label for="age">Votre age : </label>
        <input type="number" id="age" name="age" placeholder="18" min = "18">
    </p>
    <p>
        <label for="email">Votre adresse mail : </label>
        <input type="email" id="email" name="email" placeholder="nomprenom@gmail.com" required pattern ="[A-Za-zàâäçéèêëîïôöùûüÿ|0-9|._-]*[@]([a-zàâäçéèêëîïôöùûüÿ|0-9|._-]{2,})*[.]([a-zàâäçéèêëîïôöùûüÿ]{2,4})+">
    </p>
    <p>
        <label for="date">Votre date de naissance :</label>
        <input type="date" id="date" name="date" >
    </p>

<script>

function verif(){
    //variable
  let date = document.getElementById("date").value;
  let age = document.getElementById("age").value;
    //verification de si sois l'age ou la date de naissance a été rentrer 
  if (date != ""||age != ""){
    return true;
  }else{
        alert("Vous devez renseigner soit votre date de naissance soit votre age !");
    return false;
  }
};

</script>

    <p>
    <label for="dataliste">Motif de votre demande :</label>


    <select id="dataliste" required>
    <option value="">Sélectionner un motif</option>
    <option value="1">J'envisage une visite</option>
    <option value="2">je fais une etude sur les monument de Tours</option>
    <option value="3">Pour découvrire Tours</option>
    <option value="4">Autre</option>
    </select>
    </p>
    <fieldset>
        <legend>Choisissez un ou plusieur lieux :</legend>
        <input type="checkbox" id="psalette" name="psalette" value="psa"><label for="psalette">La Psalette</label>
        <input type="checkbox" id="cathédrale" name="cathédrale" value="cat"><label for="cathédrale">La cathédrale</label>
        <input type="checkbox" id="chateau" name="chateau" value="cha"><label for="chateau">Le chateau de Tours</label>
        <input type="checkbox" id="autre" name="autre" value="aut" checked><label for="autre" >autre</label>
    </fieldset>
    <p>
        <label for="commentaire">Précisez votre demande :</label>
        <br>
        <textarea id="commentaire" name="commentaire" rows="6" cols="100" required></textarea>

    </p>
    <p id="bouton">
        <input type="submit" id="envoyer" value="Envoyer" onclick="return verif() ">
        <input type="reset" id="annuler" value="Annuler">

    </p>

</form>