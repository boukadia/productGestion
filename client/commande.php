<?php
// require_once($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/database.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/classes/produitManager.php');
session_start();
var_dump($_SESSION['cart']  );
$total=0;
foreach($_SESSION['cart'] as $item){
$total+=$item['quantity'] * $item['prix'];

}
// var_dump($total);

$produitManager=new produitManager();
$order=$produitManager->createOrder($item,$total);




?>