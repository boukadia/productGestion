<?php 
session_start();

// if(isset($_POST['submit'])){
    require($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/classes/user.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/database.php');



    $email=$_POST['email'];
    $password=$_POST['password'];
    $user=new user();
    $user->login($email,$password);
// }
?>