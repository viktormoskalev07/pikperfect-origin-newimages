<?php
$this->headTitle('Frequently Asked Questions | PikPerfect');
$this->headMeta()->appendName('description', 'We cover the options and answers to some commonly asked questions about making wedding albums and photo books.');
?>
<section class="section-img section-img_size-m m-auto">
    <figure class="figure-webp">
        <picture data-priority="0" data-name="jade_nikkole_hotography" data-path="4.0-help" class="picture-webp">
            <source class="toggle-img--js" srcset="/assets/images/towebp/4.0-help/min-jade_nikkole_hotography.webp" type="image/webp">
            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/4.0-help/jade_nikkole_hotography.jpg" alt="two people with open album">
        </picture>


    </figure>
    <div class="section-img__block-wrap">
        <div class="section-img__block">
            <h1 class="section-img__title">Help Center</h1>
            <p class="section-img__text">Answers to some commonly asked questions</p>
        </div>
    </div>
</section>
<section class="section-card">
    <div class="section-card__container">
        <div class="section-card__wrap">
            <a href="<?php echo $this->languageUrl('static-help-book-vs-photo-album-') ?>" class="section-card__card">
                <h3 class="section-card__title">Product Comparison</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-photo-book-design-service-') ?>" class="section-card__card">
                <h3 class="section-card__title">Design Service</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-photo-selection-service-') ?>" class="section-card__card">
                <h3 class="section-card__title">Photo Selection Service</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-photo-editing-service-') ?>" class="section-card__card">
                <h3 class="section-card__title">Photo Editing Service</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-photo-album-cover-designs-') ?>" class="section-card__card">
                <h3 class="section-card__title">Photo Album Cover Designs</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-photo-book-printing-papers-') ?>" class="section-card__card">
                <h3 class="section-card__title">Paper Types & Printing</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-uploading-photos-') ?>" class="section-card__card">
                <h3 class="section-card__title">Uploading Photos</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-prices-') ?>" class="section-card__card">
                <h3 class="section-card__title">Prices & Delivery Times</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-payment-shipping-') ?>" class="section-card__card">
                <h3 class="section-card__title">Payment & Shipping</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-my-account-') ?>" class="section-card__card">
                <h3 class="section-card__title">Orders & Account</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-quality-guarantee-') ?>" class="section-card__card">
                <h3 class="section-card__title">Quality Guarantee</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-pikperfect-discounts-') ?>" class="section-card__card">
                <h3 class="section-card__title">Volume Discounts</h3>
            </a>
        </div>
        <p class="section-card__button-text">If you're not able to find answers to your questions here, <a href="<?php echo $this->languageUrl('contact-') ?>" class="link" target="_blank">contact us</a> and we'll be happy to help.</p>
    </div>
</section>

<?php echo $this->partial('application/partial/why_choose_us', ['color' => 'dignity_gray']) ?>
<?php echo $this->render('partial/quick_chat.phtml'); ?>