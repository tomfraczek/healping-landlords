<div class="contact-mobile--container">
    <button id="contactButton" class="contact-mobile--button">REQUEST MORE INFORMATION</button>

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
            <p>By submitting your details you consent to being contacted by Rentsecured by telephone and email. Your contact will not be shared with any 3rd party</p>
        </div>

        <input class="contact-form--submit" type="submit" name="submit" value="SEND MESSAGE">
    </form>
</div>

<script>
    let isOpen = false;
    document.querySelector('#contactButton').addEventListener('click', function () {
        if (isOpen === false){
            document.querySelector('.contact-mobile--container').classList.add('contact-open');
            document.querySelector('#contactButton').innerHTML = 'CLOSE';

            isOpen = true;
        } else {
            document.querySelector('.contact-mobile--container').classList.remove('contact-open');
            document.querySelector('#contactButton').innerHTML = 'REQUEST MORE INFORMATION';
            isOpen = false;
        }
    })
</script>