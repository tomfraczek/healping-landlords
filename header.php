<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");

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

    <div class="container">
        <div class="nav">
            <div class="header-logo">
                <h3><a href="./index.php">RentSecured</a></h3>
            </div>

            <ul class="nav-menu">
                <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="./mission.php">Our Mission</a></li>
                <li class="<?= ($activePage == 'letting-agencies') ? 'active':''; ?>"><a href="./letting-agencies.php">Working with Letting Agencies</a></li>
                <li class="<?= ($activePage == 'contact') ? 'active':''; ?>"><a class="contact" href="./contact.php">Contact</a></li>
            </ul>

            <div class="header-time">
                <p class="opening-hours">Monday - Friday : 9:00 am - 5:30 pm</p>
                <p class="whatsapp"><img src="./img/whatsapp.svg" alt="whatsapp">+44 (0) 776 9296 437</p>
            </div>

<!--            script on the bottom of the page-->
            <label class="hamburger">
                <input class="hamburger-input" type="checkbox" />
                <svg id="icon" width="192px" height="192px" viewBox="0 16 32 32">
                    <g class="icon">
                        <g class="debug">
                            <path class="top" d="
          M 96, 0
          L 72,24
          C 68,28 60,32 56,32
          L 40,32
          C 36,32 28,24 24,24
          L  0,24
        "></path>
                            <path class="middle" d="
          M 56,32
          L  0,32
        "></path>
                            <path class="bottom" d="
          M 96,64
          L 72,40
          C 68,36 60,32 56,32
          L 40,32
          C 36,32 28,40 24,40
          L  0,40
        "></path>
                        </g>
                        <path class="top" d="
        M 96, 0
        L 72,24
        C 68,28 60,32 56,32
        L 40,32
        C 36,32 28,24 24,24
        L  0,24
      "></path>
                        <path class="middle" d="
        M 56,32
        L  0,32
      "></path>
                        <path class="bottom" d="
        M 96,64
        L 72,40
        C 68,36 60,32 56,32
        L 40,32
        C 36,32 28,40 24,40
        L  0,40
      "></path>
                    </g>
                    <defs>
                        <filter id="gooey">
                            <feGaussianBlur
                                    in="SourceGraphic"
                                    result="blur"
                                    stdDeviation="3"
                            />
                            <feColorMatrix
                                    in="blur"
                                    mode="matrix"
                                    values="
            1 0 0 0 0
            0 1 0 0 0
            0 0 1 0 0
            0 0 0 18 -7
          "
                                    result="gooey"
                            />
                            <feBlend
                                    in2="gooey"
                                    in="SourceGraphic"
                                    result="mix"
                            />
                        </filter>
                    </defs>
                </svg>
            </label>

        </div>
    </div>

    <ul class="nav-menu-mobile" id="menuMobile">
        <li><a href="/">home</a></li>
        <li><a href="./mission.php">Our Mission</a></li>
        <li><a href="./letting-agencies.php">Working with Letting Agencies</a></li>
        <li><a class="contact" href="./contact.php">Contact</a></li>
    </ul>
</header>

<script>

    document.getElementById('icon').addEventListener('click', function () {
        document.getElementById('menuMobile').classList.toggle('nav-open');
    })
</script>