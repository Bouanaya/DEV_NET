<?php
require_once '../../vendor/autoload.php';
$table = "articles";
use src\Controller\Articles;
$article = new Articles();
var_dump($article->select($table));
$articles = $article->select("articles")


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
    <main class="flex">
        <!-- Sidebar -->
        <aside class="bg-gray-900 w-64 min-h-screen p-4">
            <ul class="space-y-2 mt-4">
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="../pages/Author.php" class="text-white">Dashboard</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="#" class=" text-sky-400">Articles</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="../Layout/tagAdmin.php" class="text-white">Tag</a></li>

            </ul>
        </aside>
        <!-- Content -->
    <div class="block w-3/4">
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


    <div class="overflow-x-auto scroll-smooth">
    <table class="w-full bg-white text-sm table-auto border-collapse  ">
            <thead>
                <tr class="bg-[#B1F0F7]">
                    <th class="py-2 px-1 border-b-2 border-gray-300 text-left leading-tight">ID</th>
                    <th class="py-2 px-1 border-b-2 border-gray-300 text-left leading-tight">Title</th>
                    <th class="py-2 px-1 border-b-2 border-gray-300 text-left leading-tight">slug</th>
                    <th class="py-2 px-1 border-b-2 border-gray-300 text-left leading-tight">content</th>
                    <th class="py-2 px-1 border-b-2 border-gray-300 text-left leading-tight">excerpt</th>
                    <th class="py-2 px-1 border-b-2 border-gray-300 text-left leading-tight">meta_description</th>
                    <th class="py-2 px-1 border-b-2 border-gray-300 text-left leading-tight">category_id</th>
                    <th class="py-2 px-1 border-b-2 border-gray-300 text-left leading-tight">featured_image</th>
                    <th class="py-2 px-1 border-b-2 border-gray-300 text-left leading-tight">status</th>
                    <th class="py-2 px-1 border-b-2 border-gray-300 text-left leading-tight">scheduled_date</th>
                    <th class="py-2 px-1 border-b-2 border-gray-300 text-left leading-tight">author_id</th>
                    <th class="py-2 px-1 border-b-2 border-gray-300 text-left leading-tight">updated_at</th>
                    <th class="py-2 px-1 border-b-2 border-gray-300 text-left leading-tight">views</th>
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Action</th>
                    
                  
            </thead>
            <tbody>
                <?php foreach($articles as $article):?>
                <tr>
                <td class="py-2 px-4  border-b truncate border-gray-300"><?= $article['id'] ?></td>
                <td class="py-2 px-4  border-b truncate border-gray-300"><?= $article['title'] ?></td>
                <td class="py-2 px-4  border-b truncate border-gray-300"><?= $article['slug'] ?></td>
                <td class="py-2 px-4  border-b truncate border-gray-300"><?= $article['content'] ?></td>
                 <td class="py-2 px-4 border-b truncate border-gray-300"><?= $article['excerpt'] ?></td>
                 <td class="py-2 px-4 truncate  border-b border-gray-300"><?= $article['meta_description'] ?></td>
                 <td class="py-2 px-4  border-b truncate border-gray-300"><?= $article['category_id'] ?></td>
                 <td class="py-2 px-4  border-b truncate border-gray-300"><?= $article['featured_image'] ?></td>
                 <td class="py-2 px-4  border-b truncate border-gray-300"><?= $article['scheduled_date'] ?></td>
                 <td class="py-2 px-4  border-b truncate border-gray-300"><?= $article['author_id'] ?></td>
                 <td class="py-2 px-4  border-b truncate border-gray-300"><?= $article['content'] ?></td>
                 <td class="py-2 px-4  border-b truncate border-gray-300"><?= $article['updated_at'] ?></td>
                <td class="py-2 px-4  border-b truncate border-gray-300"><?= $article['views'] ?></td>
                <td class="py-2 px-4  border-b   border-gray-300 flex space-x-4">
                <a href="../forms/updateCategory.php?action=update&id=<?= $article['id'] ?>" class="bg-blue-400 text-white py-1 px-2 rounded hover:bg-blue-600">Edit</a>
                <a href="../../src/Controller/Category.php?action=delete&id=<?= $article['id'] ?>" class="bg-red-400 text-white py-1 px-2 rounded hover:bg-red-600">Delete</a>
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
