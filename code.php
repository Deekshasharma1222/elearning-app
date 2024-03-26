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
    <h4>Code Verification</h4><br>
  <div class="con">
    <p>Send a password  reset OTP to your email </p>
    
    <div class="conn">
        <label>Code: </label>
     <input type="code" name="code"> <br><br>
    </div>
  <button type="submit" class="btn"><a href="forgot.php">Reset password</a></button>
  
  </div>
</div> 
<script>
    
</script>
</body>
</html>
<?php
include("display.php");
include("connection.php");
?>