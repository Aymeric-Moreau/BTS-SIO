
<div class ="container">
    <h1>Détails du dernier compte-rendu de visite de  <?php
        foreach ($bilan as $titre) {
            echo $titre["raison_sociale"];
            break;
        }
        ?></h1><br>

    <div class ="row mb-3">
        <div>
            <h2>Bilan</h2>

            <p>
                <?php
                foreach ($bilan as $b) {
                    echo $b["bilan"];
                    break;
                }
                ?>
            </p>
        </div><br><br>
        <div>
            <span>Téléphone du contact : <?php
                foreach ($bilan as $tel) {

                    if (empty($tel["tel_portable"])) {
                        echo $tel["tel_fixe"];
                    } else {
                        echo $tel["tel_portable"];
                    }
                    break;
                }
                ?></span>
        </div><br><br>
        <table class = "table table-striped">
            <thead>
                <tr>
                    <th scope ="col">Catégorie du produit</th>
                    <th scope ="col">Nom du produit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($bilan as $produit) {
                    ?>
                    <tr>
                        <td><?php echo $produit['cl']; ?></td>
                        <td><?php echo$produit['pl'] ?></td>                       
                    </tr>
                    <?php
                }
                ?>
            </tbody>       
        </table>
        <div>

        </div>
    </div>