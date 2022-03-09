<?php
$this->headTitle('Häufige Fragen (FAQ) | Hilfe | PikPerfect');
$this->headMeta()->appendName('description', 'Optionen und Antworten auf einige häufig gestellte Fragen zum Erstellen von Hochzeitsalben und Fotobüchern.');
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
            <h1 class="section-img__title">Hilfe-Center</h1>
            <p class="section-img__text">Antworten auf einige häufig gestellte Fragen</p>
        </div>
    </div>
</section>
<section class="section-card">
    <div class="section-card__container">
        <div class="section-card__wrap">
            <a href="<?php echo $this->languageUrl('static-help-book-vs-photo-album-') ?>" class="section-card__card">
                <h3 class="section-card__title">Produktvergleich</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-photo-book-design-service-') ?>" class="section-card__card">
                <h3 class="section-card__title">Gestaltungsservice</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-photo-selection-service-') ?>" class="section-card__card">
                <h3 class="section-card__title">Fotoauswahlservice</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-photo-editing-service-') ?>" class="section-card__card">
                <h3 class="section-card__title">Fotobearbeitungsservice</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-photo-album-cover-designs-') ?>" class="section-card__card">
                <h3 class="section-card__title">Fotobuch Einbandgestaltung</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-photo-book-printing-papers-') ?>" class="section-card__card">
                <h3 class="section-card__title">Druck & Papiere</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-uploading-photos-') ?>" class="section-card__card">
                <h3 class="section-card__title">Fotos hochladen</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-prices-') ?>" class="section-card__card">
                <h3 class="section-card__title">Preise & Lieferzeiten</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-payment-shipping-') ?>" class="section-card__card">
                <h3 class="section-card__title">Zahlung & Versand</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-my-account-') ?>" class="section-card__card">
                <h3 class="section-card__title">Bestellungen & Konto</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-quality-guarantee-') ?>" class="section-card__card">
                <h3 class="section-card__title">Qualitätsgarantie</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-help-pikperfect-discounts-') ?>" class="section-card__card">
                <h3 class="section-card__title">Mengenrabatt</h3>
            </a>
        </div>
        <p class="section-card__button-text">Falls du hier keine Antworten auf deine Fragen findest, <a href="<?php echo $this->languageUrl('contact-') ?>" class="link" target="_blank">kontaktiere uns</a> einfach. Wir helfen gerne weiter.</p>
    </div>
</section>

<?php echo $this->partial('application/partial/why_choose_us', ['color' => 'dignity_gray']) ?>
<?php echo $this->render('partial/quick_chat.phtml'); ?>