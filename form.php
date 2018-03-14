<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab home page</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap-grid.css"/>
    <link rel="stylesheet" href="stylesheets/owl.carousel.min.css">
    <link rel="stylesheet" href="stylesheets/owl.theme.default.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<header class="header col-12">
    <div class="row">
        <div class="logo col-3">
            <a href="/">
                <img src="images/Lab-Logo-2-l.png" alt="Lab" width="100" height=""/>
            </a>
        </div>
        <div class="main-navigation col-9">
            <ul>
                <li>
                    <a href="/">Our work</a>
                </li>
                <li>
                    <a href="/">Our Approach</a>
                </li>
                <li>
                    <a href="/">Secrete Sauce</a>
                </li>
                <li>
                    <a href="/">Insight</a>
                </li>
                <li>
                    <a href="/">Careers</a>
                </li>

            </ul>
        </div>
        <div class="burger-menu col">
            <img src="images/burger-btn.png" class="burger-image" width="80"/>
        </div>
        <div class="over-lay-menu col-12">

            <ul>
                <li>
                    <a href="/">Our work</a>
                </li>
                <li>
                    <a href="/">Our Approach</a>
                </li>
                <li>
                    <a href="/">Secrete Sauce</a>
                </li>
                <li>
                    <a href="/">Insight</a>
                </li>
                <li>
                    <a href="/">Careers</a>
                </li>

            </ul>
        </div>
    </div>

</header>
<section class="col-12 banner-section">
    <div class="slider owl-one owl-carousel owl-theme">
        <div class="item" style="width: 100%"><img src="images/slider-image-1.jpg" width="100%"/> </div>
        <div class="item" style="width: 100%"><img src="images/slider-image-2.jpg" width="100%"/> </div>
        <div class="item" style="width: 100%"><img src="images/slider-image-3.jpg" width="100%"/> </div>
    </div>
    <div class="over-slider-tex">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-4 banner-text">
                    <h1 class="elegant-heading">Elegant Communication</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <a href="/" class="yellow-btn">Link text</a>
                </div>
            </div>
        </div>

    </div>

</section>
<section class="col-12 services-block">
    <div class="container">
        <div class="row">
            <div class="col-md-3 service-block digital-strategy">
                <div class="inner-wrapper">
                    <p>Digital strategy</p>
                </div>

            </div>
            <div class="col-md-3 service-block design-block">
                <div class="inner-wrapper">
                    <p>Design</p>
                </div>
            </div>
            <div class="col-md-3 service-block development-block">
                <div class="inner-wrapper">
                    <p>Development</p>
                </div>
            </div>
            <div class="col-md-3 service-block marketing-block">
                <div class="inner-wrapper">
                    <p>Perfomance Marketing</p>
                </div>
            </div>
            <div class="col-md-3 service-block neuro-ling-block">
                <div class="inner-wrapper">
                    <p>Neuro Linguist Search</p>
                </div>
            </div>
            <div class="col-md-3 service-block neuromarketing-block">
                <div class="inner-wrapper">
                    <p>Neuromarketing</p>
                </div>
            </div>
            <div class="col-md-3 service-block video-block">
                <div class="inner-wrapper">
                    <p>Video</p>
                </div>
            </div>
            <div class="col-md-3 service-block improvement-block">
                <div class="inner-wrapper">
                    <p>Analysis and Improvement</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="col-12 hapiness-contact-block">
    <div class="container form-bg">
        <div class="row">
            <div class="col-6 full-width">
                <div class="hapiness-block">
                    <h2>Happiness Indicator</h2>
                    <p>How happy are you right now?</p>

                    <div class="faces owl-four owl-carousel">
                        <div class="item" style="">
                            <img src="images/happy-face.png" alt="Happy"/>
                        </div>
                        <div class="item" style="">
                            <img src="images/sad-face.png" alt="Happy"/>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-6 full-width no-pad">
<?php

$email_to = "kirk@lab.co.uk";
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$youroptions = $_POST["youroptions"];
$email_subject = "Feedback from website";
$headers = "From: " . $email . "\n";
$headers .= "Reply-To: " . $email . "\n";
$thankyou_url = "thank-you.html";

$message = "Name: ". $fullname . "Email: " . $email . "Telephone Number:" . $tel . "Options:" . $youroptions;
$sent = mail($email_to, $email_subject, $message, $headers, "-f" . $email);

// If the mail() function above successfully sent the mail, $sent will be true.
if($sent) {
   // header("Location: " . $thankyou_url);
    echo "Thank you for contacting us.";
} else {
    // The mail didn't send, display an error.
    echo "There has been an error sending your message. Please try later.";
}
?>
            </div>
        </div>
    </div>
</section>
<footer class="footer col-12">


    <div class="container">
        <div class="owl-2 owl-carousel owl-theme small-screen-slider">
            <div class="item" style="width: 100%"> <div class="acolades-blocks col">
                    <p class="awards-text">+RAR DIGITAL AWARDS GRAND PRIX</p>
                    <p class="winners-text">Winners 2016</p>
                </div>
            </div>
            <div class="item" style="width: 100%"><div class="acolades-blocks col">
                    <p class="awards-text">+RAR DIGITAL AWARDS GRAND PRIX</p>
                    <p class="winners-text">Winners 2016</p>
                </div>
            </div>
            <div class="item" style="width: 100%">   <div class="acolades-blocks col">
                    <p class="awards-text special-p">+RAR DIGITAL AWARDS</p>
                    <p class="winners-text">Winners 2016</p>
                </div>
            </div>
            <div class="item" style="width: 100%">
                <div class="acolades-blocks col">
                    <p class="awards-text">+RAR DIGITAL AWARDS GRAND PRIX</p>
                    <p class="winners-text">Winners 2016</p>
                </div>
            </div>
            <div class="item" style="width: 100%">
                <div class="acolades-blocks col">
                    <p class="awards-text">+RAR DIGITAL AWARDS GRAND PRIX</p>

                    <p class="winners-text">Winners 2016</p>
                </div>
            </div>
            <div class="item" style="width: 100%">
                <div class="acolades-blocks col">
                    <p class="awards-text">+RAR DIGITAL AWARDS GRAND PRIX</p>

                    <p class="winners-text">Winners 2016</p>
                </div>
            </div>
        </div>

        <div class="col-sm-9 footer-contact-details">
            <div class="row">
                <div class="col social-contacts with-border">
                    <a href="" class="social-icons" target="_blank"><img src="images/linkedin.png" alt="LinkedIn" width="23"/></a>
                    <a href="" class="social-icons" target="_blank"><img src="images/facebook.png" alt="Facebook" width="23"/></a>
                    <a href="" class="social-icons" target="_blank"><img src="images/twitter.png" alt="Twitter" width="23"/></a>
                </div>
                <div class="col social-contacts with-border">
                    <a href="mailto:hello@lab.co.uk" class="footer-email">hello@lab.co.uk</a>
                </div>
                <div class="col social-contacts">
                    <p>0207 183 6668</p>
                </div>
            </div>
        </div>
        <div class="owl-three owl-carousel owl-theme tablet-screen-slider">
            <div class="item" style="width: 100%"> <div class="acolades-blocks col">
                    <p class="awards-text">+RAR DIGITAL AWARDS GRAND PRIX</p>
                    <p class="winners-text">Winners 2016</p>
                </div>
            </div>
            <div class="item" style="width: 100%"><div class="acolades-blocks col">
                    <p class="awards-text">+RAR DIGITAL AWARDS GRAND PRIX</p>
                    <p class="winners-text">Winners 2016</p>
                </div>
            </div>
            <div class="item" style="width: 100%">   <div class="acolades-blocks col">
                    <p class="awards-text special-p">+RAR DIGITAL AWARDS</p>
                    <p class="winners-text">Winners 2016</p>
                </div>
            </div>
            <div class="item" style="width: 100%">
                <div class="acolades-blocks col">
                    <p class="awards-text">+RAR DIGITAL AWARDS GRAND PRIX</p>
                    <p class="winners-text">Winners 2016</p>
                </div>
            </div>
            <div class="item" style="width: 100%">
                <div class="acolades-blocks col">
                    <p class="awards-text">+RAR DIGITAL AWARDS GRAND PRIX</p>

                    <p class="winners-text">Winners 2016</p>
                </div>
            </div>
            <div class="item" style="width: 100%">
                <div class="acolades-blocks col">
                    <p class="awards-text">+RAR DIGITAL AWARDS GRAND PRIX</p>

                    <p class="winners-text">Winners 2016</p>
                </div>
            </div>
        </div>

        <div class="row big-screen">
            <div class="acolades-blocks col">
                <p class="awards-text">+RAR DIGITAL AWARDS GRAND PRIX</p>
                <p class="winners-text">Winners 2016</p>
            </div>
            <div class="acolades-blocks col">
                <p class="awards-text">+RAR DIGITAL AWARDS GRAND PRIX</p>
                <p class="winners-text">Winners 2016</p>
            </div>
            <div class="acolades-blocks col">
                <p class="awards-text special-p">+RAR DIGITAL AWARDS</p>
                <p class="winners-text">Winners 2016</p>
            </div>
            <div class="acolades-blocks col">
                <p class="awards-text">+RAR DIGITAL AWARDS GRAND PRIX</p>
                <p class="winners-text">Winners 2016</p>
            </div>
            <div class="acolades-blocks col">
                <p class="awards-text">+RAR DIGITAL AWARDS GRAND PRIX</p>

                <p class="winners-text">Winners 2016</p>
            </div>
            <div class="acolades-blocks col">
                <p class="awards-text">+RAR DIGITAL AWARDS GRAND PRIX</p>

                <p class="winners-text">Winners 2016</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 copy-right-text">
                <div class="container">
                    <p>&copy; 2017 Copyright Lab Lateral. All Rights Reserved | Privacy &amp; Cookies Policy</p>
                </div>

            </div>
        </div>
    </div>
</footer>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.validate.js"></script>
</body>
</html>
