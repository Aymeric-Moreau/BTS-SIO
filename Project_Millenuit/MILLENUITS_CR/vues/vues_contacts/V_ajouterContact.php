<div class="container">
    <h1>Ajouter un contact</h1>
    <h3>* indique un champ obligatoire </h3>
    <form method="post" action="index.php?uc=contacts&action=nouvContact" name="unformulaire">
        <div class="mn-3 col-md-6">    
            <h2>Identification</h2>
            <div class="row g-0">
                <div class="col-sm-12">

                    <input type="number" class="form-control" id="id" name="id" placeholder="Numero Contact*" reqired >
                </div>
                <div class="col-sm-6">

                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom du contact*"  >
                </div>
                <div class="col-sm-6">

                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom du contact*"  >
                </div>
            </div>
        </div>

        <div class="mn-3 col-md-6">    
            <h2>Coordonnées</h2>
            <div class="row g-0">
                <div class="col-sm-12">
                    <div class="input-group">
                        <span class="input-group-text">@</span>

<!--                        <input type="text" class="form-control" id="email" name="email" placeholder="Email *" required >-->
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email *"  >
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>

                        <input type="tel" class="form-control" id="telM" name="telM" placeholder="Téléphone portable"    >
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-phone-fill"></i></span>

                        <input type="tel" class="form-control" id="telF" name="telF" placeholder="Téléphone fixe" >
                    </div>  
                </div>

            </div>
            <input type="checkbox"  id="privilege" name="privilege" value="1"><label for="privilege">Contact priviliégié</label>

        </div>


        <div class="mn-3 col-md-4">     
            <h2>Sélectionner le distributeur *</h2>
            <p>
                <select id="distrib" class="form-control" name="distrib">
                    <option value="">Choisissez le distributeur</option>

                    <?php
                    foreach ($distributeur as $valeur) {
                        ?>

                        <option value='<?php echo $valeur['id']; ?>'><?php echo $valeur['raison_sociale']; ?></option>


                        <?php
                    }
                    ?>

                </select>
            </p>

        </div>
        <div class="   col-md-4   ">
            <div>
                <button type="submit" id="submit" class="btn btn-outline-success float-end">Valider</button>


            </div>

        </div>
        <div class="  col-md-6">
            <div>

                <button type="reset" class="btn btn-outline-danger float-end">Annulez</button>

            </div>

        </div>


    </form>
</div>

<script   src="https://code.jquery.com/jquery-3.6.3.min.js"
          integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
crossorigin="anonymous"></script>


<script>
    $(document).ready(function () {
        $("#submit").click(function (e) {
            e.preventDefault(); // empêcher la soumission du formulaire pour l'instant

            // récupérer les valeurs des numéros de téléphone
            var telM = $("#telM").val();
            var telF = $("#telF").val();

            // vérifier si au moins un des numéros a été saisi
            if (telM === "" && telF === "") {
                alert("Veuillez saisir au moins un numéro de téléphone.");
                return false;
            }

            // vérifier la validité des numéros de téléphone
            var telMValid = false;
            var telFValid = false;

            // vérifier le numéro de téléphone portable
            if (telM !== "") {
                if (/^(\+33|0033|0)(6|7)[0-9]{8}$/g.test(telM)) {
                    telMValid = true;
                } else {
                    alert("Le numéro de téléphone portable est incorrect.");
                    return false;
                }
            }

            // vérifier le numéro de téléphone fixe
            if (telF !== "") {
                if (/^^0[1-5](\s?\d{2}){4}$/.test(telF)) {
                    telFValid = true;
                } else {
                    alert("Le numéro de téléphone fixe est incorrect.");
                    return false;
                }
            }

            // si les numéros de téléphone sont valides, envoyer les données du formulaire en utilisant Ajax
            $.ajax({
                type: "POST",
                url: "index.php?uc=contacts&action=nouvContact",
                data: $("form[name='unformulaire']").serialize(), // sérialiser les données du formulaire
                success: function (response) {
                    // afficher la réponse du serveur
//                    alert(response);
                    document.location.href = 'index.php?uc=contacts&action=ajouter_contact';
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // afficher une erreur si la requête Ajax échoue
                    alert("Une erreur est survenue lors de l'envoi du formulaire : " + textStatus + ", " + errorThrown);
                }
            });

            return false; // empêcher la soumission du formulaire par défaut
        });
    });

</script>