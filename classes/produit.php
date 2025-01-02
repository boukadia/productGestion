<?php

class produit
{
    private $produitId;
    private $nom;
    private $description;
    private $prix;
    private $quantity;

    public function getProduitId()
    {
        return $this->produitId;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setNom($nom)
    {
        if(!$nom){
            echo "nom is required";
            return;
        }
        $this->nom = $nom;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function __construct($produitId, $nom, $description, $prix, $quantity)
    {
        echo "produit object is created\n";
        $this->produitId = $produitId;
        $this->nom = $nom;
        $this->description = $description;
        $this->prix = $prix;
        $this->quantity = $quantity;
    }

    public function __destruct()
    {
        echo "produit object is destroyed\n";
    }

    public function rendreRow()
    {
        return "<tr>
                    <td>$this->nom</td>
                    <td>$this->description</td>
                    <td>$this->prix</td>
                    <td>$this->quantity</td>
                    <td>
                        <a href='/produits/edit.php?produitId=$this->produitId'>Edit</a>
                        <a href='/produits/delete.php?produitId=$this->produitId'>Delete</a>
                    </td>
                </tr>";
    }
}
