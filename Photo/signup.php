<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Login Form | CodingLab </title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <form method="POST" action="signup.php">
        <div class="title">SignUP</div>
        <div class="input-box underline">
            <input type="text" placeholder="Enter Your Username" name="name" id="name" required>
            <div class="underline"></div>
          </div>
        <div class="input-box underline">
          <input type="text" placeholder="Enter Your Email" name="email" id="email" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Enter Your Password" name="pass" id="pass" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" value="SignUP" name="btnsub">
        </div>
      </form>
        <div class="option"><b>Signup first</b></div>
        <div class="twitter">
          <a href="login.php">Login</a>
        </div>
        
    </div>
  </body>
</html>
<?php
   if(isset($_POST['btnsub']))
   {
    extract($_POST);
    $cn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($cn,"graphy");
    $q="INSERT INTO `ragi`(`name`, `email`, pass) VALUES ('$name','$email','$pass')";
    if(mysqli_query($cn,$q))
    echo"<script>window.location='login.php';</script>";
    else
    echo"<script>alert('register not successfully');</script>";
    mysqli_close($cn);
   }


   ?>