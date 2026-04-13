<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
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
            <span class="cart-count"><?php echo array_sum(array_column($cart, 'quantity')); ?></span>
        </a>
        <a href="../php/index.php" class="fas fa-user"></a>
    </div>
    
</header>

</br>
</br>
</br>
</br>

<section class="about" id="about">
    <h1 class="heading">Shopping Cart</h1>

    <div class="row">
        <div class="content">
            <?php if (empty($cart)): ?>
                <p>Your cart is empty.</p>
                <a href="freshproduce.php" class="btn">Continue Shopping</a>
            <?php else: ?>
                <div class="cart-items">
                    <?php foreach ($cart as $index => $item): ?>
                        <div class="cart-item">
                            <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>" width="100">
                            <div class="item-details">
                                <h3><?php echo $item['name']; ?></h3>
                                <p>Price: £<?php echo number_format($item['price'], 2); ?></p>
                                <p>Quantity: <?php echo $item['quantity']; ?></p>
                                <p>Subtotal: £<?php echo number_format($item['price'] * $item['quantity'], 2); ?></p>
                            </div>
                            <form action="update_cart.php" method="post" style="display: inline;">
                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                <button type="submit" name="action" value="remove" class="btn">Remove</button>
                            </form>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="cart-total">
                    <h3>Total: £<?php echo number_format($total, 2); ?></h3>
                    <a href="checkout.php" class="btn">Proceed to Checkout</a>
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