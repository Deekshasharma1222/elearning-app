<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="popup">
    <h4>Forgot Password </h4>
<form id="password-reset-form">
  <div id="alert"></div>
  <div class="con">
    <div class="connct">
  <label for="password">Password</label><br>
  <input type="password" id="password" ><br><br>
  <label for="password-verify">New Password</label><br>
  <input type="password" id="password-verify"><br><br>
    </div>
    
  <button type="submit" class="btn"><a href="code.php">Reset password</a></button>
  </div>
</form>
</div> 
</body>
</html>
<?php
include("display.php");
include("connection.php");
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
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