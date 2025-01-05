<?php
namespace src\Controller;
require_once '../../vendor/autoload.php';
use src\Config\Connexion;



class Articles
{
  static function  select($table, $columns = "*", $conditions = null, $params = []) {
    $conn = Connexion::connection();
    $query = "SELECT $columns FROM $table";
    if ($conditions) {
        $query .= " WHERE $conditions";
    }
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);

}
}



  
