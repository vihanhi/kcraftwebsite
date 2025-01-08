<?php
require_once("../connection/connection.php");
session_start();

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Retrieve data from the POST request
$productId = $_POST['productId'];
$price = $_POST['price'];
$paymentType = $_POST['paymenttype'];
$date = $_POST['date'];

// Sanitize the inputs to prevent SQL injection
$productId = mysqli_real_escape_string($conn, $productId);
$price = mysqli_real_escape_string($conn, $price);
$paymentType = mysqli_real_escape_string($conn, $paymentType);
$date = mysqli_real_escape_string($conn, $date);

// Print the query for debugging
$SQL_INSERT_PAYMENT = "INSERT INTO payment (productId, price, paymentType, date) 
                       VALUES ('$productId', '$price', '$paymentType', '$date')";

// Check if query executes successfully
if (mysqli_query($conn, $SQL_INSERT_PAYMENT)) {
    header("Location: ../cart.php?payment_success=true");
    exit;
} else {
    // Output the error message if insert fails
    echo "Error: " . $SQL_INSERT_PAYMENT . "<br>" . mysqli_error($conn);
    exit;
}
?>
