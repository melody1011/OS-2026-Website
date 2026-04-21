<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="../css/cart.css">
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

</br>
</br>
</br>
</br>

<!--SHOPPING CART SECTION-->
<section class="about" id="about">
    <h1 class="heading">Shopping Cart</h1>
<!-- Cart Items -->
    <div class="row">
        <div class="content">
            <?php if (empty($cart)): ?>
                <p class="empty-cart-message">Your cart is empty.</p>
                <a href="../php/user_page.php" class="btn">Continue Shopping</a>
            <?php else: ?>
                <div class="cart-items"><!-- Display cart items -->
                    <?php foreach ($cart as $index => $item): ?>
                        <div class="cart-item">
                            <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>" width="100">
                            <div class="item-details">
                                <h3><?php echo $item['name']; ?></h3><!-- Display item name -->
                                <p>Price: £<?php echo number_format($item['price'], 2); ?></p><!-- Display item price -->
                                <p>Quantity: <?php echo $item['quantity']; ?></p><!-- Display item quantity -->
                                <p>Subtotal: £<?php echo number_format($item['price'] * $item['quantity'], 2); ?></p><!-- Display item subtotal -->
                            </div>
                            <form action="update_cart.php" method="post" style="display: inline;"><!-- Form to remove item from cart -->
                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                <button type="submit" name="action" value="remove" class="btn">Remove</button>
                            </form>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="cart-total">
                    <h3>Total: £<?php echo number_format($total, 2); ?></h3><!-- Display total price -->   
                    <a href="../php/payment.php" class="btn">Proceed to Checkout</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!--Footer-->
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#marketplace">Marketplace</a>
            <a href="#news">News</a>
            <a href="#events">Events</a>
            <a href="#">Basket</a>
            <a href="../php/index.php">Account</a>
        </div>

        <div class="box">
            <h3>Legal & Trust</h3>
            <a href="#">Terms and Conditions</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Shipping Policy</a>
            <a href="#">Cookies</a>
        </div>

        <div class="box">
            <h3>Contact Us</h3>
            <a href="mailto:GLH@gmail.com">GLH@gmail.com</a>
            <a href="tel:07564293927">07564293927</a>
            <a href="#">Facebook: @GLH_UK</a>
            <a href="#">Instagram: @GLH_UK</a>
        </div>
    </div>

    <div class="credit">© 2026 GLH. All rights reserved.</div>
</section>


</body>
</html>