<?php
$this->headTitle('Qualitätsgarantie | PikPerfect');
$this->headMeta()->appendName('description', 'Wir sind sehr stolz auf unsere Fotobücher und Hochzeitsalben, die gemacht sind, um ein Leben lang zu halten, und für die wir eine Qualitätsgarantie geben.');
?>

<section class="section-title">
    <div class="section-title__container">
        <h1 class="section-title__title"><span>help</span>Qualitätsgarantie</h1>
    </div>
</section>
<section class="section-content">
    <div class="section-content__wrap">
        <div class="section-sidebar">
            <h3 class="section-sidebar__title">Help Topics</h3>
            <?php echo $this->partial('application/static/help_menu') ?>
        </div>
        <div class="section-content__context">
            <p>Wir sind sehr stolz auf unsere Fotobücher und Hochzeitsalben und stehen zu den von uns hergestellten Produkten. Sie sind gemacht, um ein Leben lang zu halten. Solltest du mit der Qualität deiner Bestellung nicht ganz zufrieden sein, kontaktiere uns bitte innerhalb von 14 Tagen nach Erhalt. Wir tun alles, um es in Ordnung zu bringen.</p>
            <p class="section-content__text-bottom">Wenn der Produktion ein Fehler unterlaufen ist oder das Album auf dem Transportweg beschädigt wurde (nur Expressversand, Standardversand ist nicht versichert), sende uns bitte einige klare Fotos des Buches und der Verpackung, um das Problem zu verdeutlichen. Wir kümmern uns darum.</p>
            <div class="section-img video-full-hd section-img_mt-77">
                <div class="lazy-video">
                    <div class="lazy-video__preloader">
                        <svg class="lazy-video__preloader-svg" width="60" height="60" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg" stroke="#8ba4b4">
                            <g fill="none" fill-rule="evenodd">
                                <g transform="translate(1 1)" stroke-width="2">
                                    <circle stroke-opacity=".5" cx="18" cy="18" r="18" />
                                    <path d="M36 18c0-9.94-8.06-18-18-18">
                                        <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="1s" repeatCount="indefinite" />
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="lazy-video__item "><iframe frameborder="0" class="lazy-video__activator-js" data-src="https://player.vimeo.com/video/576814404?background=1 " allow="autoplay; fullscreen; picture-in-picture" title="Premium Photo Albums - PikPerfect"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-transition section-transition_gray">
    <div class="container">
        <div class="section-transition__content">
            <h2 class="section-transition__title">Bereit, dein Fotobuch zu erstellen?</h2>
        </div>
        <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="button section-transition__button">JETZT ANFANGEN</a>
    </div>
</section>
<?php echo $this->render('partial/quick_chat.phtml'); ?>