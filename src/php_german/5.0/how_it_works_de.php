<?php
$this->headTitle('Fotobuch & Hochzeitsalbum Gestaltungsservice | PikPerfect');
$this->headMeta()->appendName('description', 'Ein Fotobuch oder Hochzeitsalbum professionell erstellen lassen: Dein PikPerfect-Designer setzt deine Vorstellungen in einem wunderschönen Fotoalbum um.');
$region = $this->region()->getUserRegion();
?>
<section class="section-hero__image-left">
    <div class="section-hero__wrap-flex">
        <div class="section-hero__image-col px-0">
            <figure class="figure-webp">
                <picture data-priority="0" data-name="wedding-album-design-ideas" data-path="5.0-album-design-service" class="picture-webp">
                    <source class="toggle-img--js" srcset="/assets/images/towebp/5.0-album-design-service/min-wedding-album-design-ideas.webp" type="image/webp">
                    <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/5.0-album-design-service/wedding-album-design-ideas.jpg" alt="Beispiel unterschiedlicher Gestltungsstile Hochzeitsalbum">
                </picture>


            </figure>
        </div>
        <div class="section-hero__content-col section-hero__content-col_dirty-orange">
            <div class="section-hero__bg">
                <picture data-priority="0" data-name="image_texture" data-path="" class="picture-webp">
                    <source class="toggle-img--js" srcset="/assets/images/towebp//min-image_texture.webp" type="image/webp">
                    <img loading="lazy" class="nowebp-img" src="/assets/images/towebp//image_texture.jpg" alt="bg-hero">
                </picture>


            </div>
            <div class="section-hero__picture section-hero__picture_flover">
                <picture>
                    <source media="(max-width: 500px)" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=">
                    <img src="/assets/images/towebp/5.0-album-design-service/illustration_flover.png" alt="picture flover">
                </picture>
            </div>
            <h1 class="section-hero__size-title">Fotobuch Designservice</h1>
            <p>Ein Fotobuch professionell erstellen lassen: Dein persönlicher Designer gestaltet es genau nach deinen Vorstellungen.</p>
            <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="button button__dirty-orange">start now</a>
        </div>
    </div>
</section>
<section class="dignity dignity_blocks dignity_p-0">
    <div class="dignity__container">
        <div class="dignity__wrap">
            <div class="dignity__block dignity__block_center">
                <div class="dignity__img">
                    <img src="/assets/images/circle_no_advance_payment.svg" alt="circle_no_advance_payment">
                </div>
                <div class="dignity__content">
                    <h3>Keine Anzahlung</h3>
                </div>
            </div>
            <div class="dignity__block dignity__block_center">
                <div class="dignity__img">
                    <img src="/assets/images/circle_unlimited_revisions.svg" alt="circle_unlimited_revisions">
                </div>
                <div class="dignity__content">
                    <h3>Unbegrenzte Überarbeitungen</h3>
                </div>
            </div>
            <div class="dignity__block dignity__block_center">
                <div class="dignity__img">
                    <img src="/assets/images/circle_album_design.svg" alt="circle_album_design">
                </div>
                <div class="dignity__content">
                    <h3>Fotoalbum Design nur <?php echo
                                            $this->format(
                                                $region->design,
                                                $region->iso,
                                                2,
                                                $region->symbol
                                            ); ?>
                        / Seite</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-service section-service_with-img">
    <div class="section-service__cards m-0">
        <div class="section-service__card">
            <h3 class="section-service__number">1.</h3>
            <h4 class="section-service__name-service">Deine Wünsche</h4>
            <p style="max-width: 300px;">Lade deine Fotos hoch und teil uns deine Wünsche mit (oder lass uns etwas empfehlen). Wir helfen auch bei der Fotoauswahl, schick so viele Bilder wie du magst.</p>
            <div class="section-service__img" style="max-width: 350px; max-height: 255px;">
                <figure style="padding-bottom: calc(255% / 350 * 100)" class="figure-webp">
                    <picture data-priority="2" data-name="illustration_your_brief" data-path="5.0-album-design-service" class="picture-webp">
                        <source class="toggle-img--js" srcset="/assets/images/towebp/5.0-album-design-service/min-illustration_your_brief.webp" type="image/webp">
                        <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/5.0-album-design-service/illustration_your_brief.png" alt="picture desktop and mobile wuth photo">
                    </picture>

                </figure>


            </div>
        </div>
        <div class="section-service__card">
            <h3 class="section-service__number">2.</h3>
            <h4 class="section-service__name-service">Wir gestalten</h4>
            <p style="max-width: 300px;">Nach 3-5 Werktagen erhältst du unseren liebevoll erstellten Fotobuch Entwurf. Alle Designs beinhalten unbegrenzte gratis Überarbeitungen, damit du voll zufrieden bist, bevor das Fotoalbum in Druck geht.</p>
            <div class="section-service__img" style="max-width: 256px; max-height: 217px;">
                <figure style="padding-bottom: calc(217% / 256 * 100)" class="figure-webp">
                    <picture data-priority="2" data-name="illustration_we_design" data-path="5.0-album-design-service" class="picture-webp">
                        <source class="toggle-img--js" srcset="/assets/images/towebp/5.0-album-design-service/min-illustration_we_design.webp" type="image/webp">
                        <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/5.0-album-design-service/illustration_we_design.png" alt="picture desktop with open album">
                    </picture>

                </figure>


            </div>
        </div>
        <div class="section-service__card">
            <h3 class="section-service__number">3.</h3>
            <h4 class="section-service__name-service">Dein Buch</h4>
            <p style="max-width: 300px;">Nach der Freigabe des Fotoalbum Designs und nach Erhalt der Zahlung wird dein Buch professionell gedruckt, sorgfältig verpackt und direkt an deine Tür geliefert.</p>
            <div class="section-service__img" style="max-width: 435px; max-height: 254px;">
                <figure style="padding-bottom: calc(254% / 435 * 100)" class="figure-webp">
                    <picture data-priority="2" data-name="illustration_enjoy" data-path="5.0-album-design-service" class="picture-webp">
                        <source class="toggle-img--js" srcset="/assets/images/towebp/5.0-album-design-service/min-illustration_enjoy.webp" type="image/webp">
                        <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/5.0-album-design-service/illustration_enjoy.png" alt="picture open album in hands">
                    </picture>

                </figure>


            </div>
        </div>
    </div>
</section>
<section class="section-img section-img_mb" style="max-width: 1300px;">
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
        <div class="lazy-video__item "><iframe frameborder="0" class="lazy-video__activator-js" data-src="https://player.vimeo.com/video/569981023?background=1 " allow="autoplay; fullscreen; picture-in-picture" title="Frau blättert durch ein professionell gestaltetes Fotobuch"></iframe>
        </div>
    </div>
</section>
<section class="section-transition">
    <div class="container">
        <div class="section-transition__content">
            <h2 class="section-transition__title">Probier es aus - ohne Anzahlung</h2>
            <p>Ein Fotobuch oder Hochzeitsalbum professionell gestalten lassen - ganz unverbindlich. Gefällt dir deine Fotobuchgestaltung nicht, besteht keine Kaufverpflichtung (und du schuldest uns keinen Pfennig).</p>
        </div>
        <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="button button__light section-transition__button section-transition__button_big">FOTOBUCH OHNE SOFTWARE</a>
    </div>
</section>
<section class="section-text section-text_white section-text_size-s">
    <div class="m-auto">
        <h2 class="section-text__title"> Beliebte Fotobuch Layouts</h2>
        <div class="section-text__content">
            <p class="text-entered section-text__container">Unser Fotobuch und Hochzeitsalbum Design Service erstellt jedes Buch von Grund auf neu, zugeschnitten auf deine Bilder und deinen Stil, sodass du ein wirklich <a href="<?php echo $this->languageUrl('static-custom-photo-books-') ?>" target="_blank" class="link">individuelles Fotoalbum</a>. erhältst. Wenn du bei uns ein Buch gestalten lässt, kannst du aus unseren beliebtesten Fotobuch Stilen auswählen oder sie kombinieren. Hast du etwas anderes oder ganz Bestimmtes im Sinn? Teil es uns mit und wir gestalten das Album genau nach diesem Thema.</p>
            <div class="swiper-container swiperBigSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure style="padding-bottom: calc(540% / 1043 * 100)" class="figure-webp">
                            <picture data-priority="1" data-name="image_design_styles" data-path="5.0-album-design-service" class="picture-webp">
                                <source class="toggle-img--js" srcset="/assets/images/towebp/5.0-album-design-service/min-image_design_styles.webp" type="image/webp">
                                <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/5.0-album-design-service/image_design_styles.jpg" alt="Premium photo album with family photos">
                            </picture>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure style="padding-bottom: calc(540% / 1043 * 100)" class="figure-webp">
                            <picture data-priority="1" data-name="wedding-album-design-ideas" data-path="5.0-album-design-service" class="picture-webp">
                                <source class="toggle-img--js" srcset="/assets/images/towebp/5.0-album-design-service/min-wedding-album-design-ideas.webp" type="image/webp">
                                <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/5.0-album-design-service/wedding-album-design-ideas.jpg" alt="Premium photo album with family photos">
                            </picture>

                        </figure>


                    </div>
                    <div class="swiper-slide">
                        <figure style="padding-bottom: calc(540% / 1043 * 100)" class="figure-webp">
                            <picture data-priority="1" data-name="image_design_styles" data-path="5.0-album-design-service" class="picture-webp">
                                <source class="toggle-img--js" srcset="/assets/images/towebp/5.0-album-design-service/min-image_design_styles.webp" type="image/webp">
                                <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/5.0-album-design-service/image_design_styles.jpg" alt="Premium photo album with family photos">
                            </picture>

                        </figure>


                    </div>
                    <div class="swiper-slide">
                        <figure style="padding-bottom: calc(540% / 1043 * 100)" class="figure-webp">
                            <picture data-priority="1" data-name="wedding-album-design-ideas" data-path="5.0-album-design-service" class="picture-webp">
                                <source class="toggle-img--js" srcset="/assets/images/towebp/5.0-album-design-service/min-wedding-album-design-ideas.webp" type="image/webp">
                                <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/5.0-album-design-service/wedding-album-design-ideas.jpg" alt="Premium photo album with family photos">
                            </picture>

                        </figure>


                    </div>
                    <div class="swiper-slide">
                        <figure style="padding-bottom: calc(540% / 1043 * 100)" class="figure-webp">
                            <picture data-priority="1" data-name="image_design_styles" data-path="5.0-album-design-service" class="picture-webp">
                                <source class="toggle-img--js" srcset="/assets/images/towebp/5.0-album-design-service/min-image_design_styles.webp" type="image/webp">
                                <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/5.0-album-design-service/image_design_styles.jpg" alt="Premium photo album with family photos">
                            </picture>

                        </figure>


                    </div>
                    <div class="swiper-slide">
                        <figure style="padding-bottom: calc(540% / 1043 * 100)" class="figure-webp">
                            <picture data-priority="1" data-name="wedding-album-design-ideas" data-path="5.0-album-design-service" class="picture-webp">
                                <source class="toggle-img--js" srcset="/assets/images/towebp/5.0-album-design-service/min-wedding-album-design-ideas.webp" type="image/webp">
                                <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/5.0-album-design-service/wedding-album-design-ideas.jpg" alt="Premium photo album with family photos">
                            </picture>

                        </figure>


                    </div>
                    <div class="swiper-slide">
                        <figure style="padding-bottom: calc(540% / 1043 * 100)" class="figure-webp">
                            <picture data-priority="1" data-name="image_design_styles" data-path="5.0-album-design-service" class="picture-webp">
                                <source class="toggle-img--js" srcset="/assets/images/towebp/5.0-album-design-service/min-image_design_styles.webp" type="image/webp">
                                <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/5.0-album-design-service/image_design_styles.jpg" alt="Premium photo album with family photos">
                            </picture>

                        </figure>


                    </div>
                    <div class="swiper-slide">
                        <figure style="padding-bottom: calc(540% / 1043 * 100)" class="figure-webp">
                            <picture data-priority="1" data-name="wedding-album-design-ideas" data-path="5.0-album-design-service" class="picture-webp">
                                <source class="toggle-img--js" srcset="/assets/images/towebp/5.0-album-design-service/min-wedding-album-design-ideas.webp" type="image/webp">
                                <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/5.0-album-design-service/wedding-album-design-ideas.jpg" alt="Premium photo album with family photos">
                            </picture>

                        </figure>


                    </div>
                    <div class="swiper-slide">
                        <figure style="padding-bottom: calc(540% / 1043 * 100)" class="figure-webp">
                            <picture data-priority="1" data-name="image_design_styles" data-path="5.0-album-design-service" class="picture-webp">
                                <source class="toggle-img--js" srcset="/assets/images/towebp/5.0-album-design-service/min-image_design_styles.webp" type="image/webp">
                                <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/5.0-album-design-service/image_design_styles.jpg" alt="Premium photo album with family photos">
                            </picture>

                        </figure>


                    </div>
                    <div class="swiper-slide">
                        <figure style="padding-bottom: calc(540% / 1043 * 100)" class="figure-webp">
                            <picture data-priority="1" data-name="wedding-album-design-ideas" data-path="5.0-album-design-service" class="picture-webp">
                                <source class="toggle-img--js" srcset="/assets/images/towebp/5.0-album-design-service/min-wedding-album-design-ideas.webp" type="image/webp">
                                <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/5.0-album-design-service/wedding-album-design-ideas.jpg" alt="Premium photo album with family photos">
                            </picture>

                        </figure>


                    </div>
                </div>
                <div class="swiperDescription-pagination"></div>
                <div class="swiper-button-next"><img src="/assets/images/ic_arrow_right.svg" alt="ic_arrow_right"></div>
                <div class="swiper-button-prev"><img src="/assets/images/ic_arrow_left.svg" alt="ic_arrow_left"></div>
            </div>
        </div>
        <a href="<?php echo $this->languageUrl('static-photo-book-samples-') ?>" class="button button__light_border">MEHR SEHEN</a>
    </div>
</section>
<section class="description-img description-img_different">
    <div class="container">
        <div class="description-img__wrap">
            <div class="description-img__img description-img__col-5">
                <figure style="padding-bottom: calc(713% / 572 * 100)" class="figure-webp">
                    <picture data-priority="2" data-name="photo-selection-service" data-path="5.0-album-design-service" class="picture-webp">
                        <source class="toggle-img--js" srcset="/assets/images/towebp/5.0-album-design-service/min-photo-selection-service.webp" type="image/webp">
                        <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/5.0-album-design-service/photo-selection-service.jpg" alt="Fotoauswahlservice bei dem ein/e Designer/in bei der Auwahl der besten Fotos hilft">
                    </picture>

                </figure>


            </div>
            <div class="description-img__content description-img__col-7">
                <h2 class="description-img__title">Fotoauswahl Service<span class="sub-title">CHF0.03 per photo uploaded</span></h2>
                <p>Tausende Fotos und keine Zeit, die besten auszuwählen? Spare Stunden mühevoller Arbeit, indem du uns alle Bilder schickst und die Fotos vorauswählen lässt, die deine Geschichte am besten erzählen.</p>
                <p>Du kannst die Fotoauswahl natürlich noch einmal prüfen und letzte Anpassungen vornehmen, bevor wir mit der Albumgestaltung beginnen.</p>
                <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="button button__gray">FOTOS HOCHLADEN</a>
            </div>
        </div>
    </div>
</section>
<section class="description-img description-img__order">
    <div class="container">
        <div class="description-img__wrap">
            <div class="description-img__img description-img__col-7">
                <figure style="padding-bottom: calc(713% / 802 * 100)" class="figure-webp">
                    <picture data-priority="2" data-name="photo-edits-wedding-albums" data-path="5.0-album-design-service" class="picture-webp">
                        <source class="toggle-img--js" srcset="/assets/images/towebp/5.0-album-design-service/min-photo-edits-wedding-albums.webp" type="image/webp">
                        <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/5.0-album-design-service/photo-edits-wedding-albums.jpg" alt="Beispiel Bildbearbeitung für Hochzeitsalbum">
                    </picture>

                </figure>


            </div>
            <div class="description-img__content description-img__col-5" style="max-width: 360px; box-sizing: content-box; margin: 0 auto;">
                <h2 class="description-img__title">Fotobearbeitung</h2>
                <p>Unser Fotobuch Gestaltungsservice beinhaltet die standardmässige Bearbeitung deiner Fotos für ein optimales Druckergebnis. Wenn ein Foto eine niedrige Auflösung oder schlechte Qualität hat, informieren wir dich.</p>
                <p>Detailliertes Photoshopping, um z.B. Objekte zu entfernen oder einen Hintergrund zu ändern, ist gegen eine Gebühr möglich.</p>
            </div>
        </div>
    </div>
</section>
<section class="section-book section-book_mb">
    <div class="section-book__container">
        <h2 class="section-book__title section-book__title_mb">Nach Anlass erstellen</h2>
        <div class="section-book__wrap section-book__wrap_more">
            <a href="<?php echo $this->languageUrl('static-wedding-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>Mehr erfahren</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="wedding-photo-albums" data-path="1.0-homepage" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-wedding-photo-albums.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/wedding-photo-albums.jpg" alt="Wedding photo album with custom embossing title">
                        </picture>

                    </figure>


                </div>
                <h3 class="section-book__name-box">Hochzeitsalbum</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-baby-photo-books-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>Mehr erfahren</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="baby-photo-books" data-path="1.0-homepage" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-baby-photo-books.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/baby-photo-books.jpg" alt="An open baby photo book">
                        </picture>

                    </figure>


                </div>
                <h3 class="section-book__name-box">Baby Fotobuch</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-family-photo-albums-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>Mehr erfahren</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="family-photo-albums" data-path="1.0-homepage" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-family-photo-albums.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/family-photo-albums.jpg" alt="Family photo album cover">
                        </picture>

                    </figure>


                </div>
                <h3 class="section-book__name-box">Familienalbum</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-travel-photo-books-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>Mehr erfahren</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="travel-photo-books" data-path="1.0-homepage" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-travel-photo-books.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/travel-photo-books.jpg" alt="Turquoise photo book cover">
                        </picture>

                    </figure>


                </div>
                <h3 class="section-book__name-box">Fotoalbum Urlaub</h3>
            </a>
        </div>
        <div class="section-book__wrap section-book__wrap_more">
            <a href="<?php echo $this->languageUrl('static-wedding-guest-books-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>Mehr erfahren</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="wedding-guest-books" data-path="1.0-homepage" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-wedding-guest-books.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/wedding-guest-books.jpg" alt="Open wedding album guest book">
                        </picture>

                    </figure>


                </div>
                <h3 class="section-book__name-box">Gästebuch zur Hochzeit</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-engagement-photo-book-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>Mehr erfahren</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="engagement-photo-albums" data-path="1.0-homepage" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-engagement-photo-albums.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/engagement-photo-albums.jpg" alt="Engagement photo album cover">
                        </picture>

                    </figure>


                </div>
                <h3 class="section-book__name-box">Fotobuch Verlobung</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-cookbook-recipe-photobooks-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>Mehr erfahren</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="cookbook-photobooks" data-path="1.0-homepage" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-cookbook-photobooks.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/cookbook-photobooks.jpg" alt="DIY Cookbook on kitchen counter">
                        </picture>

                    </figure>


                </div>
                <h3 class="section-book__name-box">Kochbuch Fotobuch</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-photographer-photo-albums-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>Mehr erfahren</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="photographer-photo-albums" data-path="1.0-homepage" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-photographer-photo-albums.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/photographer-photo-albums.jpg" alt="Professional photo album in presentation box">
                        </picture>

                    </figure>


                </div>
                <h3 class="section-book__name-box">Photographer Albums</h3>
            </a>
        </div>
    </div>
</section>

<section class="section-reviews">
    <div class="container">
        <h2 class="d-none"> Bewertungen</h2>
        <?php echo $this->partial('application/partial/reviews') ?>
        <?php echo $this->partial('application/partial/reviews-box') ?>
    </div>
</section>

<?php echo $this->render('partial/quick_chat.phtml'); ?>