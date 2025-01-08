<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kasun's Artisanal Store</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/mainlogo.jpg" />
    <link rel="stylesheet" href="css/ind.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/gallary.css">
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

  <header>
        <h1>Gallery</h1>
        <p>Explore the creativity behind our products and workshops.</p>
    </header>

    <section class="gallery-container">
        <div class="gallery-item" onclick="openModal('img1')">
            <img src="image/wood1.jpeg" alt="Product 1">
            <div class="overlay">
                <h2>Product 1</h2>
            </div>
        </div>
        <div class="gallery-item" onclick="openModal('img2')">
            <img src="image/wood1.jpeg" alt="Product 2">
            <div class="overlay">
                <h2>Product 2</h2>
            </div>
        </div>
        <div class="gallery-item" onclick="openModal('img3')">
            <img src="image/wood1.jpeg" alt="Workshop 1">
            <div class="overlay">
                <h2>Workshop 1</h2>
            </div>
        </div>
        <div class="gallery-item" onclick="openModal('img4')">
            <img src="image/wood1.jpeg" alt="Workshop 2">
            <div class="overlay">
                <h2>Workshop 2</h2>
            </div>
        </div>
        <div class="gallery-item" onclick="openModal('img4')">
            <img src="image/wood1.jpeg" alt="Workshop 2">
            <div class="overlay">
                <h2>Workshop 2</h2>
            </div>
        </div>
        <!-- Add more gallery items as needed -->
    </section>

    
    <!-- Modal for full-screen image view -->
    <div class="modal" id="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            <img id="modal-img" src="" alt="Full Image">
        </div>
    </div>
    
 
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

<script src="js/gallary.js"></script>
<!-- for social media icons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



</body>
</html>