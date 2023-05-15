<div class="container">
    <form action="index.php?uc=authentification&action=valid_connexion" method="post">
        <div class="mn-3 col-md-4">
            <h3>Authentification</h3>
        </div>    

        <div  class="mn-3 col-md-4">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" name="login" id="login" placeholder="Indiquez votre login">
        </div>

        <div class="mb-3 col-md-4">
            <label for="password" class="form-label">Mot de passes</label>
            <input type="password" class="form-control" name="mdp" id="password" placeholder="Indiquez votre mot de passe">
        </div>
        <button type="submit" class="btn btn-primary">Connexion</button>


    </form>
</div>