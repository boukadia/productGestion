<?php
require_once 'classes/ProduitManager.php';
$produitManager = new ProduitManager();
$produit = $produitManager->getProduit($_GET['produitId']);

if($_POST['btnSubmit'])
{
    $produit->setNom($_POST['name']);
    $produit->setDescription($_POST['description']);
    $produit->setPrix($_POST['prix']);
    $produit->setQuantity($_POST['quantity']);
    $produitManager->update($produit);
    header('Location: /produits/index.php');
}    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body>
    <form action="">
        <input type="text" name="name" value="<?= $produit->getNom(); ?>">
        <input type="text" name="description" value="<?= $produit->getDescription(); ?>">
        <input type="text" name="prix" value="<?= $produit->getPrix(); ?>">
        <input type="text" name="quantity" value="<?= $produit->getQuantity(); ?>">
        <button type="submit" name="btnSubmit">Modifier</button>
    </form>
</body>
</html>