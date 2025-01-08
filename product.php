<?php

require_once("connection/connection.php");


session_start();

$SQL = "SELECT * FROM product WHERE status = 'Active'";

//excute code
$result  = mysqli_query($conn, $SQL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kasun's Artisanal Store</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/mainlogo.jpg" />
    <link rel="stylesheet" href="css/ind.css">
    <link rel="stylesheet" href="css/proo.css">
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


<main class="main-container">
    <h1 class="our-products-heading">Our Products</h1>

    <section class="products-grid" action="handler/carthandler.php" method="POST">
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $productId = $row['productId'];
                $productName = $row['Productname'];
                $productDesc = $row['description'];
                $productPrice = $row['Price'];
                $productImage = $row['image'];
        ?>
                <div class="product-card">
                    <a href="detail.php?productId=<?php echo $productId; ?>" class="product-link">
                        <img src="image/<?php echo $row['image']; ?>" class="product-image">
                        <div class="product-info">
                            <h3 class="product-title"><?php echo $row['Productname']; ?></h3>
                            <p class="product-description"><?php echo $row['description']; ?></p>
                            <p class="product-price">LKR <?php echo $row['Price']; ?></p>
                        </div>
                    </a>
                </div>
        <?php
            }
        } else {
            echo "<p class='no-products'>No products available at the moment.</p>";
        }
        ?>
    </section>
</main>

<?php
mysqli_close($conn);
?>

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

<script src="js/product.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>