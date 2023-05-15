<div class ="container">
    <h1>Saisir un compte-rendu de visite</h1>
    <form method ="post" action="index.php?uc=compte_rendu&action=valid_add"> 
        <div class ="row mb-3">
            <h2>Informations</h2><br><br>
            <div>
                <input type = "number" name="numeroCom" class ="form-control"  placeholder = "Numéro du compte-rendu *" min ="<?php echo $index['id'] + 1; ?>" required>
            </div><br><br>

            <div>
                <input type = "text" name="dateVis" class ="form-control"  placeholder="Date de la visite *" onfocus="(this.type = 'date')" required>
            </div><br><br>
            <div>
                <select name ="choixMotif" id = "choixMotif" class=form-select required>
                    <option value= "" selected hidden>Choisissez un motif de visite... *</option>
                    <?php
                    foreach ($motifs as $motif) {
                        ?><option value = "<?php echo $motif['id']; ?>"><?php echo $motif['motif']; ?></option><?php
                    }
                    ?>
                </select>
            </div><br><br>

            <div>
                <select name ="choixCommercial" id = "choixCommercial" class=form-select required>
                    <option value= "" selected hidden>Choisissez le commercial... *</option>
                    <?php
                    foreach ($commerciaux as $commercial) {
                        ?><option value = "<?php echo $commercial['id']; ?>"><?php echo $commercial['nom'] . " " . $commercial['prenom']; ?></option><?php
                    }
                    ?>
                </select>
            </div><br><br>

            <div class="col-md-6">
                <select name ="choixDistributeur" id = "choixDistributeur" class=form-select required>
                    <option value= "" selected hidden>Choisissez le ditributeur... *</option>
                    <?php
                    foreach ($distributeurs as $distributeur) {
                        ?><option value = "<?php echo $distributeur['id']; ?>"><?php echo $distributeur['raison_sociale'] . " - " . $distributeur["nom_commune"]; ?></option><?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-6">

                <select name ="choixPersonne" id = "choixPersonne" class=form-select required>
                    <option value= "" selected hidden>Choisissez la personne contactée... *</option>
                    <?php
                    foreach ($distributeurs as $contact) {
                        ?><option value = "<?php echo $contact['c']; ?>"><?php echo $contact['nom'] . " " . $contact["prenom"]; ?></option><?php
                    }
                    ?>
                </select>
            </div><br><br>
        </div>
        <div class ="row mb-3">
            <h2>Compte-rendu</h2><br><br>
            <div class="form-outline">
                <textarea class="form-control" name ="bilan" id="textAreaExample2" rows="8" placeholder="Bilan"></textarea><br>
            </div>
            <div class="col-md-2">
                <input type = "number" name="coeff" class ="form-control"  placeholder = "Coeff." min ='0.01'max ='1' step="0.01" required>

            </div>
        </div>
        <div class ="row mb-3">
            <h2>Les produits présentés </h2><br><br>

            <div class="form-group">
                <select multiple class="form-control" name ="produits[]" id="exampleFormControlSelect2">
                    <?php
                    foreach ($produits as $produit) {
                        ?><option value = "<?php echo $produit['id']; ?>"><?php echo $produit['libelle']; ?></option><?php
                    }
                    ?>
                </select><br>
            </div>
            <div>
                <input type = "text" name="dateCom" class ="form-control" placeholder="Date du compte-rendu *" onfocus="(this.type = 'date')" required>
            </div>
        </div>


        <div class="float-end">
            <button type="submit" class="btn btn-outline-success" >Valider</button>
            <button type="reset" class="btn btn-outline-danger" >Annuler</button>
        </div>

    </form>
</div>