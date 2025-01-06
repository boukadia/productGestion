<?php 
require_once "../classes/user.php";
require_once "../database.php";
$user=new user();
$user->deleteUser($_GET['userId']);
header('Location: /produits/index.php');


?>