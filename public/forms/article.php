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
    <h2 class="text-2xl font-bold text-center mb-6">Create/Edit Article</h2>
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
        <textarea id="excerpt" name="excerpt" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" rows="2"></textarea>
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
        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
        <select id="status" name="status" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
          <option value="draft">Draft</option>
          <option value="published">Published</option>
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
