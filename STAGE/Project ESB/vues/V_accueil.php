

<div class="container">

    <div class ="text-center">
        <?php
        if (isset($_SESSION['login'])) {
            include 'V_caroussel.php';
            ?>
            
        <?php } else {
            ?>

            <?php
            include 'V_caroussel.php';
            ?>


            
        </div>

        <?php
    }
    ?>


</div>


