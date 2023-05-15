<table>
    <tr>
        <th>nom du produit</th>
        <th>Référence</th>
        <th>prix</th>
    </tr>
    <?php
    foreach ($listeProduit as $valeur) // On affiche tous les produits stockés dans le tableau $listeProduit
    {
    ?>
    <tr>
        <td><?php echo $valeur['designation'];?></td>
        <td><?php echo $valeur['numProduit'];?></td>
        <td><?php echo $valeur['prixUnitaire'];?></td>
    </tr>
    <?php
    }
    ?>
</table>