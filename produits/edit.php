<?php
require_once '../classes/ProduitManager.php';
$produit = new ProduitManager();
$produitId = $_GET['produitId'];
// echo $produitId;
$produit->update($produitId);

// $produit = $produitManager->getProduit($_GET['produitId']);

// if($_POST['btnSubmit'])
// {
//     $produit->setNomProduit($_POST['nomProduit']);
//     $produit->setDescription($_POST['description']);
//     $produit->setPrix($_POST['prix']);
//     $produit->setQuantity($_POST['quantity']);
//     $produitManager->update($produit);
//     header('Location: ../index.php');
// }    
if (isset($_POST['submit'])) {
    $nomProduit = $_POST['nomProduit'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $quantity = $_POST['quantity'];
    $stmt = $connect->prepare("update produits set nomProduit=?,description=?,prix=?,quantity=? where produitId=?");
    $stmt->execute([$nomProduit, $description, $prix, $quantity, $produitId]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>

</body>

</html>