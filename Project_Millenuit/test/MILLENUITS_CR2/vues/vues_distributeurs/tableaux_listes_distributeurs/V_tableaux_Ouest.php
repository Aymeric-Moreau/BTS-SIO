<!--Tableau ouest -->
<table class = "table table-striped">
    <thead>
        <tr>
            <th scope ="col">Raison Sociale</th>
            <th scope ="col">Commune</th>
            <th scope ="col">Commericale</th>
            <th scope ="col">Contact privilégié</th>
            <th scope ="col">Téléphone contact</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($distributeurs as $valeur) {
            if ($valeur['id_secteur'] == 2) {
                ?>
                <tr>
                    <td><?php echo $valeur['raison_sociale']; ?></td>
                    <td><?php echo $valeur['code_postal'] . " " . $valeur['nom_commune']; ?></td>   
                    <td><?php echo $valeur['nomC'] . " " . $valeur['prenomC']; ?></td> 
                    <td><?php echo $valeur['nom'] . " " . $valeur['prenom']; ?></td>
                    <?php
                    if ($valeur['tel_portable'] == NULL) {
                        ?>
                        <td><?php echo $valeur['tel_fixe']; ?></td>   

                        <?php
                    } else {
                        ?>
                        <td><?php echo $valeur['tel_portable']; ?></td> 
                        <?php
                    }
                    ?>
                </tr>
                <?php
            }
        }
        ?>
    </tbody>       
</table>
