
<div class="container">
    <form action="index.php?uc=authentification&action=valid_connexion" method="post">
        <div class ="mb-3 col-md-4">
            <h3>Authentification</h3>
        </div>
        <div class="mb-3 col-md-4">
            <label for="login" class="form-label">Login</label>
            <input type = "text" class="form-control" name="login" id ="login" placeholder="Indiquez votre login" >
        </div>
        <div class="mb-3 col-md-4">
            <label for="login" class="form-label">Mot de passe</label>
            <div class ="input-group">
                 <input type = "password" class="form-control" name="mdp" id ="password" placeholder="Indiquez votre mot de passe" >
                <span class="input-group-text"><i class="bi bi-eye" id="togglePassword"></i></span>
            </div>
        </div>
        <button type ="submit" class ="btn btn-primary">Connexion</button>
    </form>
</div>

