<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <!-- logo de l'esb -->
        <a class="navbar-brand" href="index.php" ><img src="assets/img/logo_esb.png" alt="Logo ESB" width="90" height="90" /></a>

        <!-- gestion du menu pour les smartphone -->
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- fin de gestion du menu smartphone -->

        <!-- Fonctionnalités de la barre de navigation -->
        <div class="collapse navbar-collapse justify-content-end" id="menu">

            <ul class="navbar-nav nav-pills">
                <li class="nav_item dropdown active">
                    <!-- menue déroulant -->
                    <a class ="nav-link dropdown-toggle" href="#"
                       id="navbarDropdownCommerciaux" data-bs-toggle="dropdown">Qui somme nous ?</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownCommerciaux">
                       <!-- élément a l'intérieur du menue déroulant -->
                        <li><a class="dropdown-item" href="index.php?uc=presentation&action=presentation">Présentation</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=presentation&action=histoire">Notre histoire</a></li>
                    </ul>  
                </li>
                <li class="nav_item dropdown">
                    <a class ="nav-link dropdown-toggle" href="#"
                       id="navbarDropdownDistributeurs" data-bs-toggle="dropdown">Sport Collectif</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownDistributeurs">
                        <li><a class="dropdown-item" href="index.php?uc=sport_co&action=football">Footblall</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_co&action=basket">Basket</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_co&action=hockey">Hockey</a></li>
                    </ul>  
                </li>
                <li class="nav_item dropdown">
                    <a class ="nav-link dropdown-toggle" href="#"
                       id="navbarDropdownContacts" data-bs-toggle="dropdown">Sport de Combat</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownContacts">
                        <li><a class="dropdown-item" href="index.php?uc=sport_combat&action=judo">Judo</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_combat&action=karate">Karaté</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_combat&action=escrime">Escrime</a></li>
                    </ul>  
                </li>
                <li class="nav_item dropdown">
                    <a class ="nav-link dropdown-toggle" href="#"
                       id="navbarDropdownProduits" data-bs-toggle="dropdown">Sports de Raquette</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownProduits">
                        <li><a class="dropdown-item" href="index.php?uc=sport_raquette&action=tennis">Tennis</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_raquette&action=tennis_table">Tennis de Table</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_raquette&action=badminton">Badminton</a></li>
                    </ul>  
                </li>
                <li class="nav_item dropdown">
                    <a class ="nav-link dropdown-toggle" href="#"
                       id="navbarDropdownCompteRendus" data-bs-toggle="dropdown">Sport de Glisse</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownCompteRendus">
                        <li><a class="dropdown-item" href="index.php?uc=sport_glisse&action=patinage">Patinage</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_glisse&action=roller">Roller</a></li>

                    </ul>  
                </li>
                <li class="nav_item dropdown">
                    <a class ="nav-link dropdown-toggle" href="#"
                       id="navbarDropdownCompteRendus" data-bs-toggle="dropdown">Gymnastique</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownCompteRendus">
                        <li><a class="dropdown-item" href="index.php?uc=gym&action=gymnastique">Gymnastique volontaire</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=gym&action=taiso">Taïso</a></li>

                    </ul>  
                </li>
                <li class="nav_item ">
                    <a class ="nav-link " href="index.php?uc=petanque&action=petanque"
                       id="navbarPetanque" >Pétanque</a>

                </li>
                <li class="nav_item ">
                    <a class ="nav-link " href="index.php?uc=decouvert&action=decouvert"
                       id="navbarPetanque" >Découverte</a>

                </li>
            </ul>
            /* si l'utilisateur est connecter cela fais apparaite le bouton pour ce déconnecter si il n'est pas connecter cela fais apparaite le bouton se connecter */
            <?php
            if (isset($_SESSION["login"])) {
                ?>
                <ul class="navbar-nav ms-auto">
                    balise href pour le nom de l'utilisateur pour la présentation 
                    <li class="nav-item" ><a class="nav-link" href="#"><span class="bi-person-fill">
                            </span><?php echo " " . $_SESSION["login"]; ?></a></li>
                    <li class="nav-item" ><a class="nav-link" href="index.php?uc=authentification&action=se_deconnecter"> Se déconnecter
                            <span class="bi-box-arrow-in-right"></span></a></li>                  
                </ul>
                <?php
            } else {
                ?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php?uc=authentification&action=se_connecter">Se connecter
                            <span class="bi bi-box-arrow-in-left"></span></a></li>
                </ul>
                <?php
            }
            ?>
        </div>
    </div>
</nav>