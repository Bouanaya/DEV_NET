<?php
namespace src\Model;

require_once '../../vendor/autoload.php';
use src\Config\Connexion;

class Article
{

  static public function delete($table, $id)
  {
      $conn = Connexion::connection(); 
      $sql = "DELETE FROM `$table` WHERE `id` = ?"; 
      $stmt = $conn->prepare($sql); 
      if ($stmt) {
          $stmt->bindValue(1, $id, \PDO::PARAM_INT);
          if ($stmt->execute()) {
              header("location: ../../public/Layout/articleAuthor.php");
          } 
  }
}
  
    static function select($table, $columns = "*", $conditions = null, $params = []) {
        $conn = Connexion::connection();
        $query = "SELECT $columns FROM $table";
        if ($conditions) {
            $query .= " WHERE $conditions";
        }
        $stmt = $conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    static function  readAll() {
    
        $conn = Connexion::connection();
          $stmt =$conn->query("
              SELECT a.*, c.name AS category_name, u.username AS author_name, GROUP_CONCAT(t.name) AS tags
              FROM articles a
              LEFT JOIN categories c ON a.category_id = c.id
              LEFT JOIN users u ON a.author_id = u.id
              LEFT JOIN article_tags at ON a.id = at.article_id
              LEFT JOIN tags t ON at.tag_id = t.id
              GROUP BY a.id
              ORDER BY a.created_at DESC
          ");
          return $stmt->fetchAll(\PDO::FETCH_ASSOC);
      
    }

    static function insert($table, $data, $tags) {
        $conn = Connexion::connection();
        try {
  
            $conn->beginTransaction();

            $slug = $data['slug'];
            $query = "SELECT COUNT(*) FROM $table WHERE slug = :slug";
            $stmt = $conn->prepare($query);
            $stmt->execute([':slug' => $slug]);
            $slugCount = $stmt->fetchColumn();

            if ($slugCount > 0) {
                $data['slug'] = $slug . '-' . rand(1000, 9999); // Append a random number
            }

            $columns = implode(", ", array_keys($data));
            $placeholders = implode(", ", array_map(fn($key) => ":$key", array_keys($data)));
            $query = "INSERT INTO $table ($columns) VALUES ($placeholders)";
            $stmt = $conn->prepare($query);

            $params = [];
            foreach ($data as $key => $value) {
                $params[":$key"] = $value;
            }

            $stmt->execute($params);

            $articleId = $conn->lastInsertId();

            if (isset($tags) && is_array($tags)) {
                foreach ($tags as $tagId) {
                    $query = "INSERT INTO article_tags (article_id, tag_id) VALUES (:article_id, :tag_id)";
                    $stmt = $conn->prepare($query);
                    $stmt->execute([':article_id' => $articleId, ':tag_id' => $tagId]);

                    header("location:../../public/Layout/articleAuthor.php");
                }
            }

            $conn->commit();
        } catch (\PDOException $e) {
            $conn->rollBack();
            echo "Error: " . $e->getMessage();
        }
    }


     public static function deletetagsArticle($table, $id)
    {
        $conn = Connexion::connection(); 
        $sql = "DELETE FROM `$table` WHERE `article_id` = ?"; 
        $stmt = $conn->prepare($sql); 
        if ($stmt) {
            $stmt->bindValue(1, $id, \PDO::PARAM_INT);
            if ($stmt->execute()) {
                echo 'delete succesfull';
            } 
    }
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


public static function insertags($tags, $id){
    if (isset($tags) && is_array($tags)) {
        foreach ($tags as $tagId) {
            $conn = Connexion::connection();
            $query = "INSERT INTO article_tags (article_id, tag_id) VALUES (:article_id, :tag_id)";
            $stmt = $conn->prepare($query);
            $stmt->execute([':article_id' => $id, ':tag_id' => $tagId]);

            header("location:../../public/Layout/articleAuthor.php");
        }
    }

}
  }