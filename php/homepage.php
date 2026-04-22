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
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#marketplace">MarketPlace</a>
        <a href ="#news">Delivery Info</a>
        <a href="#events">Reviews</a>
        
    </nav>

    <div class="icons">
        <a href="../php/index.php" class="fas fa-shopping-cart">
            <span class="cart-count"><?php echo array_sum(array_column($_SESSION['cart'] ?? [], 'quantity')); ?></span>
        </a>
        <a href="../php/index.php" class="fas fa-user"></a>
    </div>
    
</header>

<!--Home Section-->
<section class="home" id="home">
    <div class="content">
        <h3>Welcome To Greenfield Local Hub!</h3>
        <a href="../php/index.php" class="btn">Join Now</a>

    </div>

</section>

<!-- About Section -->

<section class="about" id="about">
    <h1 class="heading">About Us</h1>

    <div class="row">
        <div class="image">
            <img src="../images/aboutusimg.webp" alt="About Us Image">
        </div>

        <div class="content">
            <h3>Greenfield Local Hub</h3>
</br><p>Who are We?</p>
            <p>At Greenfield Local Hub, our mission is to create a vibrant and sustainable local economy by connecting consumers with local producers and businesses. We strive to promote the benefits of shopping locally, supporting small businesses, and fostering a sense of community. Our platform provides a convenient and accessible way for residents to discover and purchase products and services from their local area, while also encouraging economic growth and environmental sustainability.
</br>          </br>Community Support: </br> 
                - Buying local food supports small-scale agriculture and keeps money in the local economy.
</br> - Eating locally sourced produce aligns your diet with what's in season, offering a variety of flavours and nutrients throughout the year.
</br>         - By choosing fresh produce, you not only benefit your health but also cintribute to a more sustainable and resilient food system.
</br>          </br>Be ready to check out our producers!
            </p>
        </div>
    </div>
</section>

<!-- Marketplace Section -->

<section class="marketplace" id="marketplace">
    <h1 class="heading">Our Different Producers</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
            <img src="../images/freshproduce.webp" alt="Product Image">
        </div>
        
        <div class="content">
            <h3>Fresh Produce</h3>
            <a href="../php/index.php" class="btn">Learn more</a>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../images/seafood.jpg" alt="Product Image">
            </div>

        <div class="content">
            <h3>Seafood Produce</h3>
            <a href="../php/index.php" class="btn">Learn More</a>
        </div>
        </div>


        <div class="box">
            <div class="image">
                <img src="../images/animalprotein.webp" alt="Product Image">
            </div>

            <div class="content">           
                <h3>Animal Protein</h3>
            <a href="../php/index.php" class="btn">Learn More</a>
        </div>
        </div> 

        <div class="box">
            <div class="image">
                <img src="../images/beverages.webp" alt="Product Image">
            </div>

            <div class="content">
            <h3>Beverages</h3>
            <a href="../php/index.php" class="btn">Learn More</a>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../images/bakery.webp" alt="Product Image">
            </div>

            <div class="content">
            <h3>Bakery &  Grains</h3>
            <a href="../php/index.php" class="btn">Learn More</a>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../images/dairy.webp" alt="Product Image">
            </div>

            <div class="content">
            <h3>Dairy</h3>
            <a href="../php/index.php" class="btn">Learn More</a>
        </div>

    </div>
</section>

<!--News Section-->

<section class="news" id="news">
    <h1 class="heading">Delivery Information</h1>
    
    <div class="box-container">

        <div class="box">
        <div class="content">
            <h3>Want Delivery? Register now to deliver products to your home</h3>
            <p> Any enquiries, please call or email us!</p>
        </div>
        </div>

        <div class="box">
        <div class="content">
            <h3>Want to pick up your order? You are more than welcome to</h3>
            <p> Any enquiries, please call or email us!</p>
        </div>
        </div>

        <div class="box">
            <div class="content">
            <h3>Home delivery Procedure</h3>
            <img src="../images/delivery.png">
        </div>
        </div>

        <div class="box">
            <div class="content">
            <h3>Pick-up Procedure</h3>
            <img src="../images/pickup.png">
        </div>
        </div>

    </div>
   

</section>

<section class="marketplace" id="events">
    <h1 class="heading">Reviews</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
            <img src="../images/review1.png" alt="Product Image">
        </div>

        </div>

        <div class="box">
            <div class="image">
                <img src="../images/review2.png" alt="Product Image">
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../images/review3.png" alt="Product Image">
            </div>
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
            <a href="#news">Delivery Info</a>
            <a href="#events">Reviews</a>
            <a href="../php/index.php">Basket</a>
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

<!-- Cookie Consent Banner -->
<div id="cookie-consent" class="cookie-banner">
    <div class="cookie-content">
        <i class="fas fa-cookie-bite"></i>
        <p>We use cookies to improve your experience. By continuing, you agree to our use of cookies.</br>This also agrees to our Terms And Conditions.</p>
        <button id="accept-cookies" class="btn">Accept</button>
        <button id="reject-cookies" class="btn">Reject</button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cookieBanner = document.getElementById('cookie-consent');
    const acceptBtn = document.getElementById('accept-cookies');

    // Show the banner on page load
    cookieBanner.style.display = 'block';

    // Hide the banner when accept is clicked
    acceptBtn.addEventListener('click', function() {
        cookieBanner.style.display = 'none';
    });
});
</script>

</body>
</html>