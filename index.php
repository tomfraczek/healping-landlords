<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Help Landlords</title>
    <link rel="stylesheet" href="styles/styles.css" />
    <script src="https://www.google.com/recaptcha/api.js?render=6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></script>
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
</head>
<body>

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
                <a href="#contactUs">Contact Us Today</a>
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
                    <img src="" alt="">
                    <p>HelpingLandlords have helped me a lot! They take care of everything and pay me a fixed long term rent every month without fail. I am delighted that I have saved time and money by working with them!</p>
                    <p class="review-name">Anthony, London</p>
                </div>

                <div class="review-card">
                    <img src="" alt="">
                    <p>Since the Covid outbreak, I have had real challenges keeping all of my properties filled 100% of the time. Since working with HelpingLandlords, I have found a way of avoiding rent loss !</p>
                    <p class="review-name">Emma, London</p>
                </div>

                <div class="review-card">
                    <img src="" alt="">
                    <p>HelpingLandlords saved me from repossession! They payed me a fixed long term rent every month that really helped me get my finances back!</p>
                    <p class="review-name">Emma, London</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <h3>Contact Us Today !</h3>
            <div class="contact-content">
                <form name="contactForm" class="contact-form" method="post">
                    <div class="contact-name">
                        <input placeholder="First Name*" type="text" name="firstname" id="firstName" maxlength="255" required>
                        <input placeholder="Last Name" type="text" name="lastname" id="lastName" maxlength="255" required>
                    </div>

                    <div class="contact-contact">
                        <input placeholder="Email*" type="email" name="email" id="email" maxlength="255" required>
                        <input placeholder="Phone number*" type="tel" name="phone number" id="phoneNumber" maxlength="255" required>
                    </div>

                    <div class="contact-property">
                        <select name="property type" id="propertyType" required>
                            <option value="">Property type*</option>
                            <option value="apartment">Apartment</option>
                            <option value="house">House</option>
                        </select>

                        <input placeholder="Property's post code*" type="text" name="postal code" id="lastName" maxlength="6" required>

                        <select name="number of bedroom" id="numberBedrooms" required>
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
                    <input class="contact-form--submit" type="submit" value="SEND MESSAGE">
                </form>
            </div>
        </div>
    </section>

    <footer></footer>

</body>
</html>