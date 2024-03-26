<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="crossorigin="anonymous"> </script> 
</head>
<body>
<div class="dialog">
  <span class="icon-close"><img src="images/close (1).png" alt=""></span>
  <div class="form-box log">
    <h2>Login</h2>
    <form action="display.php" method="post">
      <div class="con">
      <div class="input-box">
        <label>Email</label>
        <div class="section">
          <span class="icon"><img src="images/email (3).png" alt=""></span>
          <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
        </div>
       </div>
        <div class="input-box">
        <label>Password</label>
        <div class="section">
        <span class="icon"><img src="images/padlock (2).png" alt=""></span>
        <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
       </div>
        </div>
        <div class="forget">
        <label><input type="checkbox">Remember me</label>
        <a href="forgot-password.php">Forgot Password?</a>
        </div><br>  
        <div class="">
         <button type="submit" name="submit" class="btn">Login</button> 
        </div>
        </div>
        <div class="register">
          <p>Don't have an account ? <a href="signup.php" class="login-link">Register</a></p>
        </div>
      </div>
    </form>
  </div>
  <!-- jquery code -->
<script>
$(document).ready(function(){ 
    $('span.icon-close').click(function(){
      $('.dialog').hide();
    });
});
</script>
</body>
</html>
<!-- php code -->
<?php
   include("display.php");
   include("connection.php");
       if(isset($_POST['submit'])){
           $email =mysqli_real_escape_string($conn,$_POST['email']);
           $password =mysqli_real_escape_string($conn,$_POST['password']);
           $query = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
           $result = mysqli_query($conn, $query);
           $total=mysqli_num_rows($result);
           if ($result){
               header('location: display.php');   
           }
           else{
               echo "<script>alert('login failed')</script>";
           }
       }
?>
