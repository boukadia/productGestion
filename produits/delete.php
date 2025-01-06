<?php

if($_GET['produitId']){
    require_once '../classes/produitManager.php';
// require($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/database.php');
// require($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/classes/produitManager.php');

    $produitManager = new produitManager();
    $produitManager->delete($_GET['produitId']);
    header('Location: ../index.php');
}