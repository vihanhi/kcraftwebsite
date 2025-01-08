<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kasun's Artisanal Store</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/mainlogo.jpg" />
    <link rel="stylesheet" href="css/ind.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/workshop1.css">
</head>
<body>

<!-- navigation bar -->
<header class="header">
    <h1 class="logo"><a href="#">Kasun's Artisanal Store</a></h1>
    <ul class="main-nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="product.php">PRODUCTS</a></li>
        <li><a href="workshop.php">WORKSHOP</a></li>
        <li><a href="gallary.php">GALLARY</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
        <li><a href="about.php">ABOUT US</a></li>
        <li><a href="login.php">LOGIN</a></li>
        <li><a href="register.php">REGISTER</a></li>
        <li class="cart-icon">
            <a href="cart.php">
                <ion-icon name="cart-outline"></ion-icon>
            </a>
        </li>
    </ul>
</header>
  <!-- navigation bar end -->


<!-- Workshops Section -->
<section class="workshops">
    <h2>Our Craft Workshops</h2>
    <div class="workshop-list">

        <!-- Workshop 1 -->
        <div class="workshop-item">
            <img src="image/ceramic1.jpeg" alt="Handmade Pottery Workshop">
            <h3>Handmade Pottery</h3>
            <p>Date: 15th February 2024</p>
            <p>Price: Rs. 2,500</p>
            <p>Learn the art of creating beautiful pottery by hand. Our expert instructors will guide you through every step of the process.</p>
            <a href="registerworkshop.php" class="register-button">Register Now</a>
        </div>

        <!-- Workshop 2 -->
        <div class="workshop-item">
            <img src="image/ceramic2.jpeg" alt="Natural Skincare Workshop">
            <h3>Natural Skincare</h3>
            <p>Date: 22nd February 2024</p>
            <p>Price: Rs. 3,000</p>
            <p>Discover the secrets of creating your own skincare products using natural ingredients. Perfect for beginners!</p>
            <a href="registerworkshop.php" class="register-button">Register Now</a>
        </div>

        <!-- Workshop 3 -->
        <div class="workshop-item">
            <img src="image/ceramic3.jpeg" alt="Silk Scarves Workshop">
            <h3>Silk Scarves</h3>
            <p>Date: 5th March 2024</p>
            <p>Price: Rs. 3,500</p>
            <p>Learn the delicate art of painting on silk to create beautiful scarves. Unleash your creativity!</p>
            <a href="registerworkshop.php" class="register-button">Register Now</a>
        </div>

        <!-- Workshop 4 -->
        <div class="workshop-item">
            <img src="image/ceramic4.jpeg" alt="Wooden Décor Workshop">
            <h3>Wooden Décor</h3>
            <p>Date: 12th March 2024</p>
            <p>Price: Rs. 4,000</p>
            <p>Get hands-on experience in creating stunning wooden décor pieces. Learn carpentry and painting techniques.</p>
            <a href="registerworkshop.php" class="register-button">Register Now</a>
        </div>

        <!-- Workshop 5 -->
        <div class="workshop-item">
            <img src="image/ceramic6.jpeg" alt="Candle Making Workshop">
            <h3>Candle Making</h3>
            <p>Date: 19th March 2024</p>
            <p>Price: Rs. 2,000</p>
            <p>Learn the process of making your own beautiful candles with essential oils and natural ingredients.</p>
            <a href="registerworkshop.php" class="register-button">Register Now</a>
        </div>

        <!-- Workshop 6 -->
        <div class="workshop-item">
            <img src="image/ceramic8.jpeg" alt="Leather Craft Workshop">
            <h3>Leather Craft</h3>
            <p>Date: 26th March 2024</p>
            <p>Price: Rs. 3,200</p>
            <p>Master the craft of working with leather and make your own wallets, belts, and accessories.</p>
            <a href="registerworkshop.php" class="register-button">Register Now</a>
        </div>

    </div>
</section>
  
<!-- footer start -->
  <footer>
  <div class="footer-container">
    <div class="footer-logo">
      <h2>KASUN'S ARTISANAL STORE</h2>
    </div>
    <div class="footer-social">
      <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
      <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
      <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
      <a href="#"><ion-icon name="logo-google"></ion-icon></a>
      <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
    </div>
    <div class="footer-copyright">
      <p>© 2024 Kasun's Artisanal Store. All rights reserved.</p>
    </div>
  </div>
</footer>

<script src="js/workshop.js"></script>
<!-- for social media icons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



</body>
</html>