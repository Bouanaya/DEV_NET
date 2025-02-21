<?php
require_once '../../vendor/autoload.php';
use src\Model\Article;
$redall = Article::readAll();

var_dump($redall)


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
                <a href="../pages/Admin.php" class="text-white">Dashboard Admin</a>
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
        <aside class="bg-gray-900  min-h-screen p-4">
            <ul class="space-y-2 mt-4">
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="../pages/Admin.php" class="text-white">Dashboard</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="../Layout/articleAdmin.php" class="text-sky-400">Articles</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="../Layout/categoryAdmin.php" class="text-white">Category</a></li>
            </ul>
        </aside>
        <!-- Content -->
    <div class="block w-3/4">
        <section class="flex-1 p-6">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Articles</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-[#B1F0F7] p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Total Articles</h2>
                    <p class="text-gray-700">150</p>
                </div>
              
             
                </div>
            
        </section>
<section class=" py-6 px-2">
    <h1 class="text-3xl font-bold text-gray-900 mb-4">Articles Table</h1>
    <div class=" overflow-x-scroll ">
        <table class="w-full bg-white text-sm  ">
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
                    <th class="py-2 px-1 border-b-2 border-gray-300 text-left leading-tight">views</th>
                    
                    
                  
            </thead>
            <tbody>
                <tr>
                <td class="py-2 px-4 border-b border-gray-300">1</td>
                <td class="py-2 px-4 border-b border-gray-300">introduction-to-php</td>
                <td class="py-2 px-4 border-b border-gray-300">This is a comprehensive guide to PHP.</td>
                <td class="py-2 px-4 border-b border-gray-300">100</td>
                 <td class="py-2 px-4 border-b border-gray-300">2023-10-01 12:00:00</td>
                 <td class="py-2 px-4 border-b border-gray-300">1</td>
                 <td class="py-2 px-4 border-b border-gray-300">2023-10-01</td>
                 <td class="py-2 px-4 border-b border-gray-300">Published</td>
                 <td class="py-2 px-4 border-b border-gray-300">php-guide.jpg</td>
                 <td class="py-2 px-4 border-b border-gray-300">1</td>
                 <td class="py-2 px-4 border-b border-gray-300">Learn the basics of PHP programming.</td>
                 <td class="py-2 px-4 border-b border-gray-300">Guide to PHP</td>
                    <td class="py-2 px-4 border-b border-gray-300">2023-10-01</td>
                </tr>
               
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</section>
</div>

</main>
</body>
</html>