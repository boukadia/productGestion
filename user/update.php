<?php 
// include " ../classes/user.php";
// include " ../database.php";
require($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/database.php');
require($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/header.php');


require($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/classes/user.php');

$connect=Database::getConnection();
$userId=$_GET['userId'];
$updateUser=new user();
$updateUser->updateUser($userId);

if(isset($_POST['submit'])){
    $nom=$_POST['nom'];
$email=$_POST['email'];
$status=$_POST['status'];
    $stmt=$connect->prepare("update users set nom=?,email=?,status=? where userId=?");
$stmt->execute([$nom,$email,$status,$userId]);
}


?>