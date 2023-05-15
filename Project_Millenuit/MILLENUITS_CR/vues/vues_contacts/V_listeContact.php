
<div class="container">
    <h1>Sélectionner le distributeur</h1>

    <form method="post" action="index.php?uc=contacts&action=ListContact" name="unformulaire">


        <div class="mn-3 col-md-4">     

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



    </form>
    <div id="result">
        <table class="table table-striped" name="listeContact" id="listeContact">

        </table>
    </div>
</div>

<script   src="https://code.jquery.com/jquery-3.6.3.min.js"
          integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
crossorigin="anonymous"></script>
<script>
    
   
   

    $(function () {
// change les éléments surveillés
        $('#distrib').change(function () {
            //utilisation de la methode ajax
            //qui permet d'instancier un objet htmlhttprequest
            $.ajax({
                url: 'controleurs/ajax/ajax_getContact.php',
                type: 'post',
                // la méthode val() permet d'accéder à la valeur de l'élément
                data: 'distributeur=' + $('#distrib').val(),
                dataType: 'json',
                success: function (data) {
                    //$("#result").empty();

                    //on vide la div listeContact
                    $("#listeContact").empty();
                    if (data[0]) {
                        var titre = document.createElement('h2');
                        titre.textContent = data[0].raison_sociale;
                        $("#listeContact").append(titre);
                        //ajout du titre du tableau
                        var titre = document.createElement('h3');
                        titre.textContent = "Liste des Contacts ";
                        $("#listeContact").append(titre);
                        // Crée un tableau HTML
                        var table = document.createElement('table');
                        
// Crée la première ligne du tableau avec les en-têtes de colonnes

                        var trh = document.createElement('tr');

                        var th1 = document.createElement('th');
                        th1.textContent = 'Nom';
                        trh.append(th1);
                        var th2 = document.createElement('th');
                        th2.textContent = 'Prenom';
                        trh.append(th2);
                        var th3 = document.createElement('th');
                        th3.textContent = 'email';
                        trh.append(th3);
                        var th4 = document.createElement('th');
                        th4.textContent = 'Telephone fixe';
                        trh.append(th4);
                        var th5 = document.createElement('th');
                        th5.textContent = 'Telephone portable';
                        trh.append(th5);
                        var th6 = document.createElement('th');
                        th6.textContent = 'Privilege'
                        trh.append(th6);
                        table.append(trh);
                        $.each(data, function (key, value) {
//                            var tr = $('<tr/>', {
//                                id: tr
//                            });
                            var tr = document.createElement('tr');

                            var td1 = document.createElement('td');
                            td1.textContent = value.nom;
                            tr.append(td1);
                            var td2 = document.createElement('td');
                            td2.textContent = value.prenom;
                            tr.append(td2);
                            var td3 = document.createElement('td');
                            td3.textContent = value.mail;
                            tr.append(td3);
                            var td4 = document.createElement('td');
                            td4.textContent = value.tel_fixe;
                            tr.append(td4);
                            var td5 = document.createElement('td');
                            td5.textContent = value.tel_portable;
                            tr.append(td5);
                            var td6 = document.createElement('td');
                            td6.className = (value.privilegie === 1 ? 'bi bi-check' : 'bi bi-x');
                            tr.append(td6);


                            table.append(tr);
                        });

                    } else {
                        var titre = document.createElement('h3');
                        titre.textContent = "Il n'y a aucun contact dans ce distributeur";
                        $("#listeContact").append(titre);
                    }

                    $('#listeContact').append(table);


                }});
        });
    });
</script>