<?php
namespace src\Controller;
use src\Model\Crud;
require_once '../../vendor/autoload.php';


class Tag
{
    private $table = 'tags';
    public function addtags()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['tags'];
            Crud::insert($this->table, ['name' => $name]);
            header('Location: ../../public/layout/tagAuthor.php');
           
          
        }
    

    }

    public function gettags()
    {
        return  Crud::select($this->table);
    }

   public function updatetags()
    {

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $tags = Crud::select($this->table, '*', 'id=:id', ['id' => $id]);
            return $tags;
        }

        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['tags'];
            echo $name;
            echo $id;
            Crud::update($this->table, ['name' => $name], 'id=:id', ['id' => $id]);
            header('Location: ../../public/layout/tagAuthor.php');
        }
      
    }

    public function deletetags()
    {
        echo $_SERVER['REQUEST_METHOD'];
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            Crud::delete($this->table, 'id=:id', ['id' => $id]);
            header('Location: ../../public/layout/tagAuthor.php');
        }
    }

}

$category = new Tag();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['submit'])) {
    $category->addtags();
} 
else if(isset($_POST['update'])){ {
    $category->updatetags();
// echo "<script>alert('Tag updated successfully')</script>";

    

}}  

}  
else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
 
    if (isset($_GET['action']) && $_GET['action'] == 'delete') {
        $category->deletetags();
    
    }

   
}
