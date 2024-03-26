<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
     crossorigin="anonymous"></script> 
</head>
<body>
<div class="dialog">
  <span class="icon-close"><img src="images/close (1).png" alt=""></span>
<div class="form-box regist">
    <h2>Registration</h2>
    <form action="display.php" method="POST">
      <div class="con">
        <div class="input-box">
        <label>Username</label>
        <div class="section">
          <span class="icon"><img src="images/user.png" alt=""></span>
          <input type="text" name="username" required>
        </div>
        </div>
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
        <label><input type="checkbox">I agree to the terms & conditions</label>
      </div><br>
      <div>
      <button type="submit" name="signup" class="btn"><a href="display.php">Register</a></button> 
      </div>
      <div class="reg">
        <p>Already have an account ? <a href="login.php" class="login-link">Login</a></p>
      </div>
      </div>
    </form> 
  </div> 
</div>
<!-- jquery code -->
<script>
$(document).ready(function(){ 
  $('span.icon-close').click(function(){
    $('.dialog').hide();
  });
$('.login').click(function(){
  $('.container').css({"opacity":"0.5"});
});
});
$(document).ready(function(){ 
  $('form').submit(function(e){
    e.preventDefault();
    // Validate fields
    var username = $('input[name="username"]').val();
    var email = $('input[name="email"]').val();
    var password = $('input[name="password"]').val();

    if(username.trim() == "") {
      alert("Please enter your username.");
      return false;
    }
    this.submit();
  });
});
</script>
</body>
</html>
<!-- php code -->
<?php
    include("connection.php");
    include("display.php");  
    if(isset($_POST['signup'])){
        // Escape user inputs for security
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['password']);

        // Attempt insert query execution
        $query = "INSERT INTO signup (username, email, password) VALUES ('$username','$email','$pass')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Record added successfully.";
        } 
        else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>

//     include("connection.php");
//     include("display.php");
    
// if(isset($_POST['signup'])){
//         // Server-side validation
//         $errors = [];
    
//         // Check if username is empty
//         if(empty($_POST['username'])) {
//             $errors[] = "Username is required.";
//         }
    
//         // Check if email is empty and if it's a valid email format
//         if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//             $errors[] = "Valid email address is required.";
//         }
    
//         // Check if password meets requirements
//         if(empty($_POST['password']) || !preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/", $_POST['password'])) {
//             $errors[] = "Password must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters.";
//         }
    
//         // If there are errors, display them
//         if(!empty($errors)) {
//             foreach($errors as $error) {
//                 echo $error . "<br>";
//             }
//         } else {
//             // If no errors, proceed with inserting data into database
//             $username = mysqli_real_escape_string($conn, $_POST['username']);
//             $email = mysqli_real_escape_string($conn, $_POST['email']);
//             $password = mysqli_real_escape_string($conn, $_POST['password']);
//             // Hash the password
//             $hashed_password = password_hash($password, PASSWORD_DEFAULT);
//             // Prepare the query
//             $query="INSERT into signup (username, email, password) VALUES('$username','$email','$password')";
//             // Prepare the statement
//             $stmt = mysqli_prepare($conn, $query);
//             // Bind parameters
//             mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);
//             // Execute the statement
//             $result = mysqli_stmt_execute($stmt);
    
//             if ($result) {
//                 header('location: display.php');
//                 exit(); // Make sure to exit after redirection
//             } else {
//                 echo ('Error: ' . mysqli_error($conn));
//             }
    
//             // Close the statement
//             mysqli_stmt_close($stmt);
//         }
//     }
     ?>
    