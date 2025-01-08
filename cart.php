<?php                   
session_start();
require_once("connection/connection.php");


$Phonenumber = $_SESSION["Phonenumber"];
// echo $phone_session;

$row_SQL_SELECT_ALL_CART = "SELECT * FROM cart WHERE Phonenumber = '$Phonenumber'";
$result_ALL_CART = mysqli_query($conn, $row_SQL_SELECT_ALL_CART);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kasun's Artisanal Store</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/mainlogo.jpg" />
    <link rel="stylesheet" href="css/ind.css">
    <link rel="stylesheet" href="css/ca.css">
    <link rel="stylesheet" href="css/cart1.css">
    
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

    <div class="cart-container">
        <!-- Cart Header -->
        <div class="cart-header">
            <h1>Your Shopping Cart</h1>
            <a href="product.php">Continue Shopping</a>
        </div>
        
        <div class="currency-selector">
            <label for="currency">Select Currency:</label>
            <select id="currency" onchange="updateCurrency()">
                <option value="LKR">LKR (Sri Lankan Rupee)</option>
                <option value="USD">USD (US Dollar)</option>
            </select>
        </div>

        <table class="cart-table">
            <thead>
                <tr>
                    <th>Select</th>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                
            <?php
              if (mysqli_num_rows($result_ALL_CART) > 0) {
                // output data of each row
              while($row_SQL_SELECT_ALL_CART = mysqli_fetch_assoc($result_ALL_CART)) {
                                  
                             
            ?>

                <tr>
                    <td><input type="checkbox" class="select-item" onchange="calculateTotal()"></td>
                    <td><img src="image/<?php echo $row_SQL_SELECT_ALL_CART['image']; ?>" alt="Product Image"></td>
                    <td><?php echo($row_SQL_SELECT_ALL_CART["Productname"]);?></td>
                    <td class="price" data-lkr="2500" data-usd="7.80"><?php echo($row_SQL_SELECT_ALL_CART["Price"]);?></td>
                    <td><input type="number" class="quantity-input" value="1" min="1" onchange="updateTotal(this)"></td>
                    <td class="item-total"><?php echo($row_SQL_SELECT_ALL_CART["Price"]);?></td>
                    <td>
                      <a href="handler/removecarthandler.php ?cartid=<?php echo($row_SQL_SELECT_ALL_CART["cartid"]);?>"><button class="delete-btn" onclick="deleteItem(this)">Delete</button></a>
                    </td>
                </tr>
                
            <?php    }
						  


						  }else {
						  echo "0 results";
						  }
						?>

            </tbody>
        </table>

        <div class="summary-section">
            <h3>Order Summary</h3>
            <p>Selected Items: <span id="selected-count">0</span></p>
            <p>Total Amount: <span id="total-amount">LKR 0</span></p>
            <button type="submit" class="checkout-btn" onclick="paymentSuccess()">Proceed to Checkout</button>
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

<script src="js/cart1.js"></script>
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