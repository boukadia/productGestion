<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/header.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/database.php');
if (isset($_GET['produitId'])) {
    $produitId = $_GET['produitId'];
    $quantity  = $_GET["quantity"];
    if (!isset($_SESSION["card"])) {
        $_SESSION["card"] = [];
    }
    $connect = database::getConnection();

    $stmt = $connect->prepare("select * from produits where produitId=?");
    $stmt->execute([$produitId]);
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($produit);



    if ($produit) {
        if (isset($_SESSION['cart'][$produitId])) {
            $_SESSION['cart'][$produitId]['quantity'] += $quantity;
        } else {
            $_SESSION['cart'][$produitId] = [
                'quantity' => $quantity,
                'prix' => $produit['prix'],  
            ];
        }

        header('Location:  ./panier.php');
        exit();
    } else {
        echo "produit not found.";
    }
}
