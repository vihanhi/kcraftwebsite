<?php

require_once("connection/connection.php");
session_start();

$productId = $_GET["productId"];

$SQL_SELECT_PRODUCT = "SELECT * FROM product WHERE  productId =$productId";

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
    <link rel="stylesheet" href="css/detail.css">
    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

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
</br>

<div class="product-container" action="handler/handlercart.php" method="POST">
    <!-- Image Gallery -->
    <div class="image-gallery">
        <img src="image/<?php echo $row['image']; ?>" alt="Product Image" class="main-image" id="mainImage">
        <div class="thumbnail-row">
            <img src="image/<?php echo $row['image']; ?>" alt="Thumbnail" class="thumbnail" onclick="changeImage(this.src)">
            <img src="image/<?php echo $row['image']; ?>" alt="Thumbnail" class="thumbnail" onclick="changeImage(this.src)">
            <img src="image/<?php echo $row['image']; ?>" alt="Thumbnail" class="thumbnail" onclick="changeImage(this.src)">
        </div>
    </div>

    <!-- Product Details -->
    <div class="product-details">
        <h1 class="product-title"><?php echo htmlspecialchars($row['Productname']); ?></h1>
        <p class="product-price">LKR <?php echo htmlspecialchars($row['Price']); ?></p>
        <p class="product-description"><?php echo htmlspecialchars($row['description']); ?></p>

        <!-- Quantity -->
        <div class="quantity-container">
            <label>Quantity:</label>
            <button type="button" onclick="decreaseQuantity()">-</button>
            <input type="text" id="quantity" name="quantity" value="1" min="1">
            <button type="button" onclick="increaseQuantity()">+</button>
        </div>

        <!-- Action Buttons -->
        <div class="action-buttons">
            <a href="checkout.php?productId=<?php echo ($productId) ?>"><button class="add-to-cart">Buy Now</button></a>
            <form action="handler/handlercart.php" method="POST" style="display:inline;">
    <input type="hidden" name="productId" value="<?php echo $productId; ?>">
    <input type="hidden" name="quantity" id="formQuantity" value="1">
    <button type="submit" class="add-to-cart">Add to Cart</button>
</form>

        </div>
    </div>
</div>

</br>
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

<script src="js/cart.js"></script>

<script>
function decreaseQuantity() {
    var qty = parseInt(document.getElementById('quantity').value);
    if (qty > 1) {
        document.getElementById('quantity').value = qty - 1;
    }
}

function increaseQuantity() {
    var qty = parseInt(document.getElementById('quantity').value);
    document.getElementById('quantity').value = qty + 1;
}

function showLoginModal() {
    document.getElementById('loginModal').style.display = 'block';
}

function hideLoginModal() {
    document.getElementById('loginModal').style.display = 'none';
}


</script>

<!-- Add your existing scripts -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/detail.js"></script>

</body>
</html>