<?php
require_once '../../vendor/autoload.php';

use src\Controller\Articles;
use src\Model\Article;
$article = new Article();
$articles = $article->readAll();










?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Articles Dashboard</title>
</head>
<body class="bg-gray-100">
    <!-- Header Section -->
    <header class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="text-2xl font-bold">
                <a href="#" class="text-white">Dashboard Author</a>
            </div>
            <!-- Sign Out -->
            <div class="flex space-x-4">
                <a href="../index.html" class="hover:text-yellow-400">Sign Out</a>
            </div>
        </div>
    </header>
    <!-- Main Section -->
    <main class="flex ">
        <!-- Sidebar -->
        <aside class="bg-gray-900  min-h-screen p-4">
            <ul class="space-y-2 mt-4">
            <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="../../public/pages/Author.php" class="text-white">Dashboard</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="../Layout/articleAuthor.php" class="text-sky-400">Articles</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="../Layout/tagAuthor.php" class="text-white">tags</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="../Layout/categoryAdmin.php" class="text-white">Category</a></li>


            </ul>
        </aside>
        <!-- Content -->
    <div class="block w-full overflow-scroll">
        <section class="flex-1 p-6">
            <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Article</h1>
            <a href="../forms/article.php" class="bg-[#257fc4] text-white p-2 rounded-md" >NEW ARTICL</a>
            </div>
           

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-[#B1F0F7] p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Total Article</h2>

                    <p class="text-gray-700">150</p>
                </div>
              
             
                </div>
            
        </section>
<section class="flex-1 p-6">
    <h1 class="text-3xl font-bold text-gray-900 mb-4">Article Table</h1>


    <div class=" scroll-smooth">
    <table class="w-full bg-white text-sm table-auto border-collapse  ">
            <thead>
                <tr class="bg-[#B1F0F7]">
                    <th class="py-2 px-1 border border-gray-400 text-left leading-tight">ID</th>
                    <th class="py-2 px-1 border border-gray-400 text-left leading-tight">Title</th>
                    <th class="py-2 px-1 border border-gray-400 text-left leading-tight">content</th>
                    <th class="py-2 px-1 border border-gray-400 text-left leading-tight">excerpt</th>
                    <th class="py-2 px-1 border border-gray-400 text-left leading-tight">meta_description</th>
                    <th class="py-2 px-1 border border-gray-400 text-left leading-tight">featured_image</th>
                    <th class="py-2 px-1 border border-gray-400 text-left leading-tight">tags</th>
                    <th class="py-2 px-4 border border-gray-400 text-left leading-tight">Action</th>
                    
                  
            </thead>
            <tbody>
                <?php foreach($articles as $article):?>
                <tr>
                <td class="border border-gray-300 px-4 py-2 relative group"><?= $article['id'] ?></td>
                <td class="border border-gray-300 px-4 py-2 relative group"><?= $article['title'] ?></td>
                <td class="border border-gray-300 px-4 py-2 relative group"><?= $article['content'] ?></td>
                <td class="py-2 px-4 border-b truncate border-gray-300"><?= $article['excerpt'] ?></td>
      
                <td class="border border-gray-300 px-4 py-2 relative group">
          <span class="truncate block w-32">Ce...</span>
          <span class="absolute left-0 top-full mt-1 hidden group-hover:block bg-white text-black border border-gray-300 rounded-md shadow-lg p-2 z-10">
          <?= $article['meta_description'] ?>
          </span>
        </td>
            
                <td class="border border-gray-300 px-4 py-2 relative group"><img src="<?= $article['featured_image'] ?>" alt="img"></td>
                <td class="border border-gray-300 px-4 py-2 relative group"><?=$article['tags']?></td>
                <td class="py-2 px-4  border-b  border-gray-300 flex space-x-4">
                <a href="../forms/updateAricle.php?action=update&id=<?= $article['id'] ?>" class="bg-blue-400 text-white py-1 px-2 rounded hover:bg-blue-600">Edit</a>
                <a href="../../src/Controller/Articles.php?id=<?=$article['id']?>" class="bg-red-400 text-white py-1 px-2 rounded hover:bg-red-600">Delete</a>
                </td>

                </tr>
               <?php endforeach ;?>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</section>
</div>

</main>
</body>
</html>
