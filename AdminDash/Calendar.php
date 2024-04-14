<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <title>Spring Hotel | Admin | Calendar</title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/AdminDashStyle/Calendar.css">
</head>
<body>
    <div class="logoja">
        <a href="./index.html"><img src="assets/images/Logo.png" alt="Logo" /></a>
    </div>

    <nav class="navbar">
        <div></div>
        <ul>
            <li><a href="./index.html">Home</a></li>
            <li><a href="./About-Us.html">About Us</a></li>
            <li><a href="./Contacts.html">Contacts</a></li>
            <li><a href="./FAQ.html">FAQ</a></li>
            <li><a href="./Events.html">Events</a></li>
        </ul>
        <a href="login-signup.html">
            <img src="assets/images/login-icon.png" alt="login-icon">
        </a>
    </nav>

    <header class="header">
        <h1>About Us</h1>
        <p><a href="/">Home</a>&rarr;<b>About us</b></p>
    </header>

    <div class="img-recepsioni" >

        <div class="text">
         <h1> A Few Words </br> About Us </h1>
         <p>
Fed up with the monotony of your daily grind? Craving a spot to kick back and unwind with your loved ones? Look no further! Our spa resort and hotel offer a lavish escape with a touch of history for intrepid travelers. We seamlessly blend contemporary flair and modern amenities with the charm of traditional values.

Each room boasts top-notch comforts, from air conditioning to sleek LCD TVs. Enjoy complimentary WI-FI sprawled across the entire hotel expanse. Our restaurant serves up a delightful fusion of global cuisines, bringing people together through a tapestry of history and traditions. Immerse yourself in the warmth of our hospitality, experience impeccable service, and revel in exceptional comfort! Don't miss the chance to secure your reservation for the vacation of your dreams today!
         </p>
        </div>
    </div>
    
    <div class="rooms-main">
        <h1>Rooms & Suites</h1>
        <p style="width: 80%;">Spring Hotel offers the finest accommodations with unique designs that provide both a luxurious and relaxing
        environment. Specially
        selected fabrics and finishes vary from room to room, offering guests a variety of beautiful and unique atmospheres to
        select from.</p>
    <table class="table">
        <tr>
            <td class="table-cell">
                <img src="assets\images\grid1.jpg" alt="Image 2" class="table-image">
                <div class="table-overlay">
                    <h3>Single Room</h3>
                    <hr max-width="60vw">
                </div>
            </td>
            <td class="table-cell">
                <img src="assets/images/grid2.jpg" alt="Image 3" class="table-image">
                <div class="table-overlay">
                    <h3>Double Room</h3>
                    <hr max-width="60vw">
                </div>
            </td>
            <td class="table-cell">
                <img src="assets/images/grid3.jpg" alt="Image 3" class="table-image">
                <div class="table-overlay">
                    <h3>Twin Room</h3>
                    <hr max-width="60vw">
                </div>
            </td>
        </tr>
        <tr>
    
            <td class="table-cell">
                <img src="assets/images/grid4.jpg" alt="Image 3" class="table-image">
                <div class="table-overlay">
                    <h3>Family Room</h3>
                    <hr max-width="60vw">
                </div>
            </td>
            <td class="table-cell">
                <img src="assets/images/grid5.jpg" alt="Image 3" class="table-image">
                <div class="table-overlay">
                    <h3>Executive Suite</h3>
                    <hr max-width="60vw">
                </div>
            </td>
            <td class="table-cell">
                <img src="assets/images/grid6.jpg" alt="Image 1" class="table-image">
                <div class="table-overlay">
                    <h3>VIP Suite</h3>
                    <hr max-width="60vw">
                </div>
            </td>
        </tr>
    
    </table>
    </div>
    <div class="reviews-main">
        <h1 class="reviwes-main-title">What People Say</h1>
        <div class="reviews-container" id="reviews-container">
            
        </div>
    </div>
    <div class="team-main">
        <h1 class="team-main-title">Our Team</h1>
        <div class="team-container" id="teamContainer"></div>
    </div>
    
    <footer>
        <div class="row footer-main">
            <div class="col-md-3 footer-main-opening">
                <h2>Opening Hours</h2>
                <p><span class="footer-weekendweekdays">Weekdays:</span> 8:00 AM - 8:00 PM</p>
                <p><span class="footer-weekendweekdays">Weekends:</span> 9:00 AM - 6:00 PM</p>
            </div>
            <div class="col-md-3 footer-main-adress">
                <h2>Address</h2>
                <p><span><a href="https://www.google.com/maps/search/6036+Richmond+Hwy,+Alexandria,+VA+2230/@38.7860603,-77.0740174,16.25z?entry=ttu"
                            target="_blank">
                            <address style="margin: 0;"><img src="assets\images\location.png"
                                    class="footer-location-icon">6036 Richmond Hwy, Alexandria, VA 2230</address>
                        </a></span></p>
    
                <p><img src="assets/images/call.png" class="footer-call-icon">Call Us: <a href="tel:+1 (409) 987–5874">+1
                        (409) 987–5874</a></p>
                <a href="mailto:spring@hotel.com"><img src="assets/images/email.png"
                        class="footer-call-icon">spring@hotel.com</a>
            </div>
            <div class="col-md-3 footer-main-newsletter">
                <h2>Join our Newsletter</h2>
            <form onsubmit="subscribeNewsletter(event)">
                <input type="email" placeholder="Enter your e-mail" required class="footer-newsletter-textfield" id="emailInput">
                <button type="submit" class="footer-newsletter-subscribebtn" id="SubscribeBtn" onclick="playAudio()">Subscribe</button>
                <audio id="SubscribeAudio" src="assets/audio/button-click.mp3" type="audio/mp3"></audio>

                <output id="subscribeOutput" for="emailInput"></output>
            </form>

            <script>
                function subscribeNewsletter(event) {
                    event.preventDefault(); 

                    var emailInput = document.getElementById('emailInput');
                    var subscribeOutput = document.getElementById('subscribeOutput');
                    var subscribeButton = document.getElementById('SubscribeBtn');
                    const subscribeAudio = document.getElementById('SubscribeAudio');
                    if (isValidEmail(emailInput.value)) {


                        subscribeOutput.textContent = `Thank you for subscribing!`;
                        subscribeButton.style.display = 'none';


                        setTimeout(function () {
                            emailInput.value = '';
                        }, 3000);
                    } else {

                        subscribeOutput.textContent = `Please enter a valid email address.`;
                    }
                }

                function isValidEmail(email) {
                    return email.includes('@');
                }

                function playAudio() {
                    subscribeAudio.play();
                };
            </script>
            </div>
            </div>
            
        </div>
        <div class="footer-socials">
            <a href="https://www.instagram.com/" target="_blank"><img src="assets\images\instagram.png"
                    class="footer-socials-icon"></a>
            <a href="https://www.facebook.com/" target="_blank"><img src="assets\images\facebook.png"
                    class="footer-socials-icon"></a>
            <a href="https://twitter.com/" target="_blank"><img src="assets\images\twitter.png"
                    class="footer-socials-icon"></a>
        </div>
    </footer>         
    
    <button id="backToTopBtn" title="Go to top" onclick="topFunciton()"><img width="30px" height="30px"
            style="display: flex; align-items: center; justify-content: center;"
            src="assets/images/backToTop.png" /></button>
    <audio id="backToTopSound" src="assets\audio\whoosh.mp3" type="audio/mp3"></audio>
<script src="js/About-Us.js"></script>
<script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>