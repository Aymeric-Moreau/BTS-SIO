

<div class="container">
    <h1>Liste des utilisateurs</h1>
    <!--<legend>Login des utilisateurs</legend>-->

    <table class="table table-striped"> 
        <thead>
            <tr>
                <th scope="col"> <h3>Login de l'utilisateur</h3></th>
<!--                <th scope="col"></th>
                <th scope="col"></th>-->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($utilisateur as $valeur) {
                ?>

                <tr>

                    <td><?php echo $valeur['login']; ?></td>
                    <td><i class="bi bi-pen"></i></td>
                    <td><i class="bi bi-trash"></i></td>
                </tr>


                <?php
            }
            ?>

        </tbody>


    </table>  
</div>


