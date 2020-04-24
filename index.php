<?php
///**
// * PHPMailer simple contact form example.
// * If you want to accept and send uploads in your form, look at the send_file_upload example.
// */
//
////Import the PHPMailer class into the global namespace
//use PHPMailer\PHPMailer\PHPMailer;
//if (array_key_exists('to', $_POST)) {
//    $err = false;
//    $msg = '';
//    $email = '';
//    //Apply some basic validation and filtering to the subject
//    if (array_key_exists('subject', $_POST)) {
//        $subject = substr(strip_tags($_POST['subject']), 0, 255);
//    } else {
//        $subject = 'No subject given';
//    }
//    //Apply some basic validation and filtering to the query
//    if (array_key_exists('query', $_POST)) {
//        //Limit length and strip HTML tags
//        $query = substr(strip_tags($_POST['query']), 0, 16384);
//    } else {
//        $query = '';
//        $msg = 'No query provided!';
//        $err = true;
//    }
//    //Apply some basic validation and filtering to the name
//        //Limit length and strip HTML tags
//        $firstName = substr(strip_tags($_POST['firstname']), 0, 255);
//        $lastName = substr(strip_tags($_POST['firstname']), 0, 255);
//    //Validate to address
//    //Never allow arbitrary input for the 'to' address as it will turn your form into a spam gateway!
//    //Substitute appropriate addresses from your own domain, or simply use a single, fixed address
////    if (array_key_exists('to', $_POST) && in_array($_POST['to'], ['sales', 'support', 'accounts'], true)) {
////        $to = $_POST['to'] . '@example.com';
////    } else {
////        $to = 'tomaszfr90@gmail.com';
////    }
//    $to = 'tomaszfr90@gmail.com';
//    //Make sure the address they provided is valid before trying to use it
//    if (array_key_exists('email', $_POST) && PHPMailer::validateAddress($_POST['email'])) {
//        $email = $_POST['email'];
//    } else {
//        $msg .= 'Error: invalid email address provided';
//        $err = true;
//    }
//    if (!$err) {
//        $mail = new PHPMailer;
//        //        $mail->isSMTP();
//        $mail->Host = 'localhost';
//        $mail->Port = 25;
//        $mail->CharSet = PHPMailer::CHARSET_UTF8;
//        //It's important not to use the submitter's address as the from address as it's forgery,
//        //which will cause your messages to fail SPF checks.
//        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
//        $mail->setFrom('contact@example.com', (empty($name) ? 'Contact form' : $name));
//        $mail->addAddress($to);
//        $mail->addReplyTo($email, $name);
//        $mail->Subject = 'Contact form: ' . $subject;
//        $mail->Body = "Contact form submission\n\n" . $query;
//        if (!$mail->send()) {
//            $msg .= 'Mailer Error: '. $mail->ErrorInfo;
//        } else {
//            header('Location: script.php#bottomOfPage');
//            $msg .= 'Message sent!';
//        }
//    }
//}
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $mail = new PHPMailer;
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $propertyType = $_POST['property_type'];
    $postalCode = $_POST['postal_code'];
    $bedrooms = $_POST['number_of_bedrooms'];
    $message = $_POST['query'];

    $mail->setFrom($email, $firstName . ' ' . $lastName);
    $mail->addAddress('tomaszfr90@gmail.com');
    $mail->Subject  = 'Website request';
    $mail->Body     = '<h1>Contact request from helpinglandlords.co.uk</h1><br>
    <h3>Requester:</h3><br>
    <p>Name: ' . $firstName . ' ' . $lastName .'</p><br>
    <p>Email: ' . $email .'</p><br>
    <p>Phone number: ' . $phoneNumber .'</p><br>
    <p>Property type: '. $propertyType .'</p><br>
    <p>Postal code: '. $postalCode .'</p><br>
    <p>Bedroom: '. $bedrooms .'</p><br>
    <p>Message:</p><br>
    <p>'. $message .'</p>';
    $mail->IsHTML(true);
    if(!$mail->send()) {
        echo 'Message was not sent.';
        echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent.';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Help Landlords</title>
    <link rel="stylesheet" href="./uikit/uikit.min.css" />
    <link rel="stylesheet" href="styles/styles.css" />
    <script src="https://www.google.com/recaptcha/api.js?render=6LdmK-0UAAAAACfWJO_x8Hx3ZHNsH5o56TovMSPg"></script>
    <script type="text/javascript" src="./uikit/uikit.min.js"></script>

    <script>
        // grecaptcha.ready(function() {
        //     grecaptcha.execute('6LdmK-0UAAAAACfWJO_x8Hx3ZHNsH5o56TovMSPg', {action: 'homepage'}).then(function(token) {
        //     console.log('updated');
        //     document.querySelector('#captchaToken').dataset.captcha = token;

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
</head>
<body>
<h1><?php if (!empty($msg)){echo $msg;} ?></h1>
<div class="hidden" id="captchaToken"></div>
    <header>
        <div class="container header">
            <div class="header-logo">
                <h3>HelpingLandlords</h3>
            </div>

            <div class="header-time">
                <p class="opening-hours">Monday - Friday : 9:00 am - 5:30 pm</p>
                <p class="whatsapp"><img src="./img/whatsapp.svg" alt="whatsapp">+44 (0) 776 3380 426</p>
            </div>
        </div>
    </header>

    <section class="banner">
        <div class="container banner-content">
            <div class="banner-left">
                <h3 class="banner-title--small">Covid-19 Update</h3>
                <h3 class="banner-title--big">Rent Guaranteed For <br>
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
                <h3>Why Choose Us ?</h3>
            </div>

            <div class="why-card--container">
                <div class="why-card">
                    <span class="orange-box"></span>
                    <h3>Free of charge</h3>
                    <p>At HelpingLandlords, there are no fees or bolt on hidden charges – EVER!</p>
                </div>

                <div class="why-card">
                    <span class="orange-box"></span>
                    <h3>We find the tenants</h3>
                    <p>We take care of finding residents for your property. We handle all of the viewings.</p>
                </div>

                <div class="why-card">
                    <span class="orange-box"></span>
                    <h3>We Guarantee Rent</h3>
                    <p>We keep things simple for you. Your rent is paid into your bank every month.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <h3>Our Clients’ reviews</h3>
            <div class="reviews-card--container">
                <div class="review-card">
                    <img src="./img/review1.jpg" alt="">
                    <p>HelpingLandlords have helped me a lot! They take care of everything and pay me a fixed long term rent every month without fail. I am delighted that I have saved time and money by working with them!</p>
                    <p class="review-name">Anthony, London</p>
                </div>

                <div class="review-card">
                    <img src="./img/review2.jpg" alt="">
                    <p>Since the Covid outbreak, I have had real challenges keeping all of my properties filled 100% of the time. Since working with HelpingLandlords, I have found a way of avoiding rent loss !</p>
                    <p class="review-name">Emma, London</p>
                </div>

                <div class="review-card">
                    <img src="./img/review3.jpg" alt="">
                    <p>HelpingLandlords saved me from repossession! They payed me a fixed long term rent every month that really helped me get my finances back!</p>
                    <p class="review-name">Emma, London</p>
                </div>
            </div>
        </div>
    </section>

    <section class="faq" id="faq">
        <div class="container">
            <h3>FAQ</h3>


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
                <li>
                    <a class="uk-accordion-title" href="#">What if a client doesn’t pay you, will I still get my rent? </a>
                    <div class="uk-accordion-content">
                        <p>The answer is yes. We guarantee your rent every month regardless of our clients’ financial situation. </p>
                    </div>
                </li>
            </ul>

        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <h3>Contact Us Today !</h3>
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
                        <select name="property_type" id="propertyType" required>
                            <option value="">Property type*</option>
                            <option value="apartment">Apartment</option>
                            <option value="house">House</option>
                        </select>

                        <input placeholder="Property's post code*" type="text" name="postal_code" id="postCode" maxlength="6" required>

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
                    <p>* By clicking Send message, you agree to our <a href="">Terms &amp; Conditions</a> and that you have read our <a href="">Data Use Policy</a>, including our <a href="">Cookie Use</a>.</p>
                    <input class="contact-form--submit" type="submit" name="submit" value="SEND MESSAGE">
                </form>
            </div>
        </div>
    </section>

    <footer></footer>

</body>
</html>