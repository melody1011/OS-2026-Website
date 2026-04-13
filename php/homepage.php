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
        <a href ="#news">News</a>
        <a href="#events">Events</a>
        
    </nav>

    <div class="icons">
        <a href="../php/cart.php" class="fas fa-shopping-cart"></a>
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
            <h3>Our Mission</h3>
            <p>At Greenfield Local Hub, our mission is to create a vibrant and sustainable local economy by connecting consumers with local producers and businesses. We strive to promote the benefits of shopping locally, supporting small businesses, and fostering a sense of community. Our platform provides a convenient and accessible way for residents to discover and purchase products and services from their local area, while also encouraging economic growth and environmental sustainability.</p>
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
            <a href="../php/freshproduce.php" class="btn">Learn more</a>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../images/seafood.jpg" alt="Product Image">
            </div>

        <div class="content">
            <h3>Seafood Produce</h3>
            <a href="../php/seafood.php" class="btn">Learn More</a>
        </div>
        </div>


        <div class="box">
            <div class="image">
                <img src="../images/animalprotein.webp" alt="Product Image">
            </div>

            <div class="content">           
                <h3>Animal Protein</h3>
            <a href="../php/animalprotein.php" class="btn">Learn More</a>
        </div>
        </div> 

        <div class="box">
            <div class="image">
                <img src="../images/beverages.webp" alt="Product Image">
            </div>

            <div class="content">
            <h3>Beverages</h3>
            <a href="../php/beverages.php" class="btn">Learn More</a>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../images/bakery.webp" alt="Product Image">
            </div>

            <div class="content">
            <h3>Bakery &  Grains</h3>
            <a href="../php/bakery.php" class="btn">Learn More</a>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../images/dairy.webp" alt="Product Image">
            </div>

            <div class="content">
            <h3>Dairy</h3>
            <a href="../php/dairy.php" class="btn">Learn More</a>
        </div>

    </div>
</section>

<!--News Section-->

<section class="news" id="news">
    <h1 class="heading">News of the Week</h1>
    
    <div class="box-container">

        <div class="box">
        <div class="content">
            <h3>15% Discount on ALL products</h3>
            <p> Limited time offer, use it while you still can!</p>
        </div>
        </div>

        <div class="box">
        <div class="content">
            <h3>Free Shipping on Orders Over £50</h3>
            <p> Take this opprotunity, shipping is on us!</p>
        </div>

        </div>
    
        </div>
   

</section>

<section class="events" id="events">
    <h1 class="heading">Events Of the Week</h1>

    <div class="box-container">

        <div class="box">

        <div class="content">
            <h3>No Current Events</h3>
            <p> Check back soon for updates!</p>
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