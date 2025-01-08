<?php

//link connection

session_start();

require_once("../connection/connection.php");

$Productname=$_POST["Productname"];
$productId=$_POST["productId"];
$Price=$_POST["Price"];
$image=$_POST["image"];


$SQL_CHECKOUT = "INSERT INTO cart (Productname, image, productId,Price  ) VALUES ('$Productname','$image','$productId','$Price') ";


if (mysqli_query($conn, $SQL_CHECKOUT)) {
  echo "<script> window.setTimeout(function(){ window.location.href = '../cart.php'; }, );</script>";
} else {
  echo "Error: " . $SQL_CHECKOUT . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);  //closing the connection
  
  

?>