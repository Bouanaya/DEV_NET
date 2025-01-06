<?php

namespace src\Model;
use PDO;
use src\Config\Connexion;
require_once '../../vendor/autoload.php';
class Crud
{

    // INSERT
    public static function  insert($table, $data) {
        // var_dump($data); 
        // echo $table;

        $conn =  Connexion::connection();  
        $columns = implode(", ", array_keys($data));
        echo $columns;
        $placeholders = ":" . implode(", :", array_keys($data));
        $query = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $stmt =$conn->prepare($query);
        return $stmt->execute($data);
    }

     // SELECT with pins params
    public static function  select($table, $columns = "*", $conditions = null, $params = []) {
        $conn = Connexion::connection();
        $query = "SELECT $columns FROM $table";
        if ($conditions) {
            $query .= " WHERE $conditions";
        }

        $stmt = $conn->prepare($query);
        $stmt->execute($params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // UPDATE
    static function update($table, $data, $conditions, $params) {
        $conn = Connexion::connection();
        $columns = '';
        foreach ($data as $key => $value) {
            $columns .= $key . "=:" . $key . ", ";
        }
        $columns = rtrim($columns, ", ");
        $query = "UPDATE $table SET $columns WHERE $conditions";
        $stmt = $conn->prepare($query);
        foreach ($data as $key => &$value) {
            $params[$key] = $value;
        }
        return $stmt->execute($params);
    }


    // DELETE
    static function delete($table, $conditions, $params) {
        $conn = Connexion::connection();
        $query = "DELETE FROM $table WHERE $conditions";
        $stmt = $conn->prepare($query);
        return $stmt->execute($params);
    }

}


