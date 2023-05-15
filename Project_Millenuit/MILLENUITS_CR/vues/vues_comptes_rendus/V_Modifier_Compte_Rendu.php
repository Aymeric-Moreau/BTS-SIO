<div class ="container">
    <form method ="post" action="index.php?uc=compte_rendu&action=valid_modification&id=<?php echo htmlspecialchars($_GET["id"]);?>"> 
        <h1>Modifer le compte rendu</h1> 
        <h2><?php
      
            foreach ($bilan as $titre) {
                echo $titre["raison_sociale"];
                break;
            }
            ?></h2>
        <h3>Visite du <?php
            foreach ($bilan as $b) {
                echo $b["date"];
                break;
            }
            ?> </h3><br>
        <div class ="row mb-3">
            <div>
                <h2>Bilan</h2>
                <textarea class="form-control" name ="bilan" id="textAreaExample2" rows="8" placeholder="Bilan"><?php
                    foreach ($bilan as $b) {
                        echo $b["bilan"];
                        break;
                    }
                    ?></textarea><br>

            </div><br>
            <div class="col-md-2">
                <input type = "number" name="coeff" class ="form-control"  placeholder = "Coeff." min ='0.01'max ='1' value =<?php
                foreach ($bilan as $b) {
                    echo $b["coeff"];
                    break;
                }
                ?> step="0.01" required>

            </div>

        </div>
        <div class="float-end">
            <button type="" class="btn btn-outline-success" name = "test" id = "test">Valider</button>
            <button type="reset" class="btn btn-outline-danger" >Annuler</button>
        </div>
    </form>
</div>
