<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['form_submissions'])) {
    $_SESSION['form_submissions'] = 0;
}


if (isset($_POST['email'])) {
    // Rrite numrin e submits ne session
    $_SESSION['form_submissions']++;


    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <title>Spring Hotel | Contact</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/ClientSide/Contacts.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script defer src="../js/ClientSide/Contact.js"></script>
</head>
<body>

    <div class="logoja">
        <a href="./index.html"><img src="../assets/images/Logo.png" alt="Logo" /></a>
    </div>
    <nav class="navbar">
        <div></div>
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./About-Us.php">About Us</a></li>
            <li><a href="./Contacts.php">Contacts</a></li>
            <li><a href="./FAQ.php">FAQ</a></li>
            <li><a href="./Events.php">Events</a></li>
        </ul>
        <a href="login-signup.html">
            <img src="../assets/images/login-icon.png" alt="login-icon">
        </a>
    </nav>

    <header class="contacts">
        <h1>Contacts</h1>
        <p><a href="#">Home</a>&rarr;<b>Contacts</b></p>
    </header>
    
    <section class="components">
    <div class="shell">

    <div class="form">

    <h2 id="h2">Get in Touch</h2>
    <p >We are avaible 24/7 by fax, e-mail or phone.
        You can also use our quick <br> contact form to ask a 
        question about our services. We would be pleased to <br>
        answer your questions.
    </p>

    <form id="censorForm" action="">
        <input type="text" id="name" name="Name" placeholder="Your full name">
        <input type="tel" name="numbers" id="phone" placeholder="Phone">
        <textarea name="comment" id="textarea" cols="30" rows="10" placeholder="Your message"></textarea>
    
        <div class="form-email-send">
            <input type="email" name="mail" id="email" placeholder="E-mail">
            <input type="submit" value="Send" class="send-msg-button">
        </div>
    </form>
    
    <script>
            $(document).ready(function () {
                $('#censorForm').submit(function (event) {
                    event.preventDefault();

                    var textareaValue = $('#textarea').get(0).value;
                    var curseWords = ['FN', 'FIM', 'fn', "fim"];

                    curseWords.forEach(function (curseWord) {
                        var regex = new RegExp('\\b' + curseWord + '\\b', 'gi');
                        textareaValue = textareaValue.replace(regex, '****');
                    });

                    console.log('Censored Message:', textareaValue);
                });
            });
    </script>
    
    </div>

    <div class="elemets">

        <div class="social">
            <p>Get Social</p>
            <hr></hr>
            <ul>
                <li><a href="https://www.instagram.com"><img src="../assets/images/instagram.png" alt=""></a></li>
                <li><a href="https://www.facebook.com"><img src="../assets/images/facebook.png" alt=""></a></li>
                <li><a href="https://www.twitter.com"><img src="../assets/images/twitter.png" alt=""></a></li>
                <li><a href="https://www.youtube.com"><img src="../assets/images/youtube.png" alt="" style="height: 35px; height: 35px;"></a></li>
            </ul>
        </div>

    <div class="phone">
        <p>Phone</p>
        <hr style="width: 100%;"></hr>
        <ul>
            <li><img src="../assets/images/call.png" alt=""></li>
            <li><a href="tel:+1 (409) 987–5874">+1 (409) 987–5874</a></li>
        </ul>

    </div>

    <div class="addres">

            <p>Address</p>
            <hr></hr>
            <ul>
                <li><img src="../assets/images/location.png" alt=""></li>
                <li><a href="#">6036 Richmond Hwy, Alexandria, VA 2230</a></li>
            </ul>
        
    </div>

    <div class="opening">

            <p>Opening Hours</p>
            <hr></hr>
            <ul>

                <li><img src="../assets/images/clock.png" alt=""></li>
                <li><p>We work every day 9:00-23:00</p></li>

            </ul>
    </div>
</div>
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

            <p><img src="../assets/images/call.png" class="footer-call-icon">Call Us: <a href="tel:+1 (409) 987–5874">+1
                    (409) 987–5874</a></p>
            <a href="mailto:spring@hotel.com"><img src="../assets/images/email.png"
                    class="footer-call-icon">spring@hotel.com</a>
        </div>
        <div class="col-md-3 footer-main-newsletter">
            <h2>Join our Newsletter</h2>
    <form action="" method="post" onsubmit="subscribeNewsletter(event)">
        <input type="email" name="email" placeholder="Enter your e-mail" required class="footer-newsletter-textfield" id="emailInput">
        <?php if ($_SESSION['form_submissions'] == 0 && !isset($_SESSION['submit_disabled'])) { ?>
            <button type="submit" class="footer-newsletter-subscribebtn" id="SubscribeBtn" onclick="playAudio()">Subscribe</button>
        <?php } ?>
        <audio id="SubscribeAudio" src="../assets/audio/button-click.mp3" type="audio/mp3"></audio>
        <output id="subscribeOutput" for="emailInput"></output>
    </form>

        <script>
            window.onload = function() {
            var formSubmissions = <?php echo $_SESSION['form_submissions']; ?>;
            sessionStorage.setItem('formSubmissions', formSubmissions);

            if (sessionStorage.getItem('submitDisabled')) {
                document.getElementById('SubscribeBtn').style.display = 'none';
                document.getElementById('subscribeOutput').textContent = "You're already subscribed.";
            }
        };

        function subscribeNewsletter(event) {
            event.preventDefault();

            var emailInput = document.getElementById('emailInput');
            var subscribeOutput = document.getElementById('subscribeOutput');
            var subscribeButton = document.getElementById('SubscribeBtn');
            const subscribeAudio = document.getElementById('SubscribeAudio');

            if (isValidEmail(emailInput.value)) {
                subscribeOutput.textContent = `Thank you for subscribing!`;

            
                var formSubmissions = parseInt(sessionStorage.getItem('formSubmissions')) || 0;
                formSubmissions++;
                sessionStorage.setItem('formSubmissions', formSubmissions);

                // Mshefe buttonin
                subscribeButton.style.display = 'none';
                sessionStorage.setItem('submitDisabled', 'true');

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
            src="../assets/images/backToTop.png" /></button>-
    <audio id="backToTopSound" src="/assets\audio\whoosh.mp3" type="audio/mp3"></audio>

    <script>
        // -------------------------- Butoni back to top --------------------------

            document.addEventListener("DOMContentLoaded", () => {
                // Get the button
                const mybutton = document.getElementById("backToTopBtn");

                // When the user scrolls down 90px from the top of the document, show the button
                window.onscroll = () => scrollFunction();

                const scrollFunction = () => {
                    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                        mybutton.style.display = "block";
                        mybutton.classList.add("show");
                    } else {
                        mybutton.classList.remove("show");
                    }
                };

                // When the user clicks on the button, scroll to the top of the document
                mybutton.addEventListener("click", () => topFunction());

                const topFunction = () => {
                    // Smooth scroll to the top
                    window.scrollTo({
                        top: 0,
                        behavior: "smooth"
                    });
                };
            });
    </script>
</section>
</body>
</html>
