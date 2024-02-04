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
    <title>Contact Form</title>
    <link rel="stylesheet" href="style-cont.css">
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
        <div class="main-top">
            <p>Contact Us</p>
            <p>Thank you for your interest in working with Celestial FC. Any question or remarks? Just write us a message!</p>
        </div>
        <div class="main-bot">
            <div class="con-info">
                <p>Contact Information</p>
                <div class="a">
                    <img src=".//mail-icon.svg (1).png" alt=""> info@celestialfc.com
                </div>
                <div class="a">
                    <img src="phone-icon.svg (1).png" alt=""> +383 49 288 460
                </div>
                <div class="a">
                    <p></p><img src="./map-icon.svg (1).png" alt=""> Ulicja Jugosllavja, Kafeneja Jone, Matiqan Nr. 37
                </div>
            </div>
            <div class="con-form">
                <form method="post" action="contact-proccessor.php">
                    <div class="c">
                        <div class="b">
                            <p>Full Name</p>
                            <input type="text" name="fullName" id="fullName" placeholder="First Last">
                        </div>
                        <div class="b">
                            <p>Company</p>
                            <input type="text" name="company" id="company" placeholder="celestial fc">
                        </div>
                    </div>
                    <div class="c">
                        <div class="b">
                            <p>Email</p>
                            <input type="email" name="email" id="email" placeholder="your.email@domain.com">
                        </div>
                        <div class="b">
                            <p>Phone</p>
                            <input type="number" name="phone" id="phone" placeholder="+1 12 456 789">
                        </div>
                    </div>
                    <div class="area">
                        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                        <button type="submit">SEND MESSAGE</button>
                    </div>
                </form>
            </div>
        </div>
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

    <script>
        function validateContactForm() {
            var fullName = document.querySelector('.con-form input[name="fullName"]').value;
            var company = document.querySelector('.con-form input[name="company"]').value;
            var email = document.querySelector('.con-form input[name="email"]').value;
            var phone = document.querySelector('.con-form input[name="phone"]').value;
            var message = document.querySelector('.con-form textarea').value;

            // Simple validation example
            if (fullName.trim() === "") {
                alert("Full Name is required.");
                return false;
            }

            if (company.trim() === "") {
                alert("Company is required.");
                return false;
            }

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            if (phone.trim() === "") {
                alert("Phone number is required.");
                return false;
            }

            // You can add more validation rules as needed

            return true;
        }
    </script>
</body>
</html>
