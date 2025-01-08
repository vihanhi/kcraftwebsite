<?php

require_once("connection/connection.php");
session_start();

$Phonenumber= $_SESSION["Phonenumber"];

$SQL_SELECT_PRODUCT = "SELECT * FROM cart WHERE   Phonenumber = '$Phonenumber'";

$RESULT_SELECT_PRODUCT = mysqli_query($conn, $SQL_SELECT_PRODUCT);

$COUNT = mysqli_num_rows($RESULT_SELECT_PRODUCT);

$row = mysqli_fetch_assoc($RESULT_SELECT_PRODUCT);

$Price = $row["Price"];
$Productname = $row["Productname"];
?>

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
    <h1>Checkout</h1>

    <div class="admin-form">
        <form id="workshopForm">
            <label for="title">Product Name</label>
            <input type="text" id="title" value="<?php echo ($Productname); ?>">

            <label for="date">Date</label>
            <input type="date" id="date" required>

            <label for="price">Price (Rs.)</label>
            <input type="number" id="price" value="<?php echo ($Price); ?>">

            <label for="paymenttype">Payment Type</label>
            <input type="text" id="paymenttype" placeholder="Enter Payment type Card Or Cash" required>

            <button type="button" onclick="paymentSuccess()">Proceed Payment</button> 
        </form>
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

<script src="js/checkout.js"></script>
<!-- for social media icons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
// Function to show payment success message and redirect to cart page
function paymentSuccess() {
    alert("Payment Successful!");
    window.location.href = "product.php"; // Redirect to the cart page
}
</script>

</body>
</html>