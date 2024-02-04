<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_email'])) {
    $loggedInUser = $_SESSION['user_email'];
} else {
    // Redirect to the main page (you can change this if needed)
    header("Location: main-page.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style-about.css">
</head>
<body>
<div class="info">
        <?php
        // Display the user's email or login link
        if (isset($loggedInUser)) {
            echo '<a href="main-page.php"><p> HOME </p></a>';
            echo '<a href="about-page.php"><p>ABOUT US </p></a>';
            echo '<a href="contact-page.php"><p>CONTACT US </p></a>';
            echo '<a href="news-page.php"><p>NEWS </p></a>';
            echo '<a href="logout.php">' . $loggedInUser . '</a>';
        } else {
            echo '<a href="main-page.php"><p> HOME </p></a>';
            echo '<a href="about-page.php"><p>ABOUT US </p></a>';
            echo '<a href="contact-page.php"><p>CONTACT US </p></a>';
            echo '<a href="news-page.php"><p>NEWS </p></a>';
            echo '<a href="log-page.php"><p>LOGIN </p></a>';
        }
        ?>
    </div>
    <div class="main">
    <p>ABOUT US</p>
    <p>Welcome to Celestial FC, where passion meets the stars on the soccer field! Founded with a vision to reach new heights in the beautiful game, Celestial FC is not just a club; it's a celestial journey that transcends the ordinary. 
        Our club is a constellation of dedicated players, coaches, and supporters who share a common love for soccer and a commitment to excellence. At Celestial FC, we believe in the power of unity, hard work, and the pursuit of greatness. Our celestial journey is marked by the values of teamwork, sportsmanship, and a relentless pursuit of improvement both on and off the pitch.
        As we don the celestial blue and white, we aim to create a soccer experience that is out of this world. Our players are not just athletes; they are celestial ambassadors, representing the spirit of competition, camaraderie, and fair play. We strive to cultivate a positive and inclusive environment where everyone can reach for the stars and achieve their full potential.
        Celestial FC is more than a soccer club; it's a community of dreamers and believers. Join us under the celestial canopy as we write new chapters of success, forge lasting friendships, and inspire each other to soar to greater heights. Together, let's make every match a celestial spectacle and every moment a testament to the brilliance that comes from chasing our soccer dreams among the stars.
        </p>
    </div>

    <div class="footer">
        <div class="foot-cont">
            <div class="logonstuff">
                <img src="./image_2023-11-27_203822041-removebg-preview 2.png" alt="">
                <p>Join our newsletter for free guides, checklists & templates.</p>
                <!-- Modify the HTML form -->
<div class="buttons">
    <form method="post" action="newsletter-proccess.php">
        <input type="text" name="newsletter_email" placeholder="Enter your email">
        <button type="submit">Subscribe</button>
    </form>
</div>

                <div class="tiny">
                    <p>By subscribing you agree to with our Privacy Policy and provide consent to receive updates from our company</p>
                </div>    
            </div>
        
            <div class="infos">
                <div class="list">
                    <p>Useful links</p>
                    <ul>
                        <li>Home</li>
                        <li>About us</li>
                        <li>Contact us</li>
                        <li>News</li>
                    </ul>
                </div>
                <div class="list">    
                    <p>Social Media</p>
                    <ul>
                        <li>Tiktok</li>
                        <li>Youtube</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Facebook</li>
                    </ul>
                </div>
            </div>
        </div>  
        <div class="bottom-tag">
            <p>© 2023 Celestial FC. All right reserved. 
                Designed By Gentrit Berisha </p>
            <div class="pol">
                <p>Privacy Policy </p>
                <p>Cookie Policy</p>
                <p>Cookie Settings</p>
            </div>
        </div>
    </div>

    
</body>
</html>