<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="../css/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
$total = 0;
foreach ($cart as $item) {
    $total += $item['price'] * $item['quantity'];
}
?>

<!--Header-->
<header>
<!--Logo and Navigation Bar-->
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>
    <a href="homepage.php" class="logo"><img src="../images/logo.png" alt="Logo"></a>

    <nav class="navbar">
        <a href="../php/homepage.php">Home</a>
        <a href="#about">About</a>
        <a href="#marketplace">MarketPlace</a>
        <a href="#news">News</a>
        <a href="#events">Events</a>
        
    </nav>

    <div class="icons">
        <a href="cart.php" class="fas fa-shopping-cart">
            <span class="cart-count"><?php echo array_sum(array_column($cart, 'quantity')); ?></span><!-- Display total quantity in cart -->
        </a>
        <a href="../php/index.php" class="fas fa-user"></a>
    </div>
    
</header>

<!-- Checkout Section -->
<section class="about" id="about">
    <h1 class="heading">Checkout</h1>

    <div class="row">
        <div class="content">
            <h3>Total: £<?php echo number_format($total, 2); ?></h3><!-- Display total price -->
            <p>Thank you for your order!</p>
            <a href="homepage.php" class="btn">Back to Home</a>
        </div>
    </div>
</section>

<!--Footer-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="../php/homepage.php">Home</a>
            <a href="#about">About</a>
            <a href="#marketplace">Marketplace</a>
            <a href="#news">News</a>
            <a href="#events">Events</a>
            <a href="cart.php">Basket</a>
            <a href="../php/index.php">Account</a>
        </div>
    </div>
    <div class="credit">© 2026 GLH. All rights reserved.</div>
</section>

</body>
</html>