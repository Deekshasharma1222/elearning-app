<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="popup">
    <h4>Forgot Password</h4>
    <p style="text-align: center; padding-top: 5px">Please fill email correctly</p>
    <form id="reset-form" action="" method="post">
        <div class="con">
            <div class="input-box">
                <span class="icon"><img src="images/email (1).png" alt=""></span>
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <button type="submit" class="btn" name="submit">Continue</button>
        </div>
    </form>
</div> 
</body>
</html>

<?php
session_start();
include("display.php");
include("connection.php");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $query = "SELECT * FROM signup WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $total = mysqli_num_rows($result);
    
    if ($total > 0){
        $userdata = mysqli_fetch_array($result);
        $username = $userdata['username'];
        $subject = "Password Reset";
        $body = "Hi, $username. Click here to reset your password: http://localhost/elearning/reset_password.php";
        $sender_email = "deekshasharma5872@gmail.com"; // Adjust sender email

        // Set Gmail SMTP settings
        $smtpHost = 'smtp.gmail.com';
        $smtpUsername = 'deekshasharma5872@gmail.com';
        $smtpPassword = 'Dikshu@123';
        $smtpPort = 587; // or 465 for SSL

        // Enable SMTP
        ini_set('smtp_port', $smtpPort);
        ini_set('SMTP', $smtpHost);

        // Set additional headers
        $headers = "From: $sender_email\r\n";
        $headers .= "Reply-To: $sender_email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        // Send mail using SMTP
        if (mail($email, $subject, $body, $headers)) {
            $_SESSION['msg'] = "Check your email to reset your password $email";
            header('location: login.php');
            exit; // Add this to stop further execution
        } else {
            echo "Email sending failed...";
        }
    } else {
        echo "No email found";
    }
}
?>

