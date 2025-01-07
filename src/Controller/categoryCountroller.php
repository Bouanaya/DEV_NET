<?php

namespace src\Controller;
require_once '../../vendor/autoload.php';
use src\Model\Category;



class CategoryCountroller{

    

    public function Category(){
$category = new Category();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['submit'])) {
    $name = $_POST["category"];
    $category->addCategory($name);
 
} 
else if(isset($_POST['update'])){ {
    return $category->updateCategory();
    

}

}  
}  
else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
 
    if (isset($_GET['action']) && $_GET['action'] == 'delete') {
        $category->deleteCategory();
    
    }

   
}

    }

    public function getCategory(){
        $category = new Category();
      return  $category->getCategory();

    }

    public function selectcategory ()  {
        $selCategory = new Category();
       return $selCategory->updateCategory();

       
    }

}

$category = new CategoryCountroller();
$category->Category();





