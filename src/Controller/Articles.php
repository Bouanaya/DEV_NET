<?php
namespace src\Controller;
require_once '../../vendor/autoload.php';

use src\Model\Article;

class Articles
{
  static $table = "articles"; 
  static $title;
  static $slug;
  static $content;
  static $excerpt;
  static $meta_description;
  static $featured_image;
  static $Show_date;
  static $status ; 
  static $tags;
  static $category;
  static $author_id;


  

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

      self::$title = $_POST['title'] ;
      self::$slug = $_POST['slug'] ;
      self::$content = $_POST['content'] ;
      self::$excerpt = $_POST['excerpt'] ;
      self::$meta_description = $_POST['meta_description'] ;
      self::$featured_image = $_POST['featured_image'] ;
      self::$Show_date = $_POST['Show_date'] ;
      self::$status = $_POST['status'] ;
      self::$tags = $_POST['tags'] ;
      self::$category = $_POST['category'] ;
      self::$author_id = $_POST['author_id'] ;

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
      
      Article::insert(self::$table , $data, $tages  );
      // header("location: ../../../../public/index.html?hello");



    }
    else if(($_SERVER['REQUEST_METHOD'] === 'GET')){
    $id= $_GET['id'];
echo  $id;
Article::delete(self::$table , $id);

    }
  }
}


  $add = new Articles();
  $add->addData(); 















  
