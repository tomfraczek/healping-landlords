<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';


function sendEmail(){
    $mail = new PHPMailer;
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $postalCode = $_POST['postal_code'];
    $bedrooms = $_POST['number_of_bedrooms'];
    $message = $_POST['query'];

    $mail->setFrom('rentsecured@rentsecured.co.uk');
    $mail->addReplyTo($_POST[$email]);
    $mail->addAddress('info@rentsecured.co.uk');
    $mail->Subject  = 'Contact request';
    $mail->Body     = '<h1>Contact request from rentsecured.co.uk</h1>
    <h3>Requester:</h3>
    <p>Name: ' . $firstName . ' ' . $lastName .'</p>
    <p>Email: ' . $email .'</p>
    <p>Phone number: ' . $phoneNumber .'</p>
    <h3>Property:</h3>
    <p>Postal code: '. $postalCode .'</p>
    <p>Bedroom: '. $bedrooms .'</p>
    <h3>Message:</h3>
    <p>'. $message .'</p>';
    $mail->IsHTML(true);
    if(!$mail->send()) {
        echo 'Message was not sent.';
//        echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
        header("location: thank-you.php");
        exit();
//        $msg = '<p class="confirm-message--sent">Message has been sent. We will contact you within 24 hours.</p>';
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (isset($_POST['g-recaptcha-response'])) {
        $captcha = $_POST['g-recaptcha-response'];
    } else {
        $captcha = false;
    }

    if (!$captcha) {
        //Do something with error
    } else {
        $secret   = '6LdmK-0UAAAAAAD2DgSKDX4BGi6gPyFSfTD6NTiu';
        $response = file_get_contents(
            "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
        );
        // use json_decode to extract json response
        $response = json_decode($response);

        if ($response->success === false) {
            //Do something with error
        }
    }

//... The Captcha is valid you can continue with the rest of your code
//... Add code to filter access using $response . score
    if ($response->success==true && $response->score <= 0.5) {
        exit();
    } else {
        sendEmail();
    }


}

?>

<!doctype html>
<html lang="en">
<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N29KHPT');

    <!-- Google Analytics Tag -->
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-165295810-1');
    <!-- Google Analytics Tag End -->

    </script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent Secured</title>
    <link rel="stylesheet" href="./uikit/uikit.min.css" />
    <link rel="stylesheet" href="styles/styles.css" />
    <script src="https://www.google.com/recaptcha/api.js?render=6LdmK-0UAAAAACfWJO_x8Hx3ZHNsH5o56TovMSPg"></script>
    <script type="text/javascript" src="./uikit/uikit.min.js"></script>

    <script>

                grecaptcha.ready(function() {
                    // do request for recaptcha token
                    // response is promise with passed token
                    grecaptcha.execute('6LdmK-0UAAAAACfWJO_x8Hx3ZHNsH5o56TovMSPg', {action:'validate_captcha'})
                        .then(function(token) {
                            // add token value to form
                            document.getElementById('g-recaptcha-response').value = token;
                        });
                });

    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1344573415739969');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1344573415739969&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N29KHPT"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="hidden" id="captchaToken"></div>
    <header>
        <div class="container header">
            <div class="header-logo">
                <h3>RentSecured</h3>
            </div>
            <div class="header-nav">
                <a href="#reviews">REVIEWS</a>
                <a href="#faq">FAQ</a>
                <a href="#contact">CONTACT</a>
            </div>
            <div class="header-time">
                <p class="opening-hours">Monday - Friday : 9:00 am - 5:30 pm</p>
                <p class="whatsapp"><img src="./img/whatsapp.svg" alt="whatsapp">+44 (0) 776 9296 437</p>
            </div>
        </div>
    </header>

    <section class="banner">
        <div class="container banner-content">
            <div class="banner-left">
                <h3 class="banner-title--small">Covid-19 Update</h3>
                <h3 class="banner-title--big">Rent Guaranteed For
                    Landlords in London</h3>
                <p>We guaranty your rent even in time of crisis. No Voids, no risk. Your rent is paid into your bank every month !</p>
                <a href="#contact">Contact Us Today</a>
            </div>

            <img src="./img/viewing.jpg" alt="">
        </div>

        <div class="img-bcg"></div>

        <img class="banner-bcg--img" src="./img/london.jpg" alt="">

    </section>

    <section class="why-us">
        <div class="container">
            <div>
                <h3 class="section-header">— Why Choose Us?</h3>
            </div>

            <div class="why-card--container">
                <div class="why-card">
                    <span class="orange-box"></span>
                    <h3>Free of charge</h3>
                    <p style="margin-top: 25px;">At RentSecured, there are no fees or bolt on hidden charges – EVER!</p>
                </div>

                <div class="why-card">
                    <span class="orange-box"></span>
                    <h3>We find you tenants<br>in 1 week</h3>
                    <p>We take care of finding residents for your property. We handle all of the viewings.</p>
                </div>

                <div class="why-card">
                    <span class="orange-box"></span>
                    <h3 style="margin-top: 55px;">We Guarantee Rent</h3>
                    <p>We keep things simple for you. Your rent is paid into your bank every month.</p>
                </div>

            </div>
        </div>
    </section>

    <section id="reviews" class="reviews">
        <div class="container">
            <h3 class="section-header">— Our Client Reviews</h3>
            <div class="reviews-card--container">
                <div class="review-card">
                    <img src="./img/review1.jpg" alt="">
                    <p>RentSecured have helped me a lot! They take care of everything and pay me a fixed long term rent every month without fail. I am delighted that I have saved time and money by working with them!</p>
                    <p class="review-name">Anthony, London</p>
                </div>

                <div class="review-card">
                    <img src="./img/review2.jpg" alt="">
                    <p>Since the Covid outbreak, I have had real challenges keeping all of my properties filled 100% of the time. Since working with RentSecured, I have found a way of avoiding rent loss !</p>
                    <p class="review-name">Azad, London</p>
                </div>

                <div class="review-card">
                    <img src="./img/review3.jpg" alt="">
                    <p>RentSecured saved me from repossession! They payed me a fixed long term rent every month that really helped me get my finances back!</p>
                    <p class="review-name">Matt, London</p>
                </div>
            </div>
        </div>
    </section>

    <section class="faq" id="faq">
        <div class="container">
            <h3 class="section-header">— FAQ</h3>
            <ul class="faq-accordion" uk-accordion="multiple: true">
                <li>
                    <a class="uk-accordion-title" href="#">Which area do you cover in the UK?</a>
                    <div class="uk-accordion-content">
                        <p>We only cover London for now . We have experienced and qualified property managers working all over the city.</p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">How quickly could you rent my property? </a>
                    <div class="uk-accordion-content">
                        <p>After our 1st Call with you, we can make an offer within 24 hours. The offer will be based on local market conditions in your area. The price and terms we agree at this stage will be the price we pay for the duration of the contract even if the property is vacant. From the moment we can agree on the offer it will take around 5 working days to complete our site visit and rental report. At this point, all being well, we will agree a rental start date that works for us both and set up the standing order to you. </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">Do you pay a deposit? </a>
                    <div class="uk-accordion-content">
                        <p>No, we do not pay a deposit. When we get a new property ready to let, we may carry out a light refurbishment if needed, repair fixtures and fittings and dress the property to a high standard. During the term, we maintain this level of finish and keep on top of all the little jobs. What this means is that we give you back your property at the end of our agreement in a better condition than we took it from you. Our landlords prefer to opt for this high level of guaranteed quality instead of a deposit scheme. </p>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">What are your fees? </a>
                    <div class="uk-accordion-content">
                        <p>There are NO FEES! We do not charge you any monthly commissions and there are no hidden charges. Our main income comes from our clients who pay us to find quality accommodation for their workers. </p>
                    </div>
                </li>
            </ul>

        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <h3 class="section-header">—Contact Us Today!</h3>
            <div class="contact-content">

               <p>Send us a message</p>
                <p>Tell us how we can help and we'll do our best to get back to you within 24 hours.</p>

                <form name="contactForm" class="contact-form" id="contactForm" method="post">
                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                    <input type="hidden" name="action" value="validate_captcha">
                    <div class="contact-name">
                        <input placeholder="First Name*" type="text" name="firstname" id="firstName" maxlength="255" required>
                        <input placeholder="Last Name" type="text" name="lastname" id="lastName" maxlength="255" required>
                    </div>

                    <div class="contact-contact">
                        <input placeholder="Email*" type="email" name="email" id="email" maxlength="255" required>
                        <input placeholder="Phone number*" type="tel" name="phone_number" id="phoneNumber" maxlength="255" required>
                    </div>

                    <div class="contact-property">

                        <input placeholder="Property's post code (e.g. E1 6AN) *" type="text" name="postal_code" id="postCode" maxlength="8" required>

                        <select name="number_of_bedrooms" id="numberBedrooms" required>
                            <option value="">Number of bedrooms*</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                    </div>
                    <textarea cols="30" class="contact-form--input-mesage" rows="8" name="query" id="query" placeholder="Message*" required></textarea>
                    <div class="rights-container">
                        <input type="checkbox" class="rights-input" id="rights" name="rights" required>
                        <p>I agree to the <a href="./terms.html">Terms &amp; Conditions</a> and that I have read the <a href="./privacy.html">Privacy Policy</a>*</p>
                    </div>

                    <input class="contact-form--submit" type="submit" name="submit" value="SEND MESSAGE">
                </form>
            </div>
        </div>
    </section>

    <footer></footer>

</body>
</html>