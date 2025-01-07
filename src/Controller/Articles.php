<?php
namespace src\Controller;
require_once '../../vendor/autoload.php';
use src\Model\Article;

class Articles
{
  public static $tablearicle = "articles"; 
  public static $tableTags = "article_tags"; 

  public  function slugify($text, string $divider = '-')
  {
 
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, $divider);
    $text = preg_replace('~-+~', $divider, $text);
    $text = strtolower($text);
    if (empty($text)) {
      return 'n-a';
    }
  
    return $text;
  }

  

  public function addData()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
 
     
      $data = [
        "title"=>$_POST['title'],
        "slug" => $this->slugify($_POST['title']) ,
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
        $id = $_POST["id"];
        Article::update(Articles::$tablearicle,$data,"id = $id",[]);
        Article::deletetagsArticle(Articles::$tableTags,$id);
        Article::insertags($tages, $id);
        // header("location: ../../public/Layout/articleAuthor.php");

      }
    }
    else if(($_SERVER['REQUEST_METHOD'] === 'GET')){
    $id= $_GET['id'];
Article::delete(self::$tablearicle , $id);

    }
  }
}


  $add = new Articles();
  $add->addData(); 

 
 














  
