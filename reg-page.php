<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style-reg.css">
</head>
<body>
    <div class="info">
        <a href="main-page.html"><p> HOME </p></a>
        <a href="about-page.html"><p>ABOUT US </p></a>
        <a href="contact-page.html"><p>CONTACT US </p></a>
        <a href="news-page.html"><p>NEWS </p></a>
        <a href="log-page.html"><p>LOGIN </p></a>
    </div>

    <?php
    $showSignup = isset($_GET['showSignup']) && $_GET['showSignup'] === 'true';
    include 'config.php';
    ?>

    <div class="main">
        <div class="register-container">
            <h2>Register</h2>
            <form action="reg-process.php" onsubmit="return validateRegistration()" method="post">
                <p>FIRST NAME</p>
                <input type="text" name="Emri" placeholder="" required>
                <p>LAST NAME</p>
                <input type="text" name="Mbiemri" placeholder="" required>
                <p>EMAIL</p>
                <input type="email" name="Email" placeholder="" required>
                <p>PASSWORD</p>
                <input type="password" name="Password" placeholder="" required>
                <button type="submit">Register</button>
                <a href="log-page.html">Already have an account? Login here.</a>
            </form>
        </div>
        <div class="right-text">
            <p>REGISTER</p>
            <p>BE PART OF US</p>
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
        function validateRegistration() {
            var Emri = document.getElementsByName("Emri")[0].value;
            var Mbiemri = document.getElementsByName("Mbiemri")[0].value;
            var Email = document.getElementsByName("Email")[0].value;
            var Password = document.getElementsByName("Password")[0].value;

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(Email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            if (Password === "") {
                alert("Password is required.");
                return false;
            }

            if (Password.length < 6) {
                alert("Password should be at least 6 characters long.");
                return false;
            }


            return true;
        }
    </script>
</body>
</html>
