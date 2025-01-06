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
        <a href='../user/update.php?userId=" . $user['userId'] . "'>Edit</a>
        <a href='./user/delete.php?userId=" . $user['userId'] . "'>Delete</a>
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
    public function updateUser() {}
}
