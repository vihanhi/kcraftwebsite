<?php

session_start();
//link connection
require_once("..//connection/connection.php");

$cartid= $_GET["cartid"];

echo ($cartid);

$SQL_DELETE_DISPLAYORDER ="DELETE FROM cart WHERE cartid ='$cartid'";

if (mysqli_query($conn, $SQL_DELETE_DISPLAYORDER)) {
    header("Location:../cart.php");
    exit;
  } else {
    header("Location:../cart.php?error=$error");
    exit;
  }
  

?>