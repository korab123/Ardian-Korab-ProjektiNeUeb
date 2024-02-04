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
    <div class="main">
        <div class="big">
            <p>NEWS</p>
        </div>
        
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <div class="score">
                            <div class="news">
                                <img src=".//Rectangle40-31-Group39-31-aboutus.png" alt="">
                                <p>Celestial FC: Unraveling the Secrets Behind Their Dominant Season</p>
                            </div>
                    </div>
                </div><div class="slide">
                    <div class="score">
                            <div class="news">
                                <img src=".//Rectangle41-31-Group39-31-aboutus.png" alt="">
                                <p>"From the Dugout to Glory: Inside Celestial FC' Journey to Success</p>
                            </div>
                    </div>
                </div><div class="slide">
                    <div class="score">
                            <div class="news">
                                <img src=".//Rectangle42-31-aboutus.png" alt="">
                                <p>Goal-Scoring Extravaganza: The Offensive Prowess of Our Soccer Stars</p>
                            </div>
                    </div>
                </div><div class="slide">
                    <div class="score">
                            <div class="news">
                                <img src=".//Rectangle43-31-aboutus.png" alt="">
                                <p>Defensive Brilliance: How Our Soccer Team Shuts Down the Toughest Opponents</p>
                            </div>
                    </div>
                </div>    
            </div>
        </div>
        <div class="slider-controls">
            <button id="prevBtn" onclick="prevSlide()"><span class="arrow"><</span></button>
            <button id="nextBtn" onclick="nextSlide()"><span class="arrow">></span></button>
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
    document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".slider");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    let counter = 0;

    function showSlide(index) {
        slider.style.transition = "transform 0.5s ease-in-out";
        slider.style.transform = `translateX(${-index * 100}%)`;
    }

    function prevSlide() {
        if (counter > 0) {
            counter--;
            showSlide(counter);
        }
    }

    function nextSlide() {
        let arrS =document.querySelectorAll(".slide").length-1;
        if (counter < arrS) {
            counter++;

        }
        else if(counter == arrS) {
            counter=0;
 
        }
        showSlide(counter);
    }

    prevBtn.addEventListener("click", prevSlide);
    nextBtn.addEventListener("click", nextSlide);

   
});

    </script>

</body>
</html>