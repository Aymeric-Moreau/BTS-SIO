<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container">
        <a class="navbar-brand" href="index.php"> <img src="img\btssio.png" alt="Logo bts sio" width="87" height="37"> </a>

        <!-- gestion du menu pour portable -->
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu-btssio">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- fin gestion smartphone -->

        <!-- fonctionnalité de la barre de navigation -->
        <div class="collapse navbar-collapse" id="menu-btssio">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php?uc=fonctionnalite_publique"> Fonctionnalite publique </a></li>
            </ul>
            <?php
            if (isset($_SESSION["login"])) {
                ?>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbargerer" data-bs-toggle="dropdown">Gérer les utilisateurs</a>
                        <ul class="dropdown-menu" aria-labelledby="navbaratelier">
                            <li><a class="dropdown-item" href="index.php?uc=liste_autre&action=liste_des_utilisateurs">Liste des utilisateurs</a>   </li>
                            <li><a class="dropdown-item" href="index.php?uc=liste_autre&action=Autre_fonctionnalite_utilisateur">Autre fonctionnalité utilisateur</a>   </li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#"> Se connecter
                            <span class="bi-person-fill"></span> <?php echo " " . $_SESSION["login"]; ?>  </a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?uc=authentification&action=se_deconnecter"> Se deconnecter
                            <span class="bi-box-arrow-in-right"></span></a></li>
                </ul>


                <?php
            } else {
                ?>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php?uc=authentification&action=se_connecter"> Se connecter
                            <span class="bi bi-box-arrow-in-left"></span></a></li>
                </ul>
            <?php } ?>

        </div>
    </div>

</nav>