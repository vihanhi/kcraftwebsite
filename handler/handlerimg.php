<?php

session_start();
//link connection
require_once("../connection/connection.php");

//vallidation


$Productname = $_POST["Productname"];
$productId = $_POST["productId"];
$Catagory = $_POST["Catagory"];
$status = $_POST["status"];
$date = $_POST["date"];
$description = $_POST["description"];
$Price = $_POST["Price"];



//to where
$target_dir = "../image/";
$target_file = $target_dir.basename($_FILES["image"]["name"]);
$image = basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$SQL_Add_PRODUCT = "INSERT INTO product(Productname, productId, Catagory, Price, status, image, description) VALUES ('$Productname','$productId', '$Catagory','$Price','$status','$image','$description')";

//file upload


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  
  if($check !== false) {

    echo "<script>alert('File is an image - " . $check["mime"] . ".'); window.setTimeout(function(){ window.location.href = '../addproduct.php'; }, );</script>";

    $uploadOk = 1;
  
  } else {

    echo "File is not an image.'); window.setTimeout(function(){ window.location.href = '../addproduct.php'; }, );</script>";

    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
 
  echo "<script>alert('Sorry, file already exists.'); window.setTimeout(function(){ window.location.href = '../addproduct.php'; }, );</script>";
  
  $uploadOk = 0;
}

// Check file size
if ($_FILES["image"]["size"] > 500000) {

  echo "<script>alert('Sorry, your file is too large.'); window.setTimeout(function(){ window.location.href = '../addproduct.php'; }, );</script>";

  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {

  echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.'); window.setTimeout(function(){ window.location.href = '../addproduct.php'; }, );</script>";

  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {

  echo "<script>alert('Sorry, your file was not uploaded.'); window.setTimeout(function(){ window.location.href = '../addproduct.php'; }, );</script>";

// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

    echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.'); window.setTimeout(function(){ window.location.href = '../product.php'; }, );</script>";



    if (mysqli_query($conn, $SQL_Add_PRODUCT)) {

      echo "<script>alert('New record created successfully.'); window.setTimeout(function(){ window.location.href = '../product.php'; }, );</script>";

      } else {

        echo "Error: " . $SQL_Add_PRODUCT . "<br>" . mysqli_error($conn);
      
      }



  } else {

    echo "<script>alert('Sorry, there was an error uploading your file.'); window.setTimeout(function(){ window.location.href = '../addproduct.php'; }, );</script>";

  }
}



mysqli_close($conn);
?>

