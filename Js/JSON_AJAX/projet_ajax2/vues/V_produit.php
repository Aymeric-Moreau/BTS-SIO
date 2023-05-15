<form method="post" action="">
    <label for="listeCategorie">Categorie</label>
    <select id="listeCategorie" name="listeCategorie">
        <option value="">Sélectionnez une categorie</option>
        <?php
        //parcour des liste des categorie pour remplire la liste déroulante 
        foreach ($listeCategories as $categorie) {
            ?>
            <option value="<?php echo $categorie ['ca_id'] ?>">
            <?php echo $categorie ['ca_libelle'] ?>
            </option> <?php }
        ?>
    </select>

</form>
<div id="lesProduits"></div>


<script   src="https://code.jquery.com/jquery-3.6.3.min.js"
          integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
    

    $(function () {
// change les éléments surveillés
        $('#listeCategorie').change(function () {
            //utilisation de la methode ajax
            //qui permet d'instancier un objet htmlhttprequest
            $.ajax({
                url: 'ajax/ajax_getProduitCategorie.php',
                type: 'post',
                // la méthode val() permet d'accéder à la valeur de l'élément
                data: 'id_categorie=' + $('#listeCategorie').val(),
                dataType: 'json',
                success: function (data) {
                    //on vide la div lesProduit
                    $("#lesProduits").empty();
                    var titre = document.createElement('h1');
                    titre.textContent = "Liste des produits : --";
                    $("#lesProduits").append(titre);
                    
                    $.each(data, function (key, value) {
                        var span = document.createElement('span');
                        span.textContent = " produit : " + value.pr_libelle;
                        $("#lesProduits").append(span);
                        var spanp = document.createElement('span');
                        spanp.textContent = ", prix : " + value.pr_prix;
                        $("#lesProduits").append(spanp);
                        
                    });
                }
            });
        });
    });
    });
</script>

