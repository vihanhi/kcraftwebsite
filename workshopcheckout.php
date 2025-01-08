<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kasun's Artisanal Store</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/mainlogo.jpg" />
    <link rel="stylesheet" href="css/ind.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/workshop.css">
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

  <div class="container">
    <h1>Craft Workshops</h1>
    <div class="workshop-list" id="workshopList">
        <!-- Workshops will be loaded here dynamically -->
    </div>

    <!-- Admin Form for Kasun to Add/Update Workshops -->
    <div class="admin-form">
        <form id="workshopForm">
            <label for="title">Workshop Title</label>
            <input type="text" id="title" placeholder="Enter workshop title" required>

            <label for="date">Date</label>
            <input type="date" id="date" required>

            <label for="price">Price (Rs.)</label>
            <input type="text" id="price" placeholder="Enter price" required>

            <label for="paymenttype">Payment type</label>
            <input type="text" id="paymenttype" placeholder="Enter Payment type" required>

            <a href="workshop.php"><button type="submit" onclick="addWorkshop()">Add Workshop</button></a>
        </form>
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

<script type="module" src="js/workshop1.js"></script>
<!-- for social media icons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



</body>
</html>