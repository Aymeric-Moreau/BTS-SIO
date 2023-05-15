<div class="container">
    <h1></h1>

    <form method="post" action="" name="unformulaire" class="form-inline d-flex" id="formCR">
        <div class="form-group mr-3 flex-grow-1">
            <label for="commercial">Choisissez le commercial</label>
            <select id="commercial" class="form-control" name="commercial">
                <option value="">Choisissez le commercial</option>
                <?php foreach ($commerciaux as $valeur) { ?>
                    <option value="<?php echo $valeur['id']; ?>"><?php echo $valeur['nom'], " ", $valeur['prenom']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group mr-3 flex-grow-1">
            <label for="dateD">Date de début de periode :</label>
            <input type="date" name="dateD" id="dateD" class="form-control" required>
        </div>
        <div class="form-group lg-4 flex-grow-1">
            <label for="dateF">Date de fin de periode :</label>
            <input type="date" name="dateF" id="dateF" class="form-control" required>
        </div>
        <div class="form-group flex-grow-1">
            <button type="button" id="submit" class="btn btn-success btn-lg">Afficher</button>
        </div>
    </form>

    <div id="result">
        <table class="table table-striped" name="exe_affiche_cr" id="exe_affiche_cr">

        </table>
    </div>
</div>

<script   src="https://code.jquery.com/jquery-3.6.3.min.js"
          integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
crossorigin="anonymous"></script>

<script>


    $(function () {
// change les éléments surveillés
        $(document).ready(function () {
            $("#submit").click(function () {

                //utilisation de la methode ajax
                //qui permet d'instancier un objet htmlhttprequest
                $.ajax({
                    url: 'controleurs/ajax/ajax_getComptes_rendus.php',

                    type: 'post',
                    // la méthode val() permet d'accéder à la valeur de l'élément
                    data: {
                        commercial: $('#commercial').val(),
                        dateD: $('#dateD').val(),
                        dateF: $('#dateF').val()
                    },
                    dataType: 'json',
                    success: function (data) {
//                        //$("#result").empty();
//                        console.log("La réponse est un objet JavaScript contenant les données JSON : ", data);
//                        var obj = JSON.parse(data);
//                        console.log("L'objet JavaScript créé à partir des données JSON est : ", obj);

                        //on vide la table
                        $("#exe_affiche_cr").empty();
                        if (data[0]) {
                            var commercial = $('#commercial').val();
                            var dateD = $('#dateD').val();
                            var dateF = $('#dateF').val();
                            var titre = document.createElement('h2');
                            titre.textContent = "Comptes-rendus de visites de " + commercial;
                            $("#exe_affiche_cr").append(titre);
                            //ajout du titre du tableau
                            var titre = document.createElement('h3');
                            titre.textContent = "Du " + dateD + " au " + dateF;
                            $("#exe_affiche_cr").append(titre);

                            // Crée un tableau HTML
                            var table = document.createElement('table');
// Crée la première ligne du tableau avec les en-têtes de colonnes

                            var trh = document.createElement('tr');
                            var th1 = document.createElement('th');
                            th1.textContent = 'Distributeur';
                            trh.append(th1);
                            var th2 = document.createElement('th');
                            th2.textContent = 'Contact';
                            trh.append(th2);
                            var th3 = document.createElement('th');
                            th3.textContent = 'Date visite';
                            trh.append(th3);
                            var th4 = document.createElement('th');
                            th4.textContent = 'Coefficient de confiance';
                            trh.append(th4);
                            var th5 = document.createElement('th');
                            th5.textContent = 'Motif';
                            trh.append(th5);
                            var th6 = document.createElement('th');
                            th6.className = 'bi bi-eye-fill';
                            trh.append(th6);
                            table.append(trh);
                            $.each(data, function (key, value) {
                                var tr = document.createElement('tr');
                                var td1 = document.createElement('td');
                                td1.textContent = value.raison_sociale;
                                tr.append(td1);
                                var td2 = document.createElement('td');
                                td2.textContent = value.nom + " " + value.prenom;
                                tr.append(td2);
                                alert(value.nom);
                                var td3 = document.createElement('td');
                                td3.textContent = value.date_visite;
                                tr.append(td3);
                                var td4 = document.createElement('td');
                                td4.textContent = value.coefficient_confiance;
                                tr.append(td4);
                                var td5 = document.createElement('td');
                                td5.textContent = value.motif;
                                tr.append(td5);
                                var td6 = document.createElement('td');

                                td6.type = "submit";
                                td6.className = 'bi bi-eye-fill';
                                td6.setAttribute("formaction", "index.php?uc=compte_rendu&action=consulter_detail");
                                td6.setAttribute("style", "border:0px");
                                tr.append(td6);
                                table.append(tr);
                            });
                        } else {
                            var titre = document.createElement('h3');
                            titre.textContent = "Il n'y a aucun compte rendue pour ce commercial et les date donner";
                            $("#exe_affiche_cr").append(titre);
                        }

                        $('#exe_affiche_cr').append(table);
                    },
                    error: function (xhr, status, error) {
                        if (xhr.status === 404) {
                            alert("Le fichier n'a pas été trouvé sur le serveur.");
                        } else if (xhr.status === 500) {
                            alert("Une erreur interne s'est produite sur le serveur.");
                        } else {
                            console.log("Une erreur s'est produite lors de la requête AJAX: " + error);
                            console.log("La réponse HTTP de la requête est : " + xhr.responseText);
                            alert("Une erreur inattendue s'est produite: " + error);

                        }
                    }

                });

            });
        });
    });
</script>