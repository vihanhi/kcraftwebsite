<?php

require_once("../connection/connection.php");


$Fristname = $_POST["Fristname"];//inizizlizeing variable $fname and code name $_POST["fname"]
$Lastname = $_POST["Lastname"];
$password = $_POST["password"];
$Phonenumber = $_POST["Phonenumber"];

//table name
$SQL_USER_REGISTATION = "SELECT * FROM user WHERE Phonenumber = '$Phonenumber'";
$RESULT_USER_REGISTATION = mysqli_query($conn, $SQL_USER_REGISTATION);

//insert data
if (mysqli_num_rows($RESULT_USER_REGISTATION)>0) {

    echo "<script> alert('This Phone Number Already Use')window.setTimeout(function(){window.location.href='../registerworkshop.php');</script>";
    
    exit;

  } else {
    $SQL_USER_REGISTATION ="INSERT INTO user (Fristname, Lastname, password, Phonenumber) VALUES ('$Fristname', '$Lastname', '$password', '$Phonenumber')";

    if (mysqli_query($conn, $SQL_USER_REGISTATION)){

      echo "<script> alert('Account Created Successfuly. Checkout Please!'); window.setTimeout(function(){ window.location.href = '../workshopcheckout.php';},);</script>";

        exit;

    }else{

    echo "Error: " . $SQL_USER_REGISTATION ."<br>" .mysqli_error($conn);

    }
  }
  
  mysqli_close($conn);
  
  //connect to dashboard

?>