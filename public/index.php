<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/tailwind.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>

  <title>DevTo</title>
  <style>
    body {
      background-color: #f0f2f5;
    }

    .header a {
      color: white;
    }
    .header a:hover {
      color: #ddd;
    }
    .article-card {
      background-color: white;
      transition: transform 0.2s;
    }
    .article-card:hover {
      transform: translateY(-5px);
    }
    .article-card a {
      color: #4267B2;
    }
    .article-card a:hover {
      color: #365899;
    }
  </style>
</head>
<body>
  <!-- Header Section -->
  <header class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white animation-slideDown">
    <div class="container mx-auto flex justify-between items-center p-4">
      <!-- Logo -->
      <div class="text-2xl font-bold animation-fadeIn">
        <a href="index.php">Dev.to</a>
      </div>
      <!-- Navigation -->
      <nav class="flex items-center space-x-4 animation-fadeIn">
        <!-- Sign In and Sign Up -->
        <div class="flex space-x-4">
          <?php
          if(isset($_SESSION['role']) ){
            echo '<a href="../src/auth/signOut.php"  class="bg-red-400 text-white px-3 py-1 rounded hover:bg-red-600">Sign Out</a>';
          }
          else{
            echo  '<a href="../public/Layout/signIn.php" class="bg-gray-200  px-3 py-1 rounded hover:bg-gray-300">Sign In</a>';
            echo '<a href="../public/Layout/signUp.php" class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Sign Up</a>';
          }
          ?>
         
        </div>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto p-4">
    <!-- Center Article Section -->
    <section class="p-4">
      <!-- Latest Articles Section -->
      <section class="text-center my-8">
        <h1 class="text-5xl font-bold text-blue-600 mb-4">
          Welcome to Dev.to
        </h1>
        <p class="text-lg text-gray-700">
          A platform for developers to share articles, explore content, and collaborate.
        </p>
      </section>
      <section class="my-8">
        <div class="flex justify-between">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">
            Latest Articles
          </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
          <!-- Article Card 1 -->
            <div class="article-card p-4 rounded shadow-lg ">
            <h3 class="text-xl font-bold text-gray-800">Article Title 1</h3>
            <p class="text-gray-600">A brief description of the article...</p>
            <p class="text-gray-600">Excerpt: This is a short excerpt of the article...</p>
            <p class="text-gray-600">Meta Description: This is a meta description for SEO...</p>
            <p class="text-gray-600">Category ID: 1</p>
            <p class="text-gray-600">Featured Image: <img src="path/to/image1.jpg" alt="Featured Image 1"></p>
            <p class="text-gray-600">Status: Published</p>
            <p class="text-gray-600">Scheduled Date: 2023-10-01 10:00:00</p>
            <p class="text-gray-600">Author ID: 1</p>
            <p class="text-gray-600">Views: 123</p>
            <p class="text-gray-600">Published on: 2023-10-01</p>
            <a href="#" class="text-blue-600 hover:text-blue-700">Read more</a>
          </div>
          <!-- Repeat for other articles... -->
        </div>
      </section>
    </section>
  </main>
<!-- Footer Section -->
<footer class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white py-4">
  <div class="container mx-auto text-center">
    <p>&copy; 2023 DevTo. All rights reserved.</p>
   
  </div>
</footer>
</body>
</html>
