<div class="container">
    <div id="accordion">
        <h5>Liste des commerciaux par secteur</h5>

        <div class="card">
            <div class="card-header">
                <a class="btn" data-bs-toggle="collapse" href="#Nord">
                    Nord
                </a>
            </div>
            <div id="Nord" class="collapse show" data-bs-parent="#accordion">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Fix</th>
                                <th scope="col">Portable</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($commercial as $com) {
                                if ($com['id_secteur'] == 1) {
                                    ?>
                                    <tr>
                                        <td><?php echo " " . $com['nom']; ?> </td>
                                        <td><?php echo " " . $com['prenom']; ?> </td>
                                        <td><?php echo " " . $com['mail']; ?> </td>
                                        <td><?php echo " " . $com['tel_fixe']; ?> </td>
                                        <td><?php echo " " . $com['tel_portable']; ?> </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="btn" data-bs-toggle="collapse" href="#Ouest">
                    Ouest
                </a>
            </div>
            <div id="Ouest" class="collapse show" data-bs-parent="#accordion">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Fix</th>
                                <th scope="col">Portable</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($commercial as $com) {
                                if ($com['id_secteur'] == 2) {
                                    ?>
                                    <tr>
                                        <td><?php echo " " . $com['nom']; ?> </td>
                                        <td><?php echo " " . $com['prenom']; ?> </td>
                                        <td><?php echo " " . $com['mail']; ?> </td>
                                        <td><?php echo " " . $com['tel_fixe']; ?> </td>
                                        <td><?php echo " " . $com['tel_portable']; ?> </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="btn" data-bs-toggle="collapse" href="#Paca">
                    Provence, Alpes, Côte d'Azur
                </a>
            </div>
            <div id="Paca" class="collapse show" data-bs-parent="#accordion">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Fix</th>
                                <th scope="col">Portable</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($commercial as $com) {
                                if ($com['id_secteur'] == 3) {
                                    ?>
                                    <tr>
                                        <td><?php echo " " . $com['nom']; ?> </td>
                                        <td><?php echo " " . $com['prenom']; ?> </td>
                                        <td><?php echo " " . $com['mail']; ?> </td>
                                        <td><?php echo " " . $com['tel_fixe']; ?> </td>
                                        <td><?php echo " " . $com['tel_portable']; ?> </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="btn" data-bs-toggle="collapse" href="#Sud">
                    Sud
                </a>
            </div>
            <div id="Sud" class="collapse show" data-bs-parent="#accordion">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Fix</th>
                                <th scope="col">Portable</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($commercial as $com) {
                                if ($com['id_secteur'] == 4) {
                                    ?>
                                    <tr>
                                        <td><?php echo " " . $com['nom']; ?> </td>
                                        <td><?php echo " " . $com['prenom']; ?> </td>
                                        <td><?php echo " " . $com['mail']; ?> </td>
                                        <td><?php echo " " . $com['tel_fixe']; ?> </td>
                                        <td><?php echo " " . $com['tel_portable']; ?> </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>