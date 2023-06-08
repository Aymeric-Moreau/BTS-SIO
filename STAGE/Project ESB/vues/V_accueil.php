

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
            ?>


            

            <?php
        }
        ?>


    </div>

</div>
