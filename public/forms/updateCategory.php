<?php
require_once '../../vendor/autoload.php';
use src\Controller\CategoryCountroller;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $category = new CategoryCountroller();
    $categories = $category->selectcategory();

    


//     // echo "<script>alert('Category updated successfully')</script>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        .form-container h2 {
            margin-bottom: 25px;
            color: #00796b;
            text-align: center;
        }
        .form-container label {
            display: block;
            margin-bottom: 8px;
            color: #00796b;
        }
        .form-container input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #b2dfdb;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-container input[type="submit"] {
            background-color: #00796b;
            color: #ffffff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        .form-container input[type="submit"]:hover {
            background-color: #004d40;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Category</h2>
        <form action="../../src/Controller/CategoryCountroller.php"method="post">
            <?php foreach ($categories as $category) : ?>
                <input type="hidden" name="id" value="<?= $category['id'] ?>">
                <label for="category">Update Category:</label>
                <input type="text" id="category" name="category" value="<?= $category['name'] ?>" required>
                <input type="submit" name="update" value="Update">
            <?php endforeach; ?>
        </form>
    </div>
</body>
</html>