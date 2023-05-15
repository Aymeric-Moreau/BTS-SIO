<div class="container">

   

    <h1>Les distributeur ayant pas eu de visite depuis 4 mois sont : </h1>
    <table class = "table table-striped">
    <thead>
        <tr>
            <th scope ="col">Raison Sociale</th>
            <th scope ="col">Adresse</th>

        </tr>
    </thead>
    <tbody>
        <?php
        try {
            
        
        foreach ($distribSV as $valeur) {
            
                ?>
                <tr>
                    <td><?php echo $valeur['raison_sociale']; ?></td>
                    <td><?php echo $valeur['adresse_l1']  ?></td>   

                </tr>
                <?php
            
        }
        
        } catch (Exception $ex) {
            echo $ex;
            
        }
        ?>
    </tbody>       
</table>
</div>