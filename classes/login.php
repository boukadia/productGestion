<?php  
require_once '../header.php';

?>
<!DOCTYPE html>
<html lang="en">

<body>
    
<!-- Formulaire de Login -->
<div class="container">
        <div class="login-box">
            <h3>Connexion</h3>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-custom btn-block">Se connecter</button>
            </form>
        </div>
    </div>
</body>
</html>