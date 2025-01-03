<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create/Edit Article</title>
    <style>
        body {
            background-color: #e0f7fa;
        }
        .containers {
            max-width:400px;
            margin: 2rem auto;
            padding: 1.5rem;
            background-color: #ffffff;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .title {
            font-size: 1.875rem;
            font-weight: 700;
            color: #0277bd;
            margin-bottom: 1.5rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .label {
            display: block;
            color: #0277bd;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .input, .textarea, .select {
            width: 90%;
            padding: 0.5rem 1rem;
            border: 1px solid #0288d1;
            border-radius: 0.5rem;
            outline: none;
        }
        .input:focus, .textarea:focus, .select:focus {
            border-color: #01579b;
            box-shadow: 0 0 0 2px rgba(1, 87, 155, 0.5);
        }
        .button {
            padding: 0.5rem 1.5rem;
            background-color: #0288d1;
            color: #ffffff;
            font-weight: 700;
            border-radius: 0.5rem;
            cursor: pointer;
            border: none;
        }
        .button:hover {
            background-color: #0277bd;
        }
        .button:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(1, 87, 155, 0.5);
        }
        .flex-end {
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>
<body>
    <section class="containers">
        <h2 class="title">Create/Edit Article</h2>
        <form action="#" method="POST" class="space-y-6">
          <div class="form-group">
            <label for="title" class="label">Title</label>
            <input type="text" id="title" name="title" class="input" required>
          </div>
          <div class="form-group">
            <label for="slug" class="label">Slug</label>
            <input type="text" id="slug" name="slug" class="input" required>
          </div>
          <div class="form-group">
            <label for="content" class="label">Content</label>
            <textarea id="content" name="content" rows="10" class="textarea" required></textarea>
          </div>
          <div class="form-group">
            <label for="excerpt" class="label">Excerpt</label>
            <textarea id="excerpt" name="excerpt" rows="3" class="textarea"></textarea>
          </div>
          <div class="form-group">
            <label for="meta_description" class="label">Meta Description</label>
            <input type="text" id="meta_description" name="meta_description" class="input">
          </div>
          <div class="form-group">
            <label for="category_id" class="label">Category</label>
            <select id="category_id" name="category_id" class="select">
              <option value="1">Category 1</option>
              <option value="2">Category 2</option>
              <option value="3">Category 3</option>
              <!-- Add more categories as needed -->
            </select>
          </div>
          <div class="flex-end">
            <button type="submit" class="button">Submit</button>
          </div>
        </form>
    </section>
</body>
</html>