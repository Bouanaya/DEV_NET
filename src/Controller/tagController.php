<?php
namespace src\Controller;
use src\Model\Tag;
require_once '../../vendor/autoload.php';


class tagController{

   

    public function ControlCategory(){
         $category = new Tag();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['submit'])) {
               $category->addtags();
            } 
            else if(isset($_POST['update'])){ {
               $category->updatetags();
            echo "<script>alert('Tag updated successfully')</script>";
            
            }}  
            
            }  
            else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
             
                if (isset($_GET['action']) && $_GET['action'] == 'delete') {
                   $category->deletetags();
                
                }
            
               
            }
            

        
    }

}

$tag = new tagController();
$tag->ControlCategory();






