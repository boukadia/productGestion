<?php
// require_once "database.php";


class user
{
    private $nom;
    private $email;
    private $password;
    private $role;
    private $status;
    private $userId;

    public function addUser($nom, $email, $password, $role, $status)
    {
        $connect = Database::getConnection();

        $this->nom = $nom;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->status = $status;
        $stmt = $connect->prepare("insert into users(nom,email,password,role,status) values(?,?,?,?,?)");
        $stmt->execute([$nom, $email, $password, $role, $status]);
    }
    public function affichage()
    {
        $connect = Database::getConnection();
        $stmt = $connect->prepare("select * from users");
        $stmt->execute();

        while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tbody>
        <tr>
        <td>" . htmlspecialchars($user['nom']) . "</td>
        <td>" . htmlspecialchars($user['email']) . "</td>
        <td>" . htmlspecialchars($user['role']) . "</td>
        <td>" . htmlspecialchars($user['status']) . "</td>
        <td>
        <a href=./user/update.php?userId=" . $user['userId'] . ">Edit</a>
        <a href=./user/delete.php?userId=" . $user['userId'] . ">Delete</a>
        </td>
        </tr>
        </tbody>";
        }
    }
    public function deleteUser($userId) {
        $connect=Database::getConnection();
        $stmt=$connect->prepare("delete  from  users where userId=?");
        $stmt->execute([$userId]);
    }
    public function updateUser($userId) {
        $connect=database::getConnection();
        $stmt=$connect->prepare("select * from users where userId=?");
        $stmt->execute([$userId]);
        $user=$stmt->fetch(PDO::FETCH_ASSOC);
        $nom=$user['nom'];
        $role=$user['role'];
        $email=$user['email'];
        $status=$user['status'];
        echo$email;
        

echo "
        <div class='container mt-5'>
        <h2 class='mb-4'>Ajouter user</h2>
        <form method='POST' action=''>
          <div class='mb-3'>
            <label for='Nom' class='form-label'>Nom </label>
            <input value='$nom' type='text' name='nom' class='form-control' id='nom' placeholder='Entrez le nom' required>
          </div>
    
          <div class='mb-3'>
            <label for='email' class='form-label'>email</label>
            <input value='$email' name='email' class='form-control' id='email' rows='3' placeholder='Entrez une email' required>
          </div>
    
          <div class='mb-3'>
            <label for='password' class='form-label'>role</label>
            <input value='$role' name='password' type='text' class='form-control' id='password' placeholder='Entrez le role' required>
          </div>
    
          
          <div class='mb-3'>
            <label for='status' class='form-label'>status</label>
            <input value='$status' name='status' type='text' step='0.01' class='form-control' id='prix' placeholder='Entrez le status' required>
          </div>
    
          <button name='submit' type='submit' class='btn btn-primary' value='user'>Ajouter le user</button>
        </form>
      </div>'
    ";

       
    }
}
