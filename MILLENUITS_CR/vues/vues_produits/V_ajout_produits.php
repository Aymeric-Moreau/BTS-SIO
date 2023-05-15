<div class="container">
    <form method="post" action="index.php?uc=produits&action=validation_ajouts">

        <h2> Ajouter un produit</h2>

        <div id ="ajouterProduit">
            <h4> Identification du produit </h4>

            <div class="mb-3 col-md-8">
                <input type="number" class="form-control" name="numProd" id="numProd" placeholder="Numéro produit" required>
            </div>
            <div class="mb-3 col-md-8">
                <input type="text" class="form-control" name="lblProd" id="lblProd" placeholder="Libellé du produit" required>
            </div>
            <div class="mb-3 col-md-8">
                <input type="number" class="form-control" name="prixProd" id="prixProd" placeholder="Prix du produit" required>
            </div>
            <div class="form-group col-md-8">                    
                <select name ="allCate" id = "allCate" class="form-select" required>
                    <option value = "" selected hidden>Choisissez une catégorie...</option>
                    <?php foreach ($categories as $cate) { ?>
                        <option value = "<?php echo $cate['id']; ?>"><?php echo $cate['libelle']; ?></option>
                    <?php } ?>
                </select>
                </br>
                <h4> Caractéristiques </h4>


                <div class="input-group">
                    <div class="col-md-6 ">
                        <select name ="allDens" id = "allDens" class="form-select" required>
                            <option value = "" selected hidden>Choisissez une densité...</option>
                            <?php foreach ($densite as $dens) { ?>
                                <option value = "<?php echo $dens['id']; ?>"><?php echo $dens['libelle']; ?></option>
                            <?php } ?>
                        </select>      </div>
                    <div class="col-md-6">
                        <select name ="allGarn" id = "allGarn" class="form-select" required>
                            <option value = "" selected hidden>Choisissez un type de garnissage..</option>
                            <?php foreach ($garnissage as $garn) { ?>
                                <option value = "<?php echo $garn['id']; ?>"><?php echo $garn['libelle']; ?></option>
                            <?php } ?>
                        </select>            </div>
                </div>

                <h4> Tailles </h4>

                <div class="form-group">
                    <select multiple class="form-control" id="listeTailles" name="listeTailles[]">
                        <?php foreach ($taille as $taille) { ?>
                            <option value = "<?php echo $taille['id']; ?>"><?php echo $taille['libelle']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                </div>

                <h4> Conseils entretien </h4>

                <div class="form-group">
                    <select multiple class="form-control" id="listeConseils" name="listeConseils[]">
                        <?php foreach ($conseils as $conseils) { ?>
                            <option value = "<?php echo $conseils['id']; ?>"><?php echo $conseils['libelle']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                </div>

                <div>
                    <div class="float-end col-md-5">
                        </br>
                        <button type="submit" name="Valider" class="btn btn-outline-success">Valider</button>
                        <button type="reset" name="Annuler" class="btn btn-outline-danger">Annuler</button>
                    </div>
                </div>
                </form>
            </div>
            <style>
                #ajouterProduit
                {
                    margin-left: 20px;
                }

            </style>

