<?php
namespace src\Model;
require '../../vendor/autoload.php';
use src\Config\Connexion;
use PDO;
use PDOException;

class User {



    public function signup($username, $email, $password) {
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users (username, email, password_hash) VALUES (:username, :email, :password_hash)";
$count =  Connexion::connection();
        $stmt = $count->prepare($query);
        try {
            $stmt->execute([
                ':username' => $username,
                ':email' => $email,
                ':password_hash' => $passwordHash,
            ]);
            return true;
        } catch (PDOException $e) {
            if ($e->getCode() === '23000') {
                return "Le nom d'utilisateur ou l'email est déjà utilisé.";
            }
            return $e->getMessage();
        }
    }

    public function signin($email, $password) {
        $count =  Connexion::connection();
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $count->prepare($query);
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_hash'])) {
            return $user;
        }
        return false;
    }
}
