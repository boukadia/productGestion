<?php  
require_once '../header.php';
require_once($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/header.php');



?>
<!DOCTYPE html>
<html lang="en">

<body>
    
<div class="container">
        <div class="login-box">
            <h3>register</h3>
            <form action="../user/insert.php" method="POST">
                <div class="form-group">
                    <label for="nom">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <button type="submit" class="btn btn-custom btn-block">Se connecter</button>
            </form>
            <a href="../classes/login.php">login</a>

        </div>
    </div>
</body>
</html>