<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<!--Header-->
<header>
<!--Logo and Navigation Bar-->
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>
    <a href="homepage.php" class="logo"><img src="../images/logo.png" alt="Logo"></a>

    <nav class="navbar">
        <a href="../php/admin_dashboard.php">Add Product</a>
        <a href="#about">Stock Level</a>
        <a href="#marketplace">Orders</a>
        <a href="../php/homepage.php">Logout</a>
        
    </nav>
    
</header>
</br>
</br>
</br>
</br>

<section class="about" id="about">
    <h1 class="heading">Add New Product</h1>

    <div class="row">
        <div class="content">
            <form action="addproduct.php" method="POST" enctype="multipart/form-data">
                <label for="name">Product Name:</label>
                <input type="text" id="name" name="name" required class="box"><br><br>

                <label for="category">Category:</label>
                <select id="category" name="category" required class="box">
                    <option value="">Select Category</option>
                    <option value="freshproduce">Fresh Produce</option>
                    <option value="seafood">Seafood</option>
                    <option value="animalprotein">Animal Protein</option>
                    <option value="dairy">Dairy</option>
                    <option value="bakery">Bakery & Grains</option>
                    <option value="beverages">Beverages</option>
                </select><br><br>

                <label for="price">Price (£):</label>
                <input type="number" id="price" name="price" step="0.01" required class="box"><br><br>

                <label for="original_price">Original Price (£) (for discount):</label>
                <input type="number" id="original_price" name="original_price" step="0.01" class="box"><br><br>

                <label for="description">Description:</label>
                <textarea id="description" name="description" class="box" cols="30" rows="5"></textarea><br><br>

                <label for="image">Product Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required class="box"><br><br>

                <input type="submit" name="add_product" value="Add Product" class="btn">
            </form>
        </div>
    </div>
</section>

<?php
session_start();
require_once 'config.php';

// Check if admin is logged in
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

if (isset($_POST['add_product'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $original_price = $_POST['original_price'] ?: NULL;
    $description = $_POST['description'];

    // Handle image upload
    $image_path = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "../images/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image_path = "../images/" . basename($_FILES["image"]["name"]);
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "File is not an image.";
        }
    }

    // Insert into database
    $sql = "INSERT INTO products (name, category, price, original_price, description, image_path) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdsss", $name, $category, $price, $original_price, $description, $image_path);

    if ($stmt->execute()) {
        echo "<script>alert('Product added successfully!');</script>";
    } else {
        echo "<script>alert('Error adding product: " . $conn->error . "');</script>";
    }

    $stmt->close();
}

$conn->close();
?>

<!--Footer-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="../php/admin_dashboard.php">Dashboard</a>
            <a href="#about">Stock Level</a>
            <a href="#marketplace">Orders</a>
            <a href="../php/homepage.php">Logout</a>
        </div>
    </div>
    <div class="credit">© 2026 GLH. All rights reserved.</div>
</section>

</body>
</html>