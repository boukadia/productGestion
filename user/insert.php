<?php
require_once "../database.php";
require_once "../classes/user.php"; {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = new user();
    $user->addUser($nom, $email, $password);
    header('Location: /produitGestion/setting/register.php');
}


// ==============================
