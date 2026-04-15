<?php
session_start();
require_once 'config.php';

// Check if admin is logged in
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

// Handle logout if requested
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: homepage.php");
    exit();
}

// Handle form submission
if (isset($_POST['add_product'])) {
    // Validate inputs
    $name = trim($_POST['name']);
    $category = $_POST['category'];
    $price = floatval($_POST['price']);
    $original_price = !empty($_POST['original_price']) ? floatval($_POST['original_price']) : NULL;
    $description = trim($_POST['description']);

    $errors = [];
    if (empty($name)) $errors[] = "Product name is required.";
    if (empty($category)) $errors[] = "Category is required.";
    if ($price <= 0) $errors[] = "Price must be greater than 0.";
    if ($original_price !== NULL && $original_price <= 0) $errors[] = "Original price must be greater than 0 if provided.";

    // Handle image upload
    $image_path = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "../images/";
        $file_name = basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
        $max_size = 2 * 1024 * 1024; // 2MB

        if (!in_array($imageFileType, $allowed_types)) {
            $errors[] = "Only JPG, JPEG, PNG, and GIF files are allowed.";
        } elseif ($_FILES["image"]["size"] > $max_size) {
            $errors[] = "File size must be less than 2MB.";
        } else {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check === false) {
                $errors[] = "File is not a valid image.";
            } else {
                // Generate unique name
                $unique_name = uniqid() . '.' . $imageFileType;
                $target_file = $target_dir . $unique_name;
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $image_path = "../images/" . $unique_name;
                } else {
                    $errors[] = "Sorry, there was an error uploading your file.";
                }
            }
        }
    } else {
        $errors[] = "Product image is required.";
    }

    if (empty($errors)) {
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
    } else {
        $error_msg = implode("\\n", $errors);
        echo "<script>alert('Errors:\\n" . $error_msg . "');</script>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
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
        <a href="#stock">Stock Level</a>
        <a href="#marketplace">Orders</a>
        <a href="?logout=1">Logout</a>
        
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
            <form action="" method="POST" enctype="multipart/form-data">
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

<section class="stock" id="stock">
    <h1 class="heading">Stock Level</h1>

    <div class="date">
        <input type="date">
    </div>

    <div class="insights">
        <div class="sales">
            <span class="material-icons-sharp">analytics</span>
            <div class="middle">
                <div class="left">
                    <h3>Total Sales</h3>
                    <h1> £25,024 </h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx='38' cy='38' r='36'></circle>
                    </svg>
                    <div class="number">
                        <p>81%</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">Last 24 Hours </small>
        </div>

        <!--END OF SALES-->

        <div class="expenses">
            <span class="material-icons-sharp">bar_chart</span>
            <div class="middle">
                <div class="left">
                    <h3>Total Expenses</h3>
                    <h1> £14,160 </h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx='38' cy='38' r='36'></circle>
                    </svg>
                    <div class="number">
                        <p>62%</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">Last 24 Hours </small>
        </div>

        <!--END OF EXPENSES-->

        <div class="income">
            <span class="material-icons-sharp">stacked_line_chart</span>
            <div class="middle">
                <div class="left">
                    <h3>Total Income</h3>
                    <h1> £10,864 </h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx='38' cy='38' r='36'></circle>
                    </svg>
                    <div class="number">
                        <p>44%</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">Last 24 Hours </small>
        </div>

        <!--END OF SALES-->

    </div>


</section>


<!--Footer-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="../php/admin_dashboard.php">Add Product</a>
            <a href="#stock">Stock Level</a>
            <a href="#marketplace">Orders</a>
            <a href="?logout=1">Logout</a>
        </div>
    </div>
    <div class="credit">© 2026 GLH. All rights reserved.</div>
</section>

</body>
</html>