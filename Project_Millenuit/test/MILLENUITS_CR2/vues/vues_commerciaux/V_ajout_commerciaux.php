<div class="container">
    <form method="post" action="index.php?uc=commerciaux&action=validation_ajout">
        
    <h2> Ajouter un commercial</h2>
    <p class="font-italic"> * indique un champ obligatoire </p>

    <div id ="ajouterCommercial">
        <h4> Identification </h4>

        <div class="mb-3 col-md-8">
            <input type="number" class="form-control" name="numCom" id="numCom" placeholder="Numéro commercial*" required>
        </div>
        <div class="input-group">
            <div class="col-md-4 ">
                <input type="text" class="form-control" name="nomCom" id="nomCom" placeholder="Nom du commercial*" required pattern = "^[A-Za-zÀ-ÖØ-öø-ÿ]+$">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="prenomCom" id="prenomCom" placeholder="Prénom du commercial*" required pattern = "^[A-Za-zÀ-ÖØ-öø-ÿ]+$">
            </div>
        </div>
        </br>
        <h4> Coordonnées </h4>

        <div class="input-group">

            <div class="col-md-4">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="bi bi-telephone-fill"></i></div>
                    </div>
                    <input type="tel" class="form-control" name="numFix" id="numFix" placeholder="Téléphone fixe" pattern = "^0\d{9}$">
                </div>
            </div>

            <div class="col-md-4">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="bi bi-phone-fill"></i></div>
                    </div>
                    <input type="tel" class="form-control" name="numPort" id="numPort" placeholder="Téléphone portable*" required pattern = "^0\d{9}$">

                </div>
            </div>
        </div>     
        <h4> Secteur d'affection * </h4>

        <div class="form-group col-md-8">                    
            <select name ="allSecteur" id = "allSecteur" class="form-select" required>
                <option value = "" selected hidden>Choisissez le secteur d'affection...</option>
                <?php foreach ($sect as $secteur) { ?>
                    <option value = "<?php echo $secteur['id']; ?>"><?php echo $secteur['nom_secteur']; ?></option>
                <?php } ?>
            </select>
        </div>
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
    #ajouterCommercial
    {
        margin-left: 20px;
    }

</style>

