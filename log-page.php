<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style-log.css">
</head>
<body>
    <div class="info">
        <a href="main-page.php"><p> HOME </p></a>
        <a href="about-page.html"><p>ABOUT US </p></a>
        <a href="contact-page.html"><p>CONTACT US </p></a>
        <a href="news-page.html"><p>NEWS </p></a>
        <a href="log-page.html"><p>LOGIN </p></a>
    </div>
    
    <div class="main">
        <div class="right-text">
            <p>LOG IN</p>
            <p>WELCOME BACK</p>
        </div>
        <div class="login-container">
            <h2>Login</h2>
            <form action="proccess_login.php" method="post" onsubmit="return validateLogin()">
                <!-- Update input names to match login-process.php -->
                <p>EMAIL</p>
                <input type="text" name="login-email" placeholder="" required>
                <p>PASSWORD</p>
                <input type="password" name="login-password" placeholder="" required>
                <button type="submit">Login</button>
                <a href="reg-page.php">Don't have an account?</a>
            </form>
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
                    <p>By subscribing you agree with our Privacy Policy and provide consent to receive updates from our company</p>
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
        function validateLogin() {
            var email = document.getElementsByName("login-email")[0].value;
            var password = document.getElementsByName("login-password")[0].value;

            // Simple validation example
            if (email === "" || password === "") {
                alert("Email and password are required.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
