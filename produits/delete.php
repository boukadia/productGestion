<?php

if($_GET['produitId']){
    require_once 'classes/produitManager.php';
    $produitManager = new produitManager();
    $produitManager->delete($_GET['produitId']);
    header('Location: /produits/index.php');
}