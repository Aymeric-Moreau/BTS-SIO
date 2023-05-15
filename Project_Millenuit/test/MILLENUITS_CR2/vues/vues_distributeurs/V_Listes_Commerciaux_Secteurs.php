<div class="container">
    <h2>Liste des distributeurs par secteur</h2>


    <div class="card">
        <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                Nord
            </a>
        </div>
        <div id="collapseOne" class="collapse">
            <div class="card-body">

                <?php include 'tableaux_listes_distributeurs/V_tableaux_Nord.php' ?>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                Ouest
            </a>
        </div>
        <div id="collapseTwo" class="collapse">
            <div class="card-body">

                <?php include 'tableaux_listes_distributeurs/V_tableaux_Ouest.php' ?>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                Provence,Alpes,Côte d'Azur
            </a>
        </div>
        <div id="collapseThree" class="collapse">
            <div class="card-body">

                <?php include 'tableaux_listes_distributeurs/V_tableaux_ProvenceAlpesCoteDazur.php' ?>


            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFour">
                Sud
            </a>
        </div>
        <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">

                <?php include 'tableaux_listes_distributeurs/V_tableaux_Sud.php' ?>

            </div>

        </div>
    </div>

</div>
