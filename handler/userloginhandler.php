<?php

//link connection
require_once("../connection/connection.php");

$Password=$_POST["Password"];//inizizlizeing variable $username and code name ["username"]
$Phonenumber=$_POST["Phonenumber"];


$SQL_USER_LOGIN = "SELECT * FROM user WHERE Phonenumber ='$Phonenumber'";
$result=mysqli_query($conn, $SQL_USER_LOGIN);


if (mysqli_num_rows($result)>0) {

  $row = mysqli_fetch_assoc($result);
  $hashedPassword = $row["Password"];

// verify password
  if($hashedPassword == $Password){
  session_start();
  $_SESSION["Phonenumber"] = $Phonenumber;
  echo "<script>alert('Login Successfull'); window.setTimeout(function(){ window.location.href = '../index.php'; }, );</script>";

  exit;
 } else{
  echo "<script>alert('Incorrect Password'); window.setTimeout(function(){ window.location.href = '../index.php'; }, );</script>";
  exit;
 }

 } else {
 echo "<script>alert('This User Not Found'); window.setTimeout(function(){ window.location.href = '../register.php'; }, );</script>";
 exit;
}

mysqli_close($conn);

  
  

?>