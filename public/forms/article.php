<?php
require_once '../../vendor/autoload.php';
use src\Controller\Articles;

$categorys = Articles::select("categories" );
$tags = Articles::select("tags" );
var_dump($tags)









?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create/Edit Article</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="">
  <div class="max-w-xl mx-auto mt-12 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center mb-6">Create Article</h2>
    <form action="/submit" method="POST">
      <div class="mb-4 ">
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" id="title" name="title" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
      </div>
      <div class="mb-4">
        <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
        <input type="text" id="slug" name="slug" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
      </div>
      <div class="mb-4">
        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
        <textarea id="content" name="content" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" rows="4" required></textarea>
      </div>
      <div class="mb-4">
        <label for="excerpt" class="block text-sm font-medium text-gray-700">Excerpt</label>
        <input id="excerpt" name="excerpt" class="mt-1 block w-full p-2 border border-gray-300 rounded-md"></input>
      </div>
      <div class="mb-4">
        <label for="meta_description" class="block text-sm font-medium text-gray-700">Meta Description</label>
        <textarea id="meta_description" name="meta_description" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" rows="2"></textarea>
      </div>
      <div class="mb-4">
        <label for="featured_image" class="block text-sm font-medium text-gray-700">Featured Image</label>
        <input type="text" id="featured_image" name="featured_image" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
      </div>
      <div class="mb-4">
        <label for="Show_date" class="block text-sm font-medium text-gray-700">Show date</label>
        <input type="datetime-local" id="Show_date" name="Show_date" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
      </div>
      <div class="mb-4 hidden">
        <label for="status" class="block text-sm font-medium text-gray-700 hi">Status</label>
        <input type="text" id="status" name="status" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="draft" required>
      </div>
      <div class="mb-4">
        <label for="tags" class="block text-sm font-medium text-gray-700">Tags</label>
        <div class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
          <?php foreach($tags as $tag) :?>
          <label for="tag1" class="mr-4 text-blue-600"><?= $tag["name"]?></label>
          <input type="checkbox" id="tag2" name="tags[]" value="<?= $tag["id"] ?>" class="mr-2">
          <?php endforeach ?>
        </div>
      </div>
      <div class="mb-4">
        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
        <select id="category" name="category" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
          <?php foreach($categorys as $category)  :?>
          <option value="<?=$category["id"]?>"><?=$category["name"]?></option>
          <?php endforeach ;?>
        </select>
      </div>
     
      <div class="mb-4">
        <label for="author_id" class="block text-sm font-medium text-gray-700">Author ID</label>
        <input type="number" id="author_id" name="author_id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
      </div>
     
      <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700">Submit</button>
    </form>
  </div>
</body>
</html>
