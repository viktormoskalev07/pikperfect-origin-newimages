<?php
$this->headTitle('Kontakt | PikPerfect');
$this->headMeta()->appendName('description', `Hast du Fragen zu unseren Produkten oder unserem Service? Wir helfen gerne.`);
?>


<section class="section-form section-form_800">
    <h1 class="section-form__title">Hast du eine Frage? Wir helfen gerne.</h1>
    <?php
    $this->contactForm->prepare();
    echo $this->form()->openTag($this->contactForm);
    ?>
    <div class="tab-content__row50">
        <div class="tab-content__input">
            <label for="firstName">First Name</label>
            <?php echo $this->formElement($this->contactForm->get('firstName'));
            echo $this->formElementErrors($this->contactForm->get('firstName'));
            ?>
        </div>
        <div class="tab-content__input">
            <label for="lastName">Last Name</label>
            <?php
            echo $this->formElement($this->contactForm->get('lastName'));
            echo $this->formElementErrors($this->contactForm->get('lastName'));
            ?>
        </div>
    </div>
    <div class="tab-content__row50">
        <div class="tab-content__input">
            <label for="email">Email</label>
            <?php
            echo $this->formElement($this->contactForm->get('email'));
            echo $this->formElementErrors($this->contactForm->get('email'));
            ?>
        </div>
        <div class="tab-content__input">
            <label for="confirmEmail">Confirm Email</label>
            <?php
            echo $this->formElement($this->contactForm->get('confirmEmail'));
            echo $this->formElementErrors($this->contactForm->get('confirmEmail'));
            ?>
        </div>
    </div>
    <div class="tab-content__input">
        <label for="message">Your Message</label>
        <?php
        echo $this->formElement($this->contactForm->get('message'));
        echo $this->formElementErrors($this->contactForm->get('message'));
        ?>
        <?php echo $this->formElement($this->contactForm->get('middleName')); ?>

    </div>
    <?php echo $this->formElement($this->contactForm->get('submit')); ?>
    <?php echo $this->formElement($this->contactForm->get('csrf')); ?>
    <?php echo $this->form()->closeTag($this->contactForm) ?>
</section>
<section class="dignity m-auto">
    <div class="dignity__container">
        <h2 class="dignity__title">Why Choose Us?</h2>
        <div class="dignity__wrap">
            <div class="dignity__block">
                <div class="dignity__img">
                    <img src="/assets/images/circle_quality_guarantee.svg" alt="circle_quality_guarantee">
                </div>
                <div class="dignity__content">
                    <h3>Quality Guarantee</h3>
                    <p>We make sure you love your book. Or we'll make it right.</p>
                </div>
            </div>
            <div class="dignity__block">
                <div class="dignity__img">
                    <img src="/assets/images/circle_happy_customers.svg" alt="circle_happy_customers">
                </div>
                <div class="dignity__content">
                    <h3>Happy Customers</h3>
                    <p>Rated 5 stars by thousands of happy customers.</p>
                </div>
            </div>
            <div class="dignity__block">
                <div class="dignity__img">
                    <img src="/assets/images/circle_worldwide_shipping.svg" alt="circle_worldwide_shipping">
                </div>
                <div class="dignity__content">
                    <h3>Worldwide Shipping</h3>
                    <p>Affordable flat rate shipping to most countries.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="info-blocks">
    <div class="info-blocks__container">
        <h2 class="info-blocks__title">Unternehmensanfragen</h2>
        <p>Für allgemeine Anfragen oder Fragen zu deiner Bestellung nutze bitte das obige Kontaktformular.</p>
        <div class="info-blocks__wrap">
            <div class="info-blocks__bl">
                <div class="info-blocks__img">
                    <img src="/assets/images/ic_location.svg" alt="ic_location">
                </div>
                <p class="info-blocks__content">Schlierenstrasse 15, CH-8142 Uitikon (Zurich)</p>
            </div>
            <div class="info-blocks__bl">
                <div class="info-blocks__img">
                    <img src="/assets/images/ic_phone.svg" alt="ic_phone">
                </div>
                <a href="tel:+44 0203 667 3101" class="info-blocks__content">+44 0203 667 3101</a>
            </div>
            <div class="info-blocks__bl">
                <div class="info-blocks__img">
                    <img src="/assets/images/ic_email.svg" alt="ic_email">
                </div>
                <a href="mailto:maike@pikperfect.com" class="info-blocks__content">maike@pikperfect.com</a>
            </div>
        </div>
    </div>
</section>