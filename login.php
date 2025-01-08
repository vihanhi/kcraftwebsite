<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kasun's Artisanal Store</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet"/>
    <link rel="shortcut icon" type="image/x-icon" href="image/mainlogo.jpg" />
    <!--Stylesheet-->
    <link rel="stylesheet" href="css/login1.css" />
  </head>
  <body>
    <div class="background">
      <div class="shape"></div>
      <div class="shape"></div>
    </div>
    <form action="handler/userloginhandler.php" method="POST">
      <h3>Login Here</h3>

      <input type="text" name="Phonenumber" placeholder="Enter Phone Number" required/>
      <input type="password" name="password" placeholder="Enter Password" required/>

      <button type="submit" class="btnn">Login</button>
      <p class="link">Don't have an account<br>
        <a href="register.php">Register Here</a></p>
    </form>
  </body>
</html>
