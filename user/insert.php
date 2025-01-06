<?php 
require_once "../database.php";
require_once "../classes/user.php";

{
$nom=$_POST['nom'];
$email=$_POST['email'];
$password=$_POST['password'];
$role=$_POST['role'];
$status=$_POST['status'];
$user=new user();
$user->addUser($nom,$email,$password,$role,$status);
header('Location: /produitGestion/index.php');

}









?>