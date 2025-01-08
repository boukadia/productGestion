<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/header.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Cards</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Arial', sans-serif;
    }
  </style>
</head>

<body>
 
  <h1 class='text-center mb-4'>Product List</h1>
  <div class="product-list">
    <?php
    $connect = Database::getConnection();
    $stmt = $connect->prepare("SELECT * FROM produits");
    $stmt->execute();

    while ($produit = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo "
      
      <div class='product-card'>
        <div class='card h-100 shadow'>
          <div class='card-body'>
            <h5 class='card-title'>" . $produit['nomProduit'] . "</h5>
             <img style='width:100px' src=".$produit['image']." alt=''>
            <p class='card-text'><strong>Quantity:</strong> " . $produit['quantity'] . "</p>
            <p class='card-text'><strong>Prix:</strong> " . $produit['prix'] . "</p>
          </div>
          <div class='card-footer text-center'>
            <a href='addToPanier.php?produitId=" . $produit['produitId'] . "&quantity=1' class='btn btn-primary'>Add to Cart</a>
          </div>
        </div>
      </div>";
    }
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>