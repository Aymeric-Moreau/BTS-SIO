

<div class="container-fluid">

    <div class ="text-center">
        <?php
        if (isset($_SESSION['login'])) {
            include 'V_caroussel.php';
            ?>

        <?php } else {
            ?>

            <?php
            include 'V_caroussel.php';
            include 'V_card.php';
            include 'V_presentation_personne.php';
            include 'V_form.php';
            ?>


            

            <?php
        }
        ?>


    </div>

</div>

        <div class="col gy-5 col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="assets/img/logo_esb.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#info1">Go somewhere</a>
                    <div class="offcanvas offcanvas-bottom h-100" tabindex="-1" id="info1" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            info1
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tellus leo, volutpat vitae
                            mi
                            ultrices,
                            sollicitudin
                            blandit dui. Mauris ultricies iaculis leo id consequat. Class aptent taciti sociosqu ad
                            litora
                            torquent
                            per conubia
                            nostra, per inceptos himenaeos. Sed posuere risus viverra ornare porttitor. Nullam egestas
                            nec
                            libero eget
                            sagittis.
                            Phasellus vulputate ante a vulputate vehicula. Suspendisse nec dolor ante.
                        </div>
                    </div>
                </div>
            </div>
        </div>