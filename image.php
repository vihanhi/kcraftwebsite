<?php

//stop connect to login after connect to dashboard
session_start();
require_once("connection/connection.php");


// update data

if (isset ($_GET["productId"])){
  $action ="update";
  $productId =$_GET["productId"];

  $SQL_SELECT_PRODUCT_DETAILS ="SELECT * FROM product WHERE productId=$productId";
  
}else{
  $action ="insert";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Image</title>
</head>
<body>
    
<div class="main-panel">
          <div class="content-wrapper">
          <h4 class="card-title"> Add Product</h4>
          <p></p>                                                                                          <!-- //upload photo -->
          <form class="forms-sample" action="handler/handlerimg.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Product Name" name="Productname">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Product Id" name="productId" hidden>
                   </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Catagory</label>
                        <select class="form-control" id="exampleSelectGender"name="Catagory" id="Catagory">
                          <option>None</option>
                          <option>Handmade Pottery</option>
                          <option>Natural Skincare</option>
                          <option>Silk Scarves</option>
                          <option>Wooden Decor</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="image" id="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                   <div class="form-group">
                        <label for="exampleInputName1">Price</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Price" name="Price">
                   </div>
                   <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Description" name="description">
                   </div>
                   <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="exampleSelectGender"name="status" id="status">
                          <option>None</option>
                          <option>Active</option>
                          <option>Pending</option>
                        </select>
                      </div>
                      
                      
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                      <a href="productlist.php"><button type="button" class="btn btn-inverse-primary btn-fw">Product List</button></a>
                    </form>
          
          </div>
</body>
</html>
