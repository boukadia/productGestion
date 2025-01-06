<?php



class produit
{
    private $produitId;
    private $nomProduit;
    private $description;
    private $prix;
    private $quantity;

    public function getProduitId()
    {
        return $this->produitId;
    }

    public function getNomProduit()
    {
        return $this->nomProduit;
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

    public function setNomProduit($nomProduit)
    {
        if(!$nomProduit){
            echo "nomProduit is required";
            return;
        }
        $this->nomProduit = $nomProduit;
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
    public function __construct($produitId, $nomProduit, $description, $prix, $quantity)
    {
        
        $this->produitId = $produitId;
        $this->nomProduit = $nomProduit;
        $this->description = $description;
        $this->prix = $prix;
        $this->quantity = $quantity;
    }

    // public function __destruct()
    // {
    //     echo "produit object is destroyed\n";
    // }

    public function rendreRow()
    {
        return "<tr>
                    <td>$this->nomProduit</td>
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
