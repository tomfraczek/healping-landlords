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

                    <p>By submitting your details you consent to being contacted by Rentsecured by telephone and email. Your contact will not be shared with any 3rd party</p>
                </div>
                <input class="contact-form--submit" type="submit" name="submit" value="Request More Information">
            </form>
        </div>
        <section class="banner">
            <div class="container banner-content">
                <div class="banner-left">
                    <h3 class="banner-title--big">We Guarantee Rent For Landlords in London</h3>

                    <div class="covid-update">
                        <p class="banner-title--small">Covid-19 Update</>
                        <p>We guarantee your rent even in time of crisis. No Voids, no risk. Your rent is paid into your bank every month!</p>
                    </div>

                </div>
            </div>

            <div class="img-bcg"></div>

            <picture>
                <source media="(max-width: 548px)" srcset="./img/home-main-mobile.jpg">
                <source media="(min-width: 549px)" srcset="./img/home-main.jpg">
                <img class="banner-bcg--img" src="./img/home-main.jpg" alt="Chris standing up holding his daughter Elva">
            </picture>


        </section>

        <section class="why-us">
            <div class="grey-bar">
                <h3 class="section-header">— Why Choose Us?</h3>
            </div>
            <div class="container">
                <div class="why-card--container">
                    <p class="why-card--container__pre">Rentsecured operates a comprehensive, integrated property service that help Landlords and property investors to strive!</p>
                    <div class="why-card">
                        <h3>We Don’t Charge Any
                            Fee - Ever</h3>
                        <p>At HelpingLandlords, there are No fees or bolt on hidden charges – EVER!</p>
                    </div>

                    <div class="why-card">
                        <h3>We Find Tenants In Less Than 1 Week</h3>
                        <p>We take care of finding residents for your property. We handle all of the viewings.</p>
                    </div>

                    <div class="why-card">
                        <h3>We Guarantee Your Rent Every Month</h3>
                        <p>We keep things simple for you. Your rent is paid into your bank every month.</p>
                    </div>

                    <div class="why-card">
                        <h3>We Maximise Your ROI</h3>
                        <p>We will work hard at achieving the highest possible price for your property.</p>
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