<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/database.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/header.php');


if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .empty-cart {
                text-align: center;
                background-color: #fff;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .empty-cart h1 {
                font-size: 2rem;
                color: #555;
            }

            .empty-cart p {
                font-size: 1.2rem;
                color: #888;
                margin: 15px 0;
            }

            .empty-cart a {
                display: inline-block;
                margin-top: 20px;
                background-color: #1D7453FF;
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }
        </style>
    </head>

    <body>
        <div class="empty-cart">
            <h1>Panier is empty</h1>
            <p>Your cart is empty. Add some produits to proceed!</p>
            <a href="client.php">Go to Shop</a>
        </div>
    </body>

    </html>
<?php
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

</style>

<body>


    <h1>Your Cart</h1>
    <div class="card-container">
        <?php
        $pdo = Database::getConnection();
        $totalprix = 0;

        foreach ($_SESSION['cart'] as $produitId => $item) {

            $stmt = $pdo->prepare("SELECT * FROM produits WHERE produitId =?");
            $stmt->execute([$produitId]);
            $produit = $stmt->fetch();

            if ($produit) {

                $itemTotal = $produit['prix'] * $item['quantity'];
                $totalprix += $itemTotal;
        echo "
               <div class='product-card'>
        <div class='card h-100 shadow'>
          <div class='card-body'>
            <h5 class='card-title'>" . $produit['nomProduit'] . "</h5>
            <p class='card-text'>" . $produit['description'] . "</p>
            <p class='card-text'><strong>Quantity:</strong> " . $item['quantity'] . "</p>
            <p class='card-text'><strong>Prix:</strong> " . $produit['prix'] . "</p>
          </div>
          <div class='card-footer text-center'>
            <a href='addToPanier.php?produitId=" . $produit['produitId'] . "&quantity=1' class='btn btn-primary'>Add to Cart</a>
          </div>
        </div>
      </div>
        ";
            } else {
                echo "<p>produit not found $produitId.</p>";
            }
        }
        ?>
    </div>
    <div class="checkout-summary">
        <h2>Total prix: <?php echo $totalprix; ?> $</h2>

        <form action="../../function/orders/checkout.php" method="post">
            <button type="submit">confirm order</button>
        </form>
    </div>

</body>

</html>