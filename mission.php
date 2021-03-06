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
                    <h3 class="mission--banner-title--big">Our Mission</h3>
                    <span class="header-underline"></span>
                </div>
                <p>Rentsecured’s mission is to offer a home away from home for many field based professionals and help landlords maintain a hassle free stream revenue.</p>

                <p>A resident is more likely to look after their environment if it is comfy, clean and well maintained. That is why we always commit to take care of all of our properties with the very best results in mind.</p>

                <p>Our clients tell us that we are a breathe of fresh air thanks to our attention to the little things!</p>

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