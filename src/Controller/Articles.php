<?php
namespace src\Controller;
require_once '../../vendor/autoload.php';

use src\Model\Article;

class Articles
{
  static $tablearicle = "articles"; 
  static $tableTags = "article_tags"; 


  

  public function updateData(){
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  $data = [
    "title"=>$_POST['title'],
    "slug" => $_POST['slug'],
    "content" =>$_POST['content'],
    "excerpt" => $_POST['excerpt'],
    "meta_description" => $_POST['meta_description'],
    "featured_image" => $_POST['featured_image'],
    "scheduled_date" => $_POST['Show_date'],
    "status" => $_POST['status'] ,
    "category_id" => $_POST['category'],
    "author_id" =>  $_POST['author_id']
    
  ];

  # code...
}

    
  } 

  public function addData()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $data = [
        "title"=>$_POST['title'],
        "slug" => $_POST['slug'],
        "content" =>$_POST['content'],
        "excerpt" => $_POST['excerpt'],
        "meta_description" => $_POST['meta_description'],
        "featured_image" => $_POST['featured_image'],
        "scheduled_date" => $_POST['Show_date'],
        "status" => $_POST['status'] ,
        "category_id" => $_POST['category'],
        "author_id" =>  $_POST['author_id']
        
      ];
      $tages = $_POST['tags'];
      

      
      if (isset($_POST['submit'])) {
        Article::insert(self::$tablearicle , $data, $tages  );
      }
      else if(isset($_POST['update'])){
        // var_dump($_POST["id"]);
        // var_dump($data ) ;
        // var_dump($tages);
        $id = $_POST["id"];
        Article::deletetagsArticle(Articles::$tableTags,$id);


      }
  
  
      // header("location: ../../../../public/index.html?hello");



    }
    else if(($_SERVER['REQUEST_METHOD'] === 'GET')){
    $id= $_GET['id'];
echo  $id;
Article::delete(self::$tablearicle , $id);

    }
  }
}


  $add = new Articles();
  $add->addData(); 

 














  
