<form method="post" action="">
    <label for="lesSecteur">Secteur</label>
    <select class="target" id="lesSecteur" name="lesSecteur" >
        <option value="">Sélectionnez un secteur</option>
        <?php
        //parcour des liste des categorie pour remplire la liste déroulante 
        foreach ($lesSecteur as $secteur) {
            ?>
            <option value="<?php echo $secteur ['codeSecteur'] ?>">
                <?php echo $secteur ['libelleSecteur'] ?>
            </option> <?php }
            ?>
    </select>


    <label for="listeEntreprise">Secteur</label>
    <select class="targetEntreprise" id="listeEntreprise" name="listeEntreprise"  > //value="disabled" disabled
        <option value="">Sélectionnez une Entreprise</option>


    </select>
    <input id="submitBtn"  type="submit" value="Voir adresse"  >
</form>
<div id="result"></div>
<script   src="https://code.jquery.com/jquery-3.6.3.min.js"
          integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
crossorigin="anonymous"></script>
<script>

    $(function () {
// change les éléments surveillés
        $('#lesSecteur').change(function () {
            //utilisation de la methode ajax
            //qui permet d'instancier un objet htmlhttprequest
            $.ajax({
                url: 'ajax/ajax_getEntreprise.php',
                type: 'post',
                // la méthode val() permet d'accéder à la valeur de l'élément
                data: 'secteur=' + $('#lesSecteur').val(),
                dataType: 'json',
                success: function (data) {
                    //on vide la div lesProduit
                    $("#listeEntreprise").empty();
                    $.each(data, function (key, value) {
                        var option = $('<option/>', {
                            value: value.codeEntreprise,
                            text: value.nomEntreprise
                        });
                        $('#listeEntreprise').append(option);
                    });
                }});
        });
    });
</script>
<script>

    $(function () {
// change les éléments surveillés
        $('#submitBtn').click(function () {
            //utilisation de la methode ajax
            //qui permet d'instancier un objet htmlhttprequest
            $.ajax({
                url: 'ajax/ajax_getUneEntreprise.php',
                type: 'post',
                // la méthode val() permet d'accéder à la valeur de l'élément
                data: 'entreprise=' + $('#listeEntreprise').val(),
                dataType: 'json',
                success: function (data) {
                    var span = document.createElement('span');
                    span.textContent = " produit : " + data.codePostal + data.commune;
                    $("#result").append(span);


                    
                }});
        });
    });
</script>