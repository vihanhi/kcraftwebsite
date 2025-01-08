<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kasun's Artisanal Store</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet"/>
    <link rel="shortcut icon" type="image/x-icon" href="image/mainlogo.jpg" />
    <!--Stylesheet-->
    <link rel="stylesheet" href="css/register.css" />
  </head>
  <body>
    <div class="background">
      <div class="shape"></div>
      <div class="shape"></div>
    </div>
    <form action="handler/workshopregistationhandler.php" method="POST">
      <h3>Workshop Register</h3>

      <input type="text" name="Fristname" placeholder="Enter First Name">
      <input type="text" name="Lastname" placeholder="Enter Last Name">
      <input type="text" name="Phonenumber" placeholder="Enter Phone Number">
      <input type="password" name="password" placeholder="Enter Password">

      <button class="btnn"><a href="workshopcheckout.php">Register</a></button>
      <p class="link">Now<br>
        <a href="workshopcheckout.php">Checkout</a></p>
    </form>
  </body>
</html>
