<?php
require($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/classes/user.php');

require_once '../header.php';


// header('Location:../index.php');


?>
<!DOCTYPE html>
<html lang="en">

<body>

    <div class="container">
        <div class="login-box">
            <h3>login</h3>
            <form action="../setting/loginVerification.php" method="POST">

                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button nom="submit" type="submit" class="btn btn-custom btn-block">Se connecter</button>
            </form>
            <a href="../setting/register.php">register</a>
        </div>
    </div>
</body>

</html>