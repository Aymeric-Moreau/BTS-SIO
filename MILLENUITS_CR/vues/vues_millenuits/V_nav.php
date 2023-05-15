<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.php" ><img src="assets/images/Logo_mille_nuits.png" alt="Logo MILLENUITS" width="90" height="90" /></a>

        <!-- gestion du menu pour les smartphone -->
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu-millenuits">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- fin de gestion du menu smartphone -->

        <!-- Fonctionnalités de la barre de navigation -->
        <div class="collapse navbar-collapse" id="menu-millenuits">
            <?php
            if (isset($_SESSION["login"])) {
                ?>
                <ul class="navbar-nav">
                    <li class="nav_item dropdown">
                        <a class ="nav-link dropdown-toggle" href="#"
                           id="navbarDropdownCommerciaux" data-bs-toggle="dropdown">Commerciaux</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownCommerciaux">
                            <li><a class="dropdown-item" href="index.php?uc=commerciaux&action=ajout_commerciaux">Ajouter un commercial</a></li>
                            <li><a class="dropdown-item" href="index.php?uc=commerciaux&action=liste_commerciaux">Liste des commerciaux</a></li>
                        </ul>  
                    </li>
                    <li class="nav_item dropdown">
                        <a class ="nav-link dropdown-toggle" href="#"
                           id="navbarDropdownDistributeurs" data-bs-toggle="dropdown">Distributeurs</a>
                        <ul class="dropdown-menu" aria-labelledby="Distributeurs">
                            <li><a class="dropdown-item" href="index.php?uc=distributeur&action=ajouter_distributeur">Ajouter un distributeur</a></li>
                            <li><a class="dropdown-item" href="index.php?uc=distributeur&action=listes_distributeurs">Liste des distributeurs par secteur</a></li>
                        </ul>  
                    </li>
                    <li class="nav_item dropdown">
                        <a class ="nav-link dropdown-toggle" href="#"
                           id="navbarDropdownContacts" data-bs-toggle="dropdown">Contacts</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownContacts">
                            <li><a class="dropdown-item" href="index.php?uc=contacts&action=ajouter_contact">Ajouter un contact</a></li>
                            <li><a class="dropdown-item" href="index.php?uc=contacts&action=liste_Contact">Liste des contacts d'un distributeur</a></li>
                        </ul>  
                    </li>
                    <li class="nav_item dropdown">
                        <a class ="nav-link dropdown-toggle" href="#"
                           id="navbarDropdownProduits" data-bs-toggle="dropdown">Produits</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownProduits">
                            <li><a class="dropdown-item" href="index.php?uc=produits&action=ajout_produits">Ajouter un produit</a></li>
                            <li><a class="dropdown-item" href="#">Liste des produits d'un catégorie</a></li>
                        </ul>  
                    </li>
                    <li class="nav_item dropdown">
                        <a class ="nav-link dropdown-toggle" href="#"
                           id="navbarDropdownCompteRendus" data-bs-toggle="dropdown">Comptes-rendus de visites</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownCompteRendus">
                            <li><a class="dropdown-item" href="index.php?uc=compte_rendu&action=ajouter_compteRendu">Ajouter un compte-rendu</a></li>
                            <li><a class="dropdown-item" href="index.php?uc=distributeur&action=listes_distributeurs">Consulter le dernier compte-rendu d'un distributeur</a></li>
                        </ul>  
                    </li>
                    <li class="nav_item dropdown">
                        <a class ="nav-link dropdown-toggle" href="#"
                           id="navbarDropdownConsultation" data-bs-toggle="dropdown">Consultation</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownConsultation">
                            <li><a class="dropdown-item" href="#">Les comptes rendus de visite pour un commercial pour une période donnée</a></li>
                            <li><a class="dropdown-item" href="#">Consulter le dernier compte-rendu d'un distributeur</a></li>
                        </ul>  
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <!-- balise href pour le nom de l'utilisateur pour la présentation -->
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

