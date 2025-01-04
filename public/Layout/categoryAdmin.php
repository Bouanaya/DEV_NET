<?php
require_once '../../vendor/autoload.php';
use src\Controller\Category;
$category = new Category();
$categories = $category->getCategory();
var_dump($categories);
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
                <a href="#" class="text-white">Dashboard Admin</a>
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
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="../pages/Admin.php" class="text-white">Dashboard</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="../Layout/articleAdmin.php" class="text-white">Articles</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="../Layout/categoryAdmin.php" class="text-sky-400">Category</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="#" class="text-white">Users</a></li>
            </ul>
        </aside>
        <!-- Content -->
    <div class="block w-3/4">
        <section class="flex-1 p-6">
            <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Category</h1>
            <a href="../forms/category.php" class="bg-[#00796b] text-white p-2 rounded-md" >NEW CATEGORY</a>
            </div>
           

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Total Category</h2>
                    <p class="text-gray-700">150</p>
                </div>
              
             
                </div>
            
        </section>
<section class="flex-1 p-6">
    <h1 class="text-3xl font-bold text-gray-900 mb-4">Category Table</h1>


    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead>
                <tr class=" border-b-4">
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">ID</th>
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Title</th>
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Action</th>
                 
                    </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category) : ?>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300"><?= $category['id'] ?></td>
                        <td class="py-2 px-4 border-b border-gray-300"><?= $category['name'] ?></td>
                        <td class="py-2 px-4 border-b border-gray-300 flex space-x-4">
                            <a href="../forms/updateCategory.php?action=update&id=<?= $category['id'] ?>" class="bg-blue-400 text-white py-1 px-2 rounded hover:bg-blue-600">Edit</a>
                            <a href="../../src/Controller/Category.php?action=delete&id=<?= $category['id'] ?>" class="bg-red-400 text-white py-1 px-2 rounded hover:bg-red-600">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
</div>

</main>
</body>
</html>