<?php
// require_once './database.php';
require_once './classes/user.php';
require_once './classes/produitManager.php';
require_once './header.php';
$produitManager = new produitManager();
$produits = $produitManager->displayAll();
?>

<!DOCTYPE html>
<html lang="fr">


<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">Tableau de bord</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tableau de bord</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="container dashboard-content">
        <h2>Liste des Produits</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Quantite</th>
                <th>Actions</th>
            </tr>
            <?php
            $affiche=new produitManager;
            $affiche->affichage();
            // foreach ($produits as $produit) {
                // echo $produit->rendreRow();
            // } 
            
            ?>
        </table>
    </div>
    <!-- =================================userAffichage -->




    
    <div class="container dashboard-content">
        <h2>Liste des Produits</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>email</th>
                <th>Prix</th>
                <th>Quantite</th>
                <th>Actions</th>
            </tr>
            <?php
            $affichage=new user;
            $affichage->affichage();
            // foreach ($produits as $produit) {
                // echo $produit->rendreRow();
            // } 
            
            ?>
        </table>
    </div>





    <div class="container mt-5">
    <h2 class="mb-4">Ajouter un Produit</h2>
    <form method="POST" action="./produits/insert.php">
      <div class="mb-3">
        <label for="nomProduit" class="form-label">Nom du Produit</label>
        <input type="text" name="nomProduit" class="form-control" id="nomProduit" placeholder="Entrez le nom du produit" required>
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-control" id="description" rows="3" placeholder="Entrez une description" required></textarea>
      </div>

      <div class="mb-3">
        <label for="quantite" class="form-label">Quantite</label>
        <input name="quantity" type="number" class="form-control" id="quantite" placeholder="Entrez la quantité" required>
      </div>

      <div class="mb-3">
        <label for="prix" class="form-label">Prix</label>
        <input name="prix" type="number" step="0.01" class="form-control" id="prix" placeholder="Entrez le prix" required>
      </div>

      <button name="submit" type="submit" class="btn btn-primary" value="produit">Ajouter le Produit</button>
    </form>
  </div>

  <!-- ========================userADD -->


  
  <div class="container mt-5">
    <h2 class="mb-4">Ajouter un Produit</h2>
    <form method="POST" action="./user/insert.php">
      <div class="mb-3">
        <label for="Nom" class="form-label">Nom </label>
        <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrez le nom" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <textarea name="email" class="form-control" id="email" rows="3" placeholder="Entrez une email" required></textarea>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">password</label>
        <input name="password" type="number" class="form-control" id="password" placeholder="Entrez le password" required>
      </div>

      <div class="mb-3">
        <label for="role" class="form-label">role</label>
        <input name="role" type="text" step="0.01" class="form-control" id="prix" placeholder="Entrez le role" required>
      </div>
      <div class="mb-3">
        <label for="status" class="form-label">status</label>
        <input name="status" type="text" step="0.01" class="form-control" id="prix" placeholder="Entrez le status" required>
      </div>

      <button name="submit" type="submit" class="btn btn-primary" value="user">Ajouter le user</button>
    </form>
  </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>



