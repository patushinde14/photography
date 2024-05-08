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
      <form action="#" method="POST">
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="text" placeholder="Enter Your Email"name="email" id="email" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Enter Your Password" name="pass" id="pass" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="btnsub" value="Login">
        </div>
      </form>
        <div class="option"><b>Signup first</b></div>
        <div class="twitter">
          <a href="signup.php">SignUP</a>
        </div>
        
    </div>
  </body>
</html>
<?php
 if(isset($_POST['btnsub']))
 {
   $e = $_POST['email'];
   $p = $_POST['pass'];
   $cn = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($cn,"graphy");
    echo "helllo";
   $q = "select * from ragi where email = '$e' and pass = '$p'";
   $result = mysqli_query($cn, $q);
   if($a = mysqli_fetch_assoc($result))
   {
    if($a['email']== $e){
        echo"<script>window.location='index.php';</script>";
    }
   }
   else{
    echo"<script>alert('email or password is incorrect')</script>";
   }
 }
 ?>
