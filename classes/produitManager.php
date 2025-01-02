<?php
require_once '../Database.php';
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
            $data[] = new produit($produit['produitId'], $produit['name'], $produit['description'], $produit['prix'], $produit['quantity']);
        }
        return $data;// [ produit, produit, produit]
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

    public function getProduit($produitId)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM produits WHERE produitId = :produitId");
        $stmt->execute([
            ':produitId' => $produitId
        ]);
        $produit = $stmt->fetch();
        return new produit($produit['produitId'], $produit['name'], $produit['description'], $produit['prix'], $produit['quantity']);
    }

    public function update(produit $produit)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("UPDATE produits SET name = :name, description = :description, prix = :prix, quantity = :quantity WHERE produitId = :produitId");
        $stmt->execute([
            ':name' => $produit->getNom(),
            ':description' => $produit->getDescription(),
            ':prix' => $produit->getPrix(),
            ':quantity' => $produit->getQuantity(),
            ':produitId' => $produit->getProduitId()
        ]);
    }
}
