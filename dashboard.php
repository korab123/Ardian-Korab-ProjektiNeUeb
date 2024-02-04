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
    <link rel="stylesheet" href="style-news.css">
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
    
        

    
    <div class="footer">
        <div class="foot-cont">
            <div class="logonstuff">
                <img src="./image_2023-11-27_203822041-removebg-preview 2.png" alt="">
                <p>Join our newsletter for free guides, checklists & templates.</p>
                <div class="buttons">
                    <input type="text" placeholder="Enter your email">
                    <button>Subscribe</button>
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