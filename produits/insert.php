<?php
// require_once "../database.php";

require_once "../classes/produitManager.php";
$nomProduit = $_POST['nomProduit'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$image = $_POST['image'];
$quantity = $_POST['quantity'];

$produitManager = new produitManager();
$produitManager->insert($nomProduit, $description, $prix, $quantity,$image);
header('Location: /produitGestion/index.php');


// =============================


