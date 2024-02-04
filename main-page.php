<?php
// Start the session
session_start();

// Initialize the variable
$loggedInUser = '';

// Check if the user is logged in
if (isset($_SESSION['user_email'])) {
    $loggedInUser = $_SESSION['user_email'];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="style-main.css"> <!-- Replace with your actual stylesheet link -->
</head>
<body>
<?php

session_start();

// Output session variables for debugging
var_dump($_SESSION);

if (isset($_SESSION['subscription_success']) && $_SESSION['subscription_success']) {
    echo "Subscription successful!";
    unset($_SESSION['subscription_success']); // Clear the session variable
} elseif (isset($_SESSION['subscription_error']) && $_SESSION['subscription_error']) {
    echo "Subscription failed. Please try again.";
    // Add the following line for more detailed error information
    echo $_SESSION['subscription_error_message'] ?? '';
    unset($_SESSION['subscription_error']); // Clear the session variable
}
?>

    <div class="content"> 
        <div class="starter-style">
            <div class="fc">
                <p>Celestial <span class="inner-fc"> FC</span></p>
            </div>
            <div class="motiv">
                <p>Strive for Goals, Play with Soul</p>
            </div>
            <div class="more-button">
                <button class="more">More</button>
            </div>
        </div>
    </div>
    
    <div class="info">
        <?php
        // Display the user's email or login link
        if ($loggedInUser !== '') {
            echo '<p><a href=""> HOME </a>|<a href="about-page.php"> ABOUT US </a>|<a href="contact-page.php"> CONTACT US </a>|<a href="news-page.php"> NEWS </a>|<a href="logout.php">' . $loggedInUser . '</a>';
        } else {
            echo '<p><a href=""> HOME </a>|<a href="about-page.php"> ABOUT US </a>|<a href="contact-page.php"> CONTACT US </a>|<a href="news-page.php"> NEWS </a>|<a href="log-page.php"> LOGIN </a></p>';
        }
        ?>
    </div>
    
    <div class="second-box">

        <div class="slider-container">
            <div class="slider">
                
                <div class="slide">
                    <div class="score">
                    <img src="./Logo_Italy_National_Football_Team_-_2023 1.png" alt="">
                    <p>vs <span class="country">Mexico</span></p>
                    <h2>3-1</h2>
                    </div>
                </div>
                
                <div class="slide">
                    <div class="score">
                    <img src="./Logo_Italy_National_Football_Team_-_2023 1.png" alt="">
                    <p>vs <span class="country">Sweden</span></p>
                    <h2>0-1</h2>
                    </div>
                </div>
                
                <div class="slide">
                    <div class="score">
                    <img src="./Logo_Italy_National_Football_Team_-_2023 1.png" alt="">
                    <p>vs <span class="country">Russia</span></p>
                    <h2>5-1</h2>
                    </div>
                </div>
                
                <div class="slide">
                    <div class="score">
                    <img src="./Logo_Italy_National_Football_Team_-_2023 1.png" alt="">
                    <p>vs <span class="country">Italy</span></p>
                    <h2>4-2</h2>
                    </div>
                </div>
        </div>
        
        </div>
        <div class="past">
        <p>PAST <span class="game">GAME</span></p>
        </div>

    </div>
    <div class="third-box">
        <img src="./leah--IoJFOvbqF3c-unsplash 1 (1).png" alt="">
        <div class="element">
            <div class="logn">
                <img src="./image_2023-11-27_203822041-removebg-preview 2.png" alt="">
                <p class="fc">Celestial <span class="inner-fc"> FC</span></p>
            </div>
            <div class="about">
                <fieldset>
                    <legend>About us</legend>
                    <p>Meet the <span style="font-weight: bold; padding-left: 10px; "> Celestial FC </span> – where skill meets passion on the soccer field. Our team embodies unity, precision, and a relentless drive for victory. Join us in the excitement of the beautiful game, as we redefine the essence of sportsmanship and showcase the thrill of success. <span class="more-texxt">More...</span></p>
            </fieldset>
            </div>
        </div>
    </div>
    <div class="fourth-box">
        
        <div class="above">
        
        <div class="tdn">
            <p>Today's News</p>
        </div>
        <div class="da-news">
            <fieldset>
                <legend>new</legend>
                <p>In a stunning display of skill and teamwork, Celestial FC soared to victory with a jaw-dropping 3-1 win over their rivals, leaving fans on the edge of their seats and cementing their position as the undisputed champions of the league.</p>
            </fieldset>
        </div>
        <div class="benji">
            <p>Player of the match: <span style="color: #D6FF62;
                font-family: Inter;
                font-size: 24px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;">Benjamin Reynolds</span> <span style="color: #D6FF62;">12</span></p>
        </div>
        <button>MORE NEWS</button>
        </div>
        <img src="./pngimg 1.png" alt="">
    </div>
    
    <div class="fifth-box">
        <div class="content">
        <div class="jp">
            <p>Join our Junior Program</p>
        </div>
        <div class="text-box">
            <p>Tailored for young enthusiasts aged 9 - 14, our program is the ideal launchpad for budding soccer talents. It creates a nurturing environment for players to develop fundamental skills, foster teamwork, and cultivate a love for the sport. Join us in sparking the passion for the beautiful game!<span class="text-box-sp"> Whats is our Junior Program?</span></p>
        </div>
        <div>
            <button>Contact Us</button>
        </div>
        </div>
    </div>
    
    <div class="footer">
        <div class="foot-cont">
        <div class="logonstuff">
        <img src="./image_2023-11-27_203822041-removebg-preview 2.png" alt="">
        <p>Join our newsletter for free guides, checklists & templates.</p>
        <!-- Modify the HTML form -->
<div class="buttons">
    <form method="post" action="newsletter-subscribe.php">
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

    <script>     
            document.addEventListener("DOMContentLoaded", function () {
            const slider = document.querySelector(".slider");
            const slides = document.querySelectorAll(".slide");  // Add this line to get all slides
            let counter = 0;
            const totalSlides = slides.length;  // Use the slides variable
            const slideWidth = slides[0].clientWidth;  // Use the slides variable to get the first slide's width

            function showSlide(index) {
                const translateValue = -index * slideWidth;
                slider.style.transform = `translateX(${translateValue}px)`;

                // Add 'active' class to the showing slide and remove from others
                slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.classList.add("active");
                    } else {
                        slide.classList.remove("active");
                    }
                });
            }



            function prevSlide() {
                if (counter > 0) {
                    counter--;
                } else {
                    counter = totalSlides - 1;
                }
                showSlide(counter);
            }

            function nextSlide() {
                if (counter < totalSlides - 1) {
                    counter++;
                } else {
                    counter = 0;
                }
                showSlide(counter);
            }

            document.addEventListener("keydown", function (event) {
                if (event.key === "ArrowLeft") {
                    prevSlide();
                } else if (event.key === "ArrowRight") {
                    nextSlide();
                }
            });
        });
    </script>
</body>
    
</html>