<div class ="container">
    <h1>Ajouter un distributeur</h1>
    <span>*indique un champ obligatoire</span><br><br>
    <form method ="post" action="index.php?uc=distributeur&action=valid_add"> 
        <div class ="row mb-3">
            <h2>Identification</h2><br><br>
            <div>
                <input type = "number" name="numeroDis" class ="form-control" id = "nmacaron" placeholder = "Numéro distributeur *" min ="<?php echo $index['id'] + 1; ?>">
            </div><br><br>

            <div>
                <input type = "text" name="rsociale" class ="form-control"
                       id = "rsociale" placeholder = "Raison Sociale *">
            </div>
        </div>
        <div class ="row mb-3">
            <h2>Coordonnées</h2><br><br>

            <div>
                <input type = "text" name="adresse1" class ="form-control"
                       id = "adresse1" placeholder = "Ligne adresse 1 * " >
            </div><br><br>
            <div>
                <input type = "text" name="adresse2" class ="form-control"
                       id = "adresse2" placeholder = "Ligne adresse 2">
            </div><br><br>
            <div>
                <input type = "text" name="adresse3" class ="form-control"
                       id = "adresse3" placeholder = "Ligne adresse 3">
            </div><br><br>
            <div class="col-md-6">
                <input type = "text" name="codePostal" class ="form-control"
                       id = "codePostal" placeholder = "Code Postal *">
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <select name ="choixVille" id = "choixVille" class=form-select>
                        <option value= "" selected hidden>Choisissez la commune... *</option>
                    </select>
                </div>
            </div>
            <br>
        </div>
        <div class ="row mb-3">
            <h2>Commercial * </h2><br><br>
            <div class="col-md-6">
                <div class="form-group">
                    <select name = "commerciaux" id = "commerciaux" class=form-select>
                        <option value= "" selected hidden>Choisissez le commerciale... *</option>

                    </select>
                </div>
            </div>

        </div><br>
        <div class="float-end">
            <button type="submit" class="btn btn-outline-success" >Valider</button>
            <button type="reset" class="btn btn-outline-danger" >Annuler</button>
        </div>
    </form>
</div>

<script>
    $(function () {
        //change l'événement surveillé
        $('#codePostal').on('change', function () {

            //Utilisation de la méthode ajax
            //qui permet d'instancier un objet XMLHttpRequest
            $.ajax({
                url: 'controleurs/ajax/ajax_getAllVille.php',
                type: 'POST',
                //la méthode val() permet d'accéder à la valeur de l'élément
                data: 'code_postal=' + $('#codePostal').val(),
                dataType: 'json',

                success: function (data) {

                    $("#choixVille").empty();
                    $("#commerciaux").empty();
                    $("#choixVille").append(" <option value='' selected hidden>Choisissez la commune... *</option>")



                    $.each(data, function (key, value) {

                        var option = document.createElement("option");
                        option.value = value.id;
                        option.text = value.nom_commune;
                        $("#choixVille").append(option);

                    });

                },
                error: function () {
                    alert("Le fichier n'a pas pu être récupéré");
                }
            });
        });

    });

    $(function () {
        //change l'événement surveillé
        $('#choixVille').change(function () {

            //Utilisation de la méthode ajax
            //qui permet d'instancier un objet XMLHttpRequest
            $.ajax({
                url: 'controleurs/ajax/ajax_getCommerciaux.php',
                type: 'POST',
                //la méthode val() permet d'accéder à la valeur de l'élément
                data: 'secteur=' + $('#choixVille').val(),
                dataType: 'json',

                success: function (data) {

                    $("#commerciaux").empty();
                    $("#commerciaux").append(" <option value='' selected hidden>Choisissez le commerciale... *</option>")


                    $.each(data, function (key, value) {

                        var option = document.createElement("option");
                        option.value = value.id;
                        option.text = value.nom + " " + value.prenom;
                        $("#commerciaux").append(option);

                    });

                },
                error: function () {
                    alert("Le fichier n'a pas pu être récupéré");
                }
            });
        });

    });
</script>


