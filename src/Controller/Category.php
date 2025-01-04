<?php
namespace src\Controller;
use src\Model\Crud;
require_once '../../vendor/autoload.php';


class Category
{
    private $table = 'categories';
    public function addCategory()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['category'];
            Crud::insert($this->table, ['name' => $name]);
            header('Location: ../../public/layout/categoryAdmin.php');
          
        }
    

    }

    public function getCategory()
    {
        return  Crud::select($this->table);
    }

   public function updateCategory()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $category = Crud::select($this->table, '*', 'id=:id', ['id' => $id]);
            return $category;
        }
        // code here
    }

}

$Tag = new Category();
if (isset($_GET['id'])) {
    $Tag->updateCategory();
}
else if(isset($_POST['submit'])){
    $Tag->addCategory();
}