
<div class="container">
    <h1>Sélectionner le distributeur</h1>
    <form method="post" action="" name="unformulaire" id = "unformulaire">
        <div class="mn-3 col-md-4">     
            <p>
                <select id="distrib" class="form-control" name="distrib">
                    <option value="">Choisissez le distributeur</option>

                    <?php
                    foreach ($distributeursCr as $valeur) {
                        ?>

                        <option value='<?php echo $valeur['id']; ?>'><?php echo $valeur['raison_sociale']; ?></option>


                        <?php
                    }
                    ?>

                </select>
            </p>
        </div>

        <div id ="title">

        </div>
        <div id="result">
            <table class="table table-striped" name="listeContact" id="listeContact">
            </table>
        </div>
    </form>
</div>


<script>



    $(function () {
        $('#distrib').change(function () {
            $.ajax({
                url: 'controleurs/ajax/ajax_getComptesRendus.php',
                type: 'post',
                data: 'id_distrib=' + $('#distrib').val(),
                dataType: 'json',
                success: function (data) {

                    $("#listeContact").empty();
                    $("#title").empty();

                    if (data[0]) {

                        titre = document.createElement('h2');
                        titre.textContent = data[0].raison_sociale;
                        $("#title").append(titre);


                        var thead = document.createElement('thead');
                        var trh = document.createElement('tr');
                        var th1 = document.createElement('th');
                        var th2 = document.createElement('th');
                        var th3 = document.createElement('th');
                        var th4 = document.createElement('th');
                        var th5 = document.createElement('th');
                        var th6 = document.createElement('th');
                        var th7 = document.createElement('th');
                        var th8 = document.createElement('th');
                        var tbody = document.createElement('tbody');


                        th1.textContent = 'Nom du contact';
                        th2.textContent = 'Prénom du contact';
                        th3.textContent = 'Priviligié';
                        th4.textContent = 'Date de la visite';
                        th5.textContent = 'Coefficient de confiance';
                        th6.textContent = 'Motif';
                        th7.className = 'bi bi-eye-fill';
                        th8.className = 'bi bi-pencil-fill';

                        thead.append(trh);
                        trh.append(th1);
                        trh.append(th2);
                        trh.append(th3);
                        trh.append(th4);
                        trh.append(th5);
                        trh.append(th6);
                        trh.append(th7);
                        trh.append(th8);

                        $("#listeContact").append(thead);


                        $.each(data, function (key, value) {


                            var tr = document.createElement('tr');
                            var td1 = document.createElement('td');
                            var td2 = document.createElement('td');
                            var td3 = document.createElement('td');
                            var td4 = document.createElement('td');
                            var td5 = document.createElement('td');
                            var td6 = document.createElement('td');
                            var td7 = document.createElement('td');
                            var td8 = document.createElement('td');

                            var button1 = document.createElement('button');
                            var button2 = document.createElement('button');


                            td1.textContent = value.nom;
                            td2.textContent = value.prenom;
                            td3.className = (value.privilegie === 1 ? 'bi bi-check-square-fill' : 'bi bi-x-square-fill');
                            td4.textContent = value.date_visite;
                            td5.textContent = value.coefficient_confiance;
                            td6.textContent = value.motif;

                            button1.type = "submit";
                            button1.className = 'bi bi-eye-fill';
                            button1.setAttribute("formaction", "index.php?uc=compte_rendu&action=consulter");
                            button1.setAttribute("style", "border:0px");


                            button2.type = "submit";
                            button2.className = 'bi bi-pencil-fill';
                            button2.setAttribute("formaction", "index.php?uc=compte_rendu&action=modifier&id="+ $('#distrib').val());
                            button2.setAttribute("style", "border:0px");


                            td7.append(button1);
                            td8.append(button2);

                            tr.append(td1);
                            tr.append(td2);
                            tr.append(td3);
                            tr.append(td4);
                            tr.append(td5);
                            tr.append(td6);
                            tr.append(td7);
                            tr.append(td8);

                            tbody.append(tr);
                            $("#listeContact").append(tbody);

                        });

                    } else {
                        var titre = document.createElement('h3');
                        titre.textContent = "Il n'y pas de compte rendu pour ce distributeur";
                        $("#listeContact").append(titre);
                    }

                }});
        });
    });


</script>