<?php
namespace src\Config;
require_once __DIR__ . '/../../vendor/autoload.php';
use Dotenv\Dotenv;
use PDO;
use PDOException;

class Connexion {
    private static $conn;

    public static function connection() {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();

        try {
            self::$conn = new PDO(
                "mysql:host=" . $_ENV["DB_HOST"] . ";dbname=" . $_ENV["DB_NAME"],
                $_ENV["DB_USER"],
                $_ENV["DB_PASS"]
            );
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           echo "succesful";
            // return self::$conn;
        } catch (PDOException $th) {
            die("Connection failed: " . $th->getMessage());
        }

        return self::$conn;

    }

}


$db = new Connexion();
$conn = $db->connection();

