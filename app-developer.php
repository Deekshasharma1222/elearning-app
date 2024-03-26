<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>video</title>
    <link rel="stylesheet" href="css/stylesvideo.css">
    <link rel="stylesheet" href="css/styles.css">
<?php
  $video1Url = "video/flutter1.mp4";
  $video2Url = "video/flutter1.mp4";
  $video3Url = "video/flutter1.mp4";
?>
    <!-- home page -->
    <div class="header">
    <div class="logo">
     <img src="images/e-learning-logo-png.png" alt="e-learning">
    </div>
    <div class="nav">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="course.php">Course</a></li>
        <li><a href="learn.php">Learn</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a  href="about.php">About</a></li>
    </ul>
  </div>
    <div class="register">
        <button type="button" class="login"><a href="login.php"><span text="bold">Log In</span></a></button>
        <button type="button" class="signup"><a href="signup.php"><span text="bold">Sign Up</span></a></button>
    </div>
  </div>
<!-- video section -->
<div class="video">
    <div class="video1">
        <div class="app-video">
            <video controls style="width: 400px;">
                <source src="<?php echo $video1Url; ?>" type="video/mp4">
            </video> 
        </div>
        <div class="video-para">
            <p>App developer Tutorial for beginners -1</p>
        </div>
    </div>
    <div class="video2">
        <div class="app-video">
            <video controls>
            <source src="<?php echo $video2Url; ?>" type="video/mp4">
            </video>
        </div>
         <div class="video-para">
            <p>App developer Tutorial for beginners -2</p>
        </div> 
    </div>
    <div class="video3">
        <div class="app-video">
            <video controls>
            <source src="<?php echo $video3Url; ?>" type="video/mp4">
            </video> 
        </div>
        <div class="video-para"> 
            <p>App developer Tutorial for beginners -3</p>
        </div>
    </div>
</div>

<!-- footer section -->
<div class="footer">
  <div class="footer-section">
    <div class="footer-section1">
      <div class="footer-flex">
        <div class="logo">
          <img src="images/e-learning-logo-png.png" alt="e-learning">
        </div>
      <div class="footer-email">
        <img class="email-logo" src="images/email (2).png" alt=""><p>deekshasharma5872@gmail.com</p>
      </div>
      <div class="footer-email">
       <img class="email-logo" src="images/call.png" alt=""><p>+91 7872766714</p>
      </div>
      <div class="footer-email">
       <img class="email-logo" src="images/location-mark.png" alt="">Somewhere in the world<p></p>
      </div>
    </div>
    </div>
    <div class="footer-section2">
      <p>Home</p>
      <p>Benefits</p>
      <p>Our Course</p>
      <p>Our Testimonial</p>
      <p>Our FAQ</p>
    </div>
    <div class="footer-section3">
      <p>About Us</p>
      <p>Our Goal</p>
    </div>
    <div class="footer-section4">
      <p>Follow us on</p>
      <div class="footer-logo">
          <div class="logo1"><img src="images/facebook-logo.png" alt="logo"></div>
          <div class="logo2"><img src="images/instagram (1).png" alt="logo"></div>
          <div class="logo3"><img src="images/social (1).png" alt="logo"></div>
        </div>
    </div>
  </div>
    </div>
</div>

</body>
</html>