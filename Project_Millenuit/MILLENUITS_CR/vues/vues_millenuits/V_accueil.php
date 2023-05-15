

<div class="container">

    <div class ="text-center">
        <?php
        if (isset($_SESSION['login'])) {
            include 'V_caroussel.php';
            ?>
            <h1>Bienvenue sur l'application MILLENUIT_CR <?php echo $_SESSION['login'] ?> ! </h1>
        <?php } else {
            ?>

            <?php
            include 'V_caroussel.php';
            ?>


            <h1>Bienvenue sur l'application MILLENUIT_CR</h1>
            <h2>Vous devez vous connecter pour accéder à l'application</h2>
        </div>

        <?php
    }
    ?>


</div>


