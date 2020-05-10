<?php include 'header.php';?>

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

<section id="reviews" class="reviews">
    <div class="container">
        <h3 class="section-header">— Our Client Reviews</h3>
        <div class="reviews-card--container">
            <div class="review-card">
                <div class="review-card--header">
                    <img class="review-card--header__head" src="./img/review1.jpg" alt="">
                    <p class="review-name">Anthony, London</p>
                    <img src="./img/format.svg" alt="" class="review-card--header__qoute--icon">
                </div>
                <p class="review-card--content">RentSecured have helped me a lot! They take care of everything and pay me a fixed long term rent every month without fail. I am delighted that I have saved time and money by working with them!</p>

            </div>

            <div class="review-card">
                <div class="review-card--header">
                    <img class="review-card--header__head" src="./img/review2.jpg" alt="">
                    <p class="review-name">Azad, London</p>
                    <img src="./img/format.svg" alt="" class="review-card--header__qoute--icon">
                </div>
                <p class="review-card--content">Since the Covid outbreak, I have had real challenges keeping all of my properties filled 100% of the time. Since working with RentSecured, I have found a way of avoiding rent loss !</p>

            </div>

            <div class="review-card">
                <div class="review-card--header">
                    <img class="review-card--header__head" src="./img/review3.jpg" alt="">
                    <p class="review-name">Matt, London</p>
                    <img src="./img/format.svg" alt="" class="review-card--header__qoute--icon">
                </div>
                <p class="review-card--content">RentSecured saved me from repossession! They payed me a fixed long term rent every month that really helped me get my finances back!</p>
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