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


<!--Header-->
<header>
<!--Logo and Navigation Bar-->
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>
    <a href="homepage.php" class="logo"><img src="../images/logo.png" alt="Logo"></a>

    <nav class="navbar">
        <a href="../php/homepage.php">Home</a>
        <a href="../php/homepage.php">About</a>
        <a href="../php/homepage.php">MarketPlace</a>
        <a href="../php/homepage.php">News</a>
        <a href="../php/homepage.php">Events</a>
        
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="../php/index.php" class="fas fa-user"></a>
    </div>
    
</header>

</br>
</br>
</br>
</br>

<!-- About Section -->

<section class="about" id="about">
    <h1 class="heading">Fresh Produce</h1>

    <div class="row">
        <div class="image">
            <img src="../images/freshproduce.webp" alt="About Us Image">
        </div>

        <div class="content">
            <h3>Healthy & Fresh</h3>
            <p>Our fresh produce is sourced locally and delivered to your doorstep, ensuring the highest quality and freshness. We are committed to providing nutritious options that support a healthy lifestyle.<br>
                Our aim is to make it easy for you to access fresh fruits and vegetables, while also supporting local farmers and reducing our carbon footprint. With our convenient online platform, you can enjoy the benefits of fresh produce without leaving your home. Join us in promoting a healthier lifestyle and a more sustainable future by choosing our fresh produce today.</p>
            </p>
        </div>
    </div>
</section>

<section class="marketplace" id="marketplace">

    <div class="box-container">

        <div class="box">
            <span class="discount">-50% Off</span>
            <div class="image">
            <img src="../images/corn.webp" alt="Product Image">
        </div>
        
        <div class="content">
            <h3>Fresh Corn</h3>
            <div class="price">£7.00<span>£14.00</span></div>
            <a href="#" class="btn">Buy Now</a>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <span class="discount">-50% Off</span>
                <img src="../images/watermelon.webp" alt="Product Image">
            </div>

        <div class="content">
            <h3>Watermelon</h3>
            <div class="price">£9.00<span>£18.00</span></div>
            <a href="#" class="btn">Learn More</a>
        </div>
        </div>


        <div class="box">
            <div class="image">
                <span class="discount">-50% Off</span>
                <img src="../images/tomato.webp" alt="Product Image">
            </div>

            <div class="content">           
                <h3>Tomatoes</h3>
                <div class="price">£5.00<span>£10.00</span></div>
            <a href="#" class="btn">Learn More</a>
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