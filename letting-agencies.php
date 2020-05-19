<?php include 'header.php';?>
<?php include 'contact-mobile.php';?>

<div class="top-container">
    <div class="sticky-container container">
        <form name="contactForm" class="contact-form--home" id="contactForm" method="post">
            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
            <input type="hidden" name="action" value="validate_captcha">
            <div class="contact-name">
                <input placeholder="First Name*" type="text" name="firstname" id="firstName" maxlength="255" required>
                <input placeholder="Last Name" type="text" name="lastname" id="lastName" maxlength="255" required>
            </div>

            <input placeholder="Email*" type="email" name="email" id="email" maxlength="255" required>
            <input placeholder="Phone number*" type="tel" name="phone_number" id="phoneNumber" maxlength="255" required>

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

            <div class="rights-container">

                <p>By submitting your details you consent to being contacted by
                    Rentsecured by telephone and email. Your contact will not be
                    shared with any 3rd party</p>
            </div>
            <input class="contact-form--submit" type="submit" name="submit" value="Request More Information">
        </form>
    </div>
    <section class="banner">
        <div class="container mission--banner-content">
            <div class="mission--banner-left">
                <div class="underline-header">
                    <h3 class="mission--banner-title--big">Working with Letting Agencies</h3>
                    <span class="header-underline"></span>
                </div>
                <p>Like you, our goal is to satisfy landlords, take care of their investment and keep their properties in mint condition.</p>

                <p>We work with a large number of letting agents through out London including large letting agents such as Connell’s, Martin & Co as well as many more independent letting agents.</p>

                <p>Generally, our clients are looking for long term agreements of 2, 4 or 5 years and during these terms, we can fully guarantee that there will be no missed payments!</p>

                <p>We do not charge you any fees, in fact you can keep all of your normal fees. We work with you and not in competition with you!</p>

                <p>If you have properties that are available for a long term let and your landlords are happy with a company let, then please do get in touch!</p>

                <div class="mission--images-container">
                    <img src="./img/kitchen.jpeg" alt="">
                    <img src="./img/livingroom.jpeg" alt="">
                    <img src="./img/livingroom2.jpeg" alt="">
                </div>
            </div>

        </div>


    </section>

</div>


<?php include 'reviews.php' ?>
<?php include 'faq.php' ?>

<footer>
    <div class="container footer">
        <div class="header-logo">
            <h3><a href="./index.php">RentSecured</a></h3>
        </div>

        <div class="footer--links">
            <a href="./privacy.php">Privacy policy</a>
            <a href="./terms.php">Terms & Conditions</a>
        </div>
    </div>
</footer>

</body>
</html>