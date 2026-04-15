<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLH Website</title>
    <link rel="stylesheet" href="../css/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>

<?php session_start(); ?>

<!--Header-->
<header>
<!--Logo and Navigation Bar-->
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>
    <a href="user_page.php" class="logo"><img src="../images/logo.png" alt="Logo"></a>

    <nav class="navbar">
        <a href="../php/user_page.php">Home</a>
        <a href="../php/user_page.php">MarketPlace</a>
        <a href="../php/user_page.php">News</a>
        <a href="../php/user_page.php">Events</a>
        
    </nav>
    

    <div class="icons">
        <a href="cart.php" class="fas fa-shopping-cart">
            <span class="cart-count"><?php echo array_sum(array_column($_SESSION['cart'] ?? [], 'quantity')); ?></span>
        </a>
        <a href="../php/index.php" class="fas fa-user"></a>
    </div>
    
</header>

</br>
</br>
</br>
</br>

<!-- About Section -->

<section class="about" id="about">
    <h1 class="heading">Dairy</h1>

    <div class="row">
        <div class="image">
            <img src="../images/dairy.webp" alt="About Us Image">
        </div>

        <div class="content">
            <h3>Dairy Land</h3>
            <p>Discover the finest dairy products sourced from local farms. We are committed to providing high-quality, fresh dairy items to your doorstep.<br></br>
            Our products are carefully selected to ensure they meet our strict standards for taste, texture, and nutritional value. Whether you're looking for creamy milk, rich cheese, or delicious yogurt, we have a wide variety of options to satisfy your cravings.<br>
            </p>
        </div>
    </div>
</section>

<section class="marketplace" id="marketplace">

    <div class="box-container">

        <div class="box">
            <span class="discount">-50% Off</span>
            <div class="image">
            <img src="../images/cheese.webp" alt="Product Image">
        </div>
        
        <div class="content">
            <h3>Cheese</h3>
            <div class="price">£7.00<span>£14.00</span></div>
            <form action="add_to_cart.php" method="post" class="add-to-cart-form">
                <input type="hidden" name="name" value="Cheese">
                <input type="hidden" name="price" value="7.00">
                <input type="hidden" name="image" value="../images/cheese.webp">
                <div class="quantity">
                    <button type="button" class="qty-btn minus"><i class="fas fa-minus"></i></button>
                    <input type="number" name="quantity" value="1" min="1" class="qty">
                    <button type="button" class="qty-btn plus"><i class="fas fa-plus"></i></button>
                </div>
                <button type="submit" class="btn">Add to Basket</button>
            </form>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <span class="discount">-50% Off</span>
                <img src="../images/milk.png" alt="Product Image">
            </div>

        <div class="content">
            <h3>Milk</h3>
            <div class="price">£3.00<span>£6.00</span></div>
            <form action="add_to_cart.php" method="post" class="add-to-cart-form">
                <input type="hidden" name="name" value="Milk">
                <input type="hidden" name="price" value="3.00">
                <input type="hidden" name="image" value="../images/milk.png">
                <div class="quantity">
                    <button type="button" class="qty-btn minus"><i class="fas fa-minus"></i></button>
                    <input type="number" name="quantity" value="1" min="1" class="qty">
                    <button type="button" class="qty-btn plus"><i class="fas fa-plus"></i></button>
                </div>
                <button type="submit" class="btn">Add to Basket</button>
            </form>
        </div>
        </div>


        <div class="box">
            <div class="image">
                <span class="discount">-50% Off</span>
                <img src="../images/butter.jpeg" alt="Product Image">
            </div>

            <div class="content">           
                <h3>Butter</h3>
                <div class="price">£4.00<span>£8.00</span></div>
                <form action="add_to_cart.php" method="post" class="add-to-cart-form">
                    <input type="hidden" name="name" value="Butter">
                    <input type="hidden" name="price" value="4.00">
                    <input type="hidden" name="image" value="../images/butter.jpeg">
                    <div class="quantity">
                        <button type="button" class="qty-btn minus"><i class="fas fa-minus"></i></button>
                        <input type="number" name="quantity" value="1" min="1" class="qty">
                        <button type="button" class="qty-btn plus"><i class="fas fa-plus"></i></button>
                    </div>
                    <button type="submit" class="btn">Add to Basket</button>
                </form>
            </div>
        </div> 
</section>

<section class="contact" id="contact">

    <h1 class="heading">Contact Us</h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="Name" class="box">
            <input type="email" placeholder="Email" class="box">
            <input type="number" placeholder="Phone Number" class="box">
            <textarea name="" placeholder="Message" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="Send Message" class="btn">

        </form>

        <div class="image">
            <img src="../images/logo.png" alt="Contact Us Image">
    
        </div>
        
    </div>
</section>

<!--Footer-->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a href="#home">Home</a>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const qtyBtns = document.querySelectorAll('.qty-btn');
    qtyBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const qtyInput = this.parentElement.querySelector('.qty');
            let currentValue = parseInt(qtyInput.value);
            if (this.classList.contains('plus')) {
                qtyInput.value = currentValue + 1;
            } else if (this.classList.contains('minus') && currentValue > 1) {
                qtyInput.value = currentValue - 1;
            }
        });
    });
});
</script>

</body>
</html>