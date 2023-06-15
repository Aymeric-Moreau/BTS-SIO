<nav class="navbar navbar-expand-lg bs-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php" ><img src="assets/img/logo_esb.png" alt="Logo ESB" width="90" height="90" /></a>

        <!-- gestion du menu pour les smartphone -->
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- fin de gestion du menu smartphone -->

        <!-- Fonctionnalités de la barre de navigation -->
        <div class="navbar-nav collapse navbar-collapse  ms-auto" id="menu">

            <ul class="navbar-nav nav-pills">
                <li class="nav_item dropdown active">
                    <a class ="nav-link dropdown-toggle" href="#"
                       id="navbarDropdownpresentation" data-bs-toggle="dropdown">Qui somme nous ?</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownpresentation">
                        <li><a class="dropdown-item" href="index.php?uc=presentation&action=presentation">Présentation</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=presentation&action=histoire">Notre histoire</a></li>
                    </ul>  
                </li>
                
                <li class="nav_item dropdown">
                    <a class ="nav-link dropdown-toggle" href="#"
                       id="navbarDropdownSport" data-bs-toggle="dropdown">Les sport</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownSport">
                        <li><a class="dropdown-item" href="index.php?uc=sport_raquette&action=badminton">Badminton</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_co&action=basket">Basket</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_combat&action=escrime">Escrime</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_co&action=football">Footblall</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=gym&action=gymnastique">Gymnastique volontaire</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_co&action=hockey">Hockey</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_combat&action=judo">Judo</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_combat&action=karate">Karaté</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_glisse&action=patinage">Patinage</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=petanque&action=petanque" >Pétanque</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_glisse&action=roller">Roller</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=gym&action=taiso">Taïso</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_raquette&action=tennis">Tennis</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=sport_raquette&action=tennis_table">Tennis de Table</a></li>
                    </ul>  
                </li>

                <li class="nav_item ">
                    <a class ="nav-link " href="index.php?uc=decouvert&action=decouvert"
                       id="navbarDecouvert" >Découverte</a>

                </li>
            </ul>
                        <?php
            if (isset($_SESSION["login"])) {
            ?>
                           <ul class="navbar-nav ms-auto">
                                 <!--balise href pour le nom de l'utilisateur pour la présentation--> 
                                <li class="nav-item" ><a class="nav-link" href="#"><span class="bi-person-fill">
                                        </span><?php echo " " . $_SESSION["login"]; ?></a></li>
                                <li class="nav-item" ><a class="nav-link" href="index.php?uc=authentification&action=se_deconnecter"> Se déconnecter
                                        <span class="bi-box-arrow-in-right"></span></a></li>                  
                            </ul>
            <?php
          } else {
            ?>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item"> <button type="button" class="btn " href="index.php?uc=authentification&action=se_connecter" id="se_connecter">Se connecter</button> </li>
                                
                            </ul>
            <?php
            }
            ?>
        </div>
    </div>
</nav>

