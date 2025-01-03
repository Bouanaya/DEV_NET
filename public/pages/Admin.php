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
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="#" class="text-sky-400">Dashboard</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="../Layout/articleAdmin.php" class="text-white">Articles</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="../Layout/categoryAdmin.php" class="text-white">Category</a></li>
                <li class="px-4 py-2 hover:bg-gray-800 rounded"><a href="#" class="text-white">Users</a></li>
            </ul>
        </aside>
        <!-- Content -->
    <div class="block w-3/4">
        <section class="flex-1 p-6">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Dashboard</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Total Articles</h2>
                    <p class="text-gray-700">150</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Total Users</h2>
                    <p class="text-gray-700">75</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Pending Reviews</h2>
                    <p class="text-gray-700">5</p>
                </div>
            
        </section>
<section class="flex-1 p-6">
    <h1 class="text-3xl font-bold text-gray-900 mb-4">Articles Table</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">ID</th>
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Title</th>
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Author</th>
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Date</th>
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4 border-b border-gray-300">1</td>
                    <td class="py-2 px-4 border-b border-gray-300">Introduction to PHP</td>
                    <td class="py-2 px-4 border-b border-gray-300">John Doe</td>
                    <td class="py-2 px-4 border-b border-gray-300">2023-10-01</td>
                    <td class="py-2 px-4 border-b border-gray-300">Published</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b border-gray-300">2</td>
                    <td class="py-2 px-4 border-b border-gray-300">Advanced JavaScript</td>
                    <td class="py-2 px-4 border-b border-gray-300">Jane Smith</td>
                    <td class="py-2 px-4 border-b border-gray-300">2023-10-02</td>
                    <td class="py-2 px-4 border-b border-gray-300">Draft</td>
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