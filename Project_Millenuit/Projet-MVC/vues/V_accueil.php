<div class="container">
    <?php
    if (isset($_SESSION['login'])) {
        ?>
        <h1>Bienvenue sur mon site. Vous êtes connecter <?php echo $_SESSION['login']; ?> !</h1>
    <?php } else { ?>
        <h1>Bienvenue sur mon site.</h1>
        <h2>Vous devez vous connecter pour accéder aux fonctionnaliter privée</h2>
    <?php } ?>
</div>