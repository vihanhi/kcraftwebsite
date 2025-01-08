<?php
require_once("../connection/connection.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the product ID and quantity from the form
    $productId = $_POST['productId'];
    $quantity = $_POST['quantity'];

    // Get the product details from the database
    $SQL_SELECT_PRODUCT = "SELECT * FROM product WHERE productId = $productId";
    $RESULT_SELECT_PRODUCT = mysqli_query($conn, $SQL_SELECT_PRODUCT);
    $row = mysqli_fetch_assoc($RESULT_SELECT_PRODUCT);

    if ($row) {
        $productName = $row['Productname'];
        $price = $row['Price'];
        $image = $row['image'];

        // Check if the product is already in the cart
        $SQL_CHECK_CART = "SELECT * FROM cart WHERE productId = $productId";
        $RESULT_CHECK_CART = mysqli_query($conn, $SQL_CHECK_CART);

        if (mysqli_num_rows($RESULT_CHECK_CART) > 0) {
            // Update the quantity if the product already exists in the cart
            $SQL_UPDATE_CART = "UPDATE cart SET quantity = quantity + $quantity WHERE productId = $productId";
            mysqli_query($conn, $SQL_UPDATE_CART);
        } else {
            // Insert the new product into the cart
            $SQL_INSERT_CART = "INSERT INTO cart (productId, Productname, Price, quantity, image) 
                                VALUES ($productId, '$productName', $price, $quantity, '$image')";
            mysqli_query($conn, $SQL_INSERT_CART);
        }

        // Redirect back to the cart page
        header("Location: ../cart.php");
        exit;
    } else {
        echo "Product not found.";
    }
} else {
    echo "Invalid request.";
}
?>
