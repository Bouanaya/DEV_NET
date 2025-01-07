<?php

namespace src\Model;
use src\Model\Crud;
require_once '../../vendor/autoload.php';


class Category
{
    private $table = 'categories';
    private $name = 'name';
    public function addCategory($name)
    {
       
            Crud::insert($this->table, ['name' => $name]);
            header('Location: ../../public/layout/categoryAdmin.php');
          
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

        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['category'];
            Crud::update($this->table, ['name' => $name], 'id=:id', ['id' => $id]);
            header('Location: ../../public/layout/categoryAdmin.php');
        }
      
    }

    public function deleteCategory()
    {
        echo $_SERVER['REQUEST_METHOD'];
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            Crud::delete($this->table, 'id=:id', ['id' => $id]);
            header('Location: ../../public/layout/categoryAdmin.php');
        }
    }

}