<?php
// require '../database.php';
require($_SERVER['DOCUMENT_ROOT'] . '/produitGestion/database.php');

require_once 'produit.php';


class produitManager
{
    public function displayAll()
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM produits");
        $stmt->execute();
        $produits = $stmt->fetchAll();
        $data = [];
        foreach ($produits as $produit) {
            $data[] = new produit($produit['produitId'], $produit['nomProduit'], $produit['description'], $produit['prix'], $produit['quantity']);
        }
        return $data; // [ produit, produit, produit]
    }

    public function delete($produitId)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("DELETE FROM produits WHERE produitId = :produitId");
        // $stmt->bindParam(':produitId', $produitId);
        $stmt->execute([
            ':produitId' => $produitId
        ]);
    }

    // public function getProduit($produitId)
    // {
    //     $conn = Database::getConnection();
    //     $stmt = $conn->prepare("SELECT * FROM produits WHERE produitId = :produitId");
    //     $stmt->execute([
    //         ':produitId' => $produitId
    //     ]);
    //     $produit = $stmt->fetch();
    //     return new produit($produit['produitId'], $produit['nomProduit'], $produit['description'], $produit['prix'], $produit['quantity']);
    // }
    // ==========================================insert dans database======================================================

    public function insert($nomProduit, $description, $prix, $quantity)
    {
        $connect = Database::getConnection();
        $stmt = $connect->prepare("insert into produits(nomProduit,description,prix,quantity) values(?,?,?,?)");
        $stmt->execute([$nomProduit, $description, $prix, $quantity]);
    }

    // =================================================================================================================



    // ============================update produits============================
    public function update($produitId)
    {

        $connect = database::getConnection();
        $stmt = $connect->prepare("select * from produits where produitId=?");
        $stmt->execute([$produitId]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        $nomProduit = $product['nomProduit'];
        $description = $product['description'];
        $prix = $product['prix'];
        $quantity = $product['quantity'];
        echo "
    <form method='post' action=''>
    <input type='text' name='nomProduit' value='$nomProduit'>
    <input type='text' name='description' value=' $description'>
    <input type='text' name='prix' value=' $prix'>
    <input type='text' name='quantity' value=' $quantity'>
    <button type='submit' name='submit'>Modifier</button>
</form>";
    }


    // ================================affichage des produits=====================
    public function affichage()
    {
        $connect = Database::getConnection();
        $stmt = $connect->prepare("SELECT * FROM produits");
        $stmt->execute();

        while ($produit = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tbody>
            <tr>
                <td>" . htmlspecialchars($produit['nomProduit']) . "</td>
                <td>" . htmlspecialchars($produit['description']) . "</td>
                <td>" . htmlspecialchars($produit['prix']) . "</td>
                <td>" . htmlspecialchars($produit['quantity']) . "</td>
                <td>
                    <a href='./produits/edit.php?produitId=" . $produit['produitId'] . "'>Edit</a>
                    <a href='./produits/delete.php?produitId=" . $produit['produitId'] . "'>Delete</a>
                </td>
            </tr>
        </tbody>";
        }
    }





    // public function update(produit $produit)
    // {
    //     $conn = Database::getConnection();
    //     $stmt = $conn->prepare("UPDATE produits SET nomProduit = :nomProduit, description = :description, prix = :prix, quantity = :quantity WHERE produitId = :produitId");
    //     $stmt->execute([
    //         ':nomProduit' => $produit->getNomProduit(),
    //         ':description' => $produit->getDescription(),
    //         ':prix' => $produit->getPrix(),
    //         ':quantity' => $produit->getQuantity(),
    //         ':produitId' => $produit->getProduitId()
    //     ]);
    // }
}
