<?php
$this->headTitle('Hochzeitsalbum erstellen | Hochzeitsfotoalbum | PikPerfect');
$this->headMeta()->appendName('description', 'Ein Hochzeitsalbum gestalten einfach gemacht: Unser Designteam erstellt ein edles Hochzeitsfotoalbum genau nach deinen Wünschen. Mit Qualitätsgarantie.');
$region = $this->region()->getUserRegion();
?>

<section class="section-hero__image-left">
    <div class="section-hero__wrap-flex">
        <div class="section-hero__image-col px-0">
            <figure class="figure-webp">
                <picture data-priority="0" data-name="pikperfect-wedding-albums" data-path="3.0_wedding_ablums" class="picture-webp">
                    <source class="toggle-img--js" srcset="/assets/images/towebp/3.0_wedding_ablums/min-pikperfect-wedding-albums.webp" type="image/webp">
                    <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/3.0_wedding_ablums/pikperfect-wedding-albums.jpg" alt="Hochzeitsalbum Beispiele auf Tisch">
                </picture>


            </figure>
        </div>
        <div class="section-hero__content-col">
            <div class="section-hero__bg">
                <picture data-priority="0" data-name="image_texture" data-path="" class="picture-webp">
                    <source class="toggle-img--js" srcset="/assets/images/towebp//min-image_texture.webp" type="image/webp">
                    <img loading="lazy" class="nowebp-img" src="/assets/images/towebp//image_texture.jpg" alt="bg-hero">
                </picture>


            </div>
            <div class="section-hero__picture section-hero__picture_bottom">
                <picture>
                    <source media="(max-width: 500px)" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=">
                    <img src="/assets/images/towebp/3.0_wedding_ablums/Illustration-leaflets.png" alt="picture leaflets">
                </picture>
            </div>
            <h1 class="section-hero__size-title">Hochzeitsalbum</h1>
            <p>Arbeite mit unseren Designspezialisten zusammen, um von eurem schönsten Tag ein Hochzeitsalbum zu erstellen.</p>
            <a href="<?php echo $this->languageUrl('upload-photos-') ?>?occasion=1" class="button button__green-opacity">GESTALTUNG ANFANGEN</a>
            <p class="small">Keine Anzahlung erforderlich</p>
        </div>
    </div>
</section>
<section class="section-logos">
    <div class="section-logos__container">
        <div class="section-logos__wrap">
            <p>Wie gesehen in</p>
            <div class="section-logos__img">
                <img src="/assets/images/logo_cosmopolitan.svg" alt="logo_cosmopolitan">
            </div>
            <div class="section-logos__img">
                <img src="/assets/images/logo_brides.svg" alt="logo_brides">
            </div>
            <div class="section-logos__img">
                <img src="/assets/images/logo_the_knot.svg" alt="logo_the_knot">
            </div>
            <div class="section-logos__img">
                <img src="/assets/images/logo-woman-getting-married.png" alt="logo-woman-getting-married">
            </div>
        </div>
    </div>
</section>
<section class="description-img">
    <div class="description-img__container">
        <div class="description-img__wrap">
            <div class="description-img__img">
                <div class="swiper-container swiperDescription">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure style="padding-bottom: calc(713% / 788 * 100)" class="figure-webp">
                                <picture data-priority="1" data-name="flushmount-wedding-album" data-path="3.0_wedding_ablums" class="picture-webp">
                                    <source class="toggle-img--js" srcset="/assets/images/towebp/3.0_wedding_ablums/min-flushmount-wedding-album.webp" type="image/webp">
                                    <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/3.0_wedding_ablums/flushmount-wedding-album.jpg" alt="Hochwertiges Fotoalbum mit Brautpaar">
                                </picture>

                            </figure>

                        </div>
                        <div class="swiper-slide">
                            <figure style="padding-bottom: calc(713% / 788 * 100)" class="figure-webp">
                                <picture data-priority="2" data-name="flush-mount-wedding-album" data-path="3.0_wedding_ablums" class="picture-webp">
                                    <source class="toggle-img--js" srcset="/assets/images/towebp/3.0_wedding_ablums/min-flush-mount-wedding-album.webp" type="image/webp">
                                    <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/3.0_wedding_ablums/flush-mount-wedding-album.jpg" alt="Hochwertiges Fotoalbum Hochzeit offen">
                                </picture>

                            </figure>

                        </div>
                    </div>
                    <div class="swiperDescription-pagination"></div>
                </div>
            </div>
            <div class="description-img__content description-img__content_padding">
                <h2 class="description-img__title"><span>Unsere Luxuslinie</span> Premium Layflat Hochzeitsalbum</h2>
                <p>Der Mercedes unter den Hochzeitsalben wird aus hochwertigsten Materialien handgefertigt und ist mit dicken Layflat-Seiten ideal, um eure Hochzeit gebührend zu verewigen.</p>
                <p>Unsere Hochzeitsalbum-Gestaltung hält eure Erinnerungen perfekt inszeniert fest, kombiniert mit vielen Premium-Optionen, wie Luxus Echtleder-Einbänden und Profi-Fotopapier.</p>
                <p class="description-img__price"><?php echo $this->translate('From') . ' ' . $this->format(
                                                        $this->smallestPrices['premium'],
                                                        $region->iso,
                                                        2,
                                                        $region->symbol
                                                    ); ?>.</p>
                <div class="description-img__buttons">
                    <a href="<?php echo $this->languageUrl('upload-photos-', false, ['product' => 'premium']) ?>?occasion=1" class="button">BESTELLEN</a>
                    <a href="<?php echo $this->languageUrl('static-premium-layflat-wedding-albums-') ?>" class="button button__gray">MEHR ERFAHREN</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="description-img description-img__order">
    <div class="description-img__container">
        <div class="description-img__wrap">
            <div class="description-img__img">
                <div class="swiper-container swiperDescription">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure style="padding-bottom: calc(713% / 788 * 100)" class="figure-webp">
                                <picture data-priority="2" data-name="layflat-wedding-album" data-path="3.0_wedding_ablums" class="picture-webp">
                                    <source class="toggle-img--js" srcset="/assets/images/towebp/3.0_wedding_ablums/min-layflat-wedding-album.webp" type="image/webp">
                                    <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/3.0_wedding_ablums/layflat-wedding-album.jpg" alt="Echtfotobuch Hochzeit mit Fotos der Braut">
                                </picture>

                            </figure>

                        </div>
                        <div class="swiper-slide">
                            <figure style="padding-bottom: calc(713% / 788 * 100)" class="figure-webp">
                                <picture data-priority="4" data-name="layflat-wedding-photo-album" data-path="3.0_wedding_ablums" class="picture-webp">
                                    <source class="toggle-img--js" srcset="/assets/images/towebp/3.0_wedding_ablums/min-layflat-wedding-photo-album.webp" type="image/webp">
                                    <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/3.0_wedding_ablums/layflat-wedding-photo-album.jpg" alt="Echtfotobuch Hochzeit Bindung">
                                </picture>

                            </figure>

                        </div>
                    </div>
                    <div class="swiperDescription-pagination"></div>
                </div>
            </div>
            <div class="description-img__content description-img__content_padding">
                <h2 class="description-img__title"><span>Unser Bestseller</span>Layflat Hochzeitsfotoalbum</h2>
                <p>Unser Echtfoto-Hochzeitsalbum eignet sich ideal für Panoramabilder, die nahtlos auf einer Doppelseite gezeigt werden.</p>
                <p>Dieses Fotobuch wird mit einem fast unsichtbaren Falz auf echtem Fuji-Albumpapier entwickelt und gilt als eines der besten Hochzeitsalben für frisch Vermählte.</p>
                <p class="description-img__price"><?php echo $this->translate('From') . ' ' . $this->format(
                                                        $this->smallestPrices['layflat'],
                                                        $region->iso,
                                                        2,
                                                        $region->symbol
                                                    ); ?>.</p>
                <div class="description-img__buttons">
                    <a href="<?php echo $this->languageUrl('upload-photos-', false, ['product' => 'layflat']) ?>?occasion=1" class="button">BESTELLEN</a>
                    <a href="<?php echo $this->languageUrl('static-layflat-wedding-photo-albums-') ?>" class="button button__gray">MEHR ERFAHREN</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="description-img">
    <div class="description-img__container">
        <div class="description-img__wrap">
            <div class="description-img__img">
                <div class="swiper-container swiperDescription">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure style="padding-bottom: calc(713% / 788 * 100)" class="figure-webp">
                                <picture data-priority="3" data-name="large-wedding-photo-book" data-path="3.0_wedding_ablums" class="picture-webp">
                                    <source class="toggle-img--js" srcset="/assets/images/towebp/3.0_wedding_ablums/min-large-wedding-photo-book.webp" type="image/webp">
                                    <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/3.0_wedding_ablums/large-wedding-photo-book.jpg" alt="Grosses Hochzeitsfotobuch offen liegend">
                                </picture>

                            </figure>

                        </div>
                        <div class="swiper-slide">
                            <figure style="padding-bottom: calc(713% / 788 * 100)" class="figure-webp">
                                <picture data-priority="5" data-name="wedding-photo-book" data-path="3.0_wedding_ablums" class="picture-webp">
                                    <source class="toggle-img--js" srcset="/assets/images/towebp/3.0_wedding_ablums/min-wedding-photo-book.webp" type="image/webp">
                                    <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/3.0_wedding_ablums/wedding-photo-book.jpg" alt="Hochzeitsfotobuch Details">
                                </picture>

                            </figure>

                        </div>
                    </div>
                    <div class="swiperDescription-pagination"></div>
                </div>
            </div>
            <div class="description-img__content description-img__content_padding">
                <h2 class="description-img__title"><span>Unser Klassiker</span> Hochzeitsfotobuch</h2>
                <p>Unser Hardcover Hochzeitsfotobuch wird auf branchenführenden Maschinen digital gedruckt und hält jeden einzelnen Moment eures besonderen Tages fest.</p>
                <p> Mit bis zu 1’000 Fotos, die elegant auf grosszügigen 244 Seiten gezeigt werden können - falls alle Hochzeitsfotos ins Album müssen.</p>
                <p class="description-img__price"><?php echo $this->translate('From') . ' ' . $this->format(
                                                        $this->smallestPrices['photobook'],
                                                        $region->iso,
                                                        2,
                                                        $region->symbol
                                                    ); ?>.</p>
                <div class="description-img__buttons">
                    <a href="<?php echo $this->languageUrl('upload-photos-', false, ['product' => 'standard']) ?>?occasion=1" class="button">BESTELLEN</a>
                    <a href="<?php echo $this->languageUrl('static-wedding-photo-books-') ?>" class="button button__gray">MEHR ERFAHREN</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo $this->partial('application/partial/why_choose_us') ?>
<section class="section-img">
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
        <div class="lazy-video__item "><iframe frameborder="0" class="lazy-video__activator-js" data-src="https://player.vimeo.com/video/574883048?background=1 " allow="autoplay; fullscreen; picture-in-picture" title="Custom Wedding Albums Online"></iframe>
        </div>
    </div>
</section>
<section class="section-service">
    <h2 class="section-service__title">Hochzeitsalbum gestalten</h2>
    <p class="section-service__entered">Lass unser Team erfahrener Hochzeitsalbum-Designer deine Vorstellungen zum Leben erwecken. Jedes Album wird unverbindlich erstellt, d.h. die Zahlung ist erst erforderlich, wenn du vollständig zufrieden bist und das Design freigibst. Profitiere von unbegrenzten gratis Überarbeitungen und unserem optionalen Fotoauswahl-Service, der auch beim Auswählen Tausender Bilder Hilfe bietet.</p>
    <div class="section-service__cards">
        <div class="section-service__card">
            <h3 class="section-service__number">1.</h3>
            <h4 class="section-service__name-service">Du wählst</h4>
            <p>Teil uns deinen gewünschten Fotobuchtyp und Albumdesignstil mit und lade deine Fotos hoch.</p>
        </div>
        <div class="section-service__card">
            <h3 class="section-service__number">2.</h3>
            <h4 class="section-service__name-service">Wir gestalten</h4>
            <p>Unsere Fotobuch Designer erwecken dein Album zum Leben. Überarbeitungen inklusive.</p>
        </div>
        <div class="section-service__card">
            <h3 class="section-service__number">3.</h3>
            <h4 class="section-service__name-service">Zahle zum Drucken</h4>
            <p>Zahle erst, wenn du 100 % mit dem Design zufrieden bist <br> (ohne Kaufverpflichtung).</p>
        </div>
    </div>
    <div class="section-service__buttons">
        <a href="<?php echo $this->languageUrl('upload-photos-') ?>?occasion=1" class="button">BUCH STARTEN</a>
        <a href="<?php echo $this->languageUrl('static-howItWorks-') ?>" class="button button__light_border">MEHR ERFAHREN</a>
    </div>
</section>
<section class="section-album section-album_gray">
    <div class="section-album__container">
        <h2 class="section-album__title">Fotoalbum gestalten Ideen</h2>
        <p class="section-album__entered">Lass dich von unseren beliebtesten Designstilen für ein Hochzeitsalbum inspirieren. Oder erstell mit uns einen einzigartigen Stil für euren schönsten Tag.</p>
        <div class="swiper-container swiperalbum ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <figure style="padding-bottom: calc(330% / 330 * 100)" class="figure-webp">
                        <picture data-priority="1" data-name="album_our_best_day" data-path="3.0_wedding_ablums" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/3.0_wedding_ablums/min-album_our_best_day.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/3.0_wedding_ablums/album_our_best_day.jpg" alt="album our best day">
                        </picture>

                    </figure>


                    <h3 class="section-album__name-title">Our Best Day<span>Wedding Album</span></h3>
                </div>
                <div class="swiper-slide">
                    <figure style="padding-bottom: calc(330% / 330 * 100)" class="figure-webp">
                        <picture data-priority="1" data-name="album_william_emma" data-path="3.0_wedding_ablums" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/3.0_wedding_ablums/min-album_william_emma.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/3.0_wedding_ablums/album_william_emma.jpg" alt="album william emma">
                        </picture>

                    </figure>


                    <h3 class="section-album__name-title">William & Emma<span>Wedding Album</span></h3>
                </div>
                <div class="swiper-slide">
                    <figure style="padding-bottom: calc(330% / 330 * 100)" class="figure-webp">
                        <picture data-priority="1" data-name="album_diana_dennis" data-path="3.0_wedding_ablums" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/3.0_wedding_ablums/min-album_diana_dennis.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/3.0_wedding_ablums/album_diana_dennis.jpg" alt="album diana dennis">
                        </picture>

                    </figure>


                    <h3 class="section-album__name-title">Diana & Dennis<span>Wedding Album</span></h3>
                </div>
                <div class="swiper-slide">
                    <figure style="padding-bottom: calc(330% / 330 * 100)" class="figure-webp">
                        <picture data-priority="1" data-name="album_william_emma" data-path="3.0_wedding_ablums" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/3.0_wedding_ablums/min-album_william_emma.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/3.0_wedding_ablums/album_william_emma.jpg" alt="album william emma">
                        </picture>

                    </figure>


                    <h3 class="section-album__name-title">William & Emma<span>Wedding Album</span></h3>
                </div>
            </div>
            <div class="swiper-pagination swiperalbum-pagination"></div>
        </div>
        <div class="section-album__button">
            <a href="<?php echo $this->languageUrl('static-wedding-album-examples-') ?>" class="button button__light-gray">view more</a>
        </div>
    </div>
</section>
<section class="section-reviews">
    <div class="container">
        <h2 class="d-none"> reviews</h2>
        <?php echo $this->partial('application/partial/reviews') ?>
        <?php echo $this->partial('application/partial/reviews-box') ?>
    </div>
</section>
<section class="section-book">
    <div class="section-book__container">
        <h2 class="section-book__title">Schöne Ergänzungen für dein Hochzeitsalbum</h2>
        <div class="section-book__wrap">
            <a href="<?php echo $this->languageUrl('static-photo-album-boxes-') ?>" class="button button__light-gray">view more</a>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>Learn more</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="album_boxes" data-path="3.0_wedding_ablums" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/3.0_wedding_ablums/min-album_boxes.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/3.0_wedding_ablums/album_boxes.jpg" alt="album boxes">
                        </picture>

                    </figure>


                </div>
                <h3 class="section-book__name-box">Geschenkbox</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-parent-albums-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>Learn more</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="1" data-name="wedding-album-parent-copies" data-path="3.0_wedding_ablums" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/3.0_wedding_ablums/min-wedding-album-parent-copies.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/3.0_wedding_ablums/wedding-album-parent-copies.jpg" alt="wedding-album-parent-copies">
                        </picture>
                    </figure>
                </div>
                <h3 class="section-book__name-box">Elternkopien</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-wedding-guest-books-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>Learn more</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="wedding-guest-books" data-path="3.0_wedding_ablums" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/3.0_wedding_ablums/min-wedding-guest-books.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/3.0_wedding_ablums/wedding-guest-books.jpg" alt="offenes Gästebuch Hochzeit">
                        </picture>
                    </figure>
                </div>
                <h3 class="section-book__name-box">Gästebuch</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-engagement-photo-book-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>Learn more</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="engagement-photo-albums" data-path="3.0_wedding_ablums" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/3.0_wedding_ablums/min-engagement-photo-albums.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/3.0_wedding_ablums/engagement-photo-albums.jpg" alt="Verlobungsfotobuch Einband">
                        </picture>

                    </figure>


                </div>
                <h3 class="section-book__name-box">Verlobungsalbum</h3>
            </a>
        </div>
    </div>
</section>
<section class="section-video-content section-video-content__img">
    <div class="section-video-content__container">
        <div class="section-video-content__images">
            <figure style="padding-bottom: calc(400% / 524 * 100)" class="figure-webp">
                <picture data-priority="2" data-name="custom-wedding-albums" data-path="3.0_wedding_ablums" class="picture-webp">
                    <source class="toggle-img--js" srcset="/assets/images/towebp/3.0_wedding_ablums/min-custom-wedding-albums.webp" type="image/webp">
                    <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/3.0_wedding_ablums/custom-wedding-albums.jpg" alt="Hochzeitsalben mit individuell gestaltetem Titel">
                </picture>
            </figure>
        </div>
        <div class="section-video-content__content">
            <h2 class="section-video-content__title">Unsere Qualitätsgarantie</h2>
            <p>Wir sind stolz auf ein Hochzeitsalbum, das du für die kommenden Jahre schätzen wirst. Wenn du mit der Qualität deines Albums nicht ganz zufrieden bist, teil es uns mit und wir bringen es in Ordnung.</p>
        </div>
    </div>
</section>
<section class="section-text">
    <div class="section-text__container">
        <h2 class="section-text__title">Hochzeitsalbum erstellen und drucken</h2>
        <div class="section-text__content">
            <p>Du willst dein Verlobungs-Fotoshooting in einem wunderschönen <a target="_blank" href="<?php echo $this->languageUrl('static-engagement-photo-book-') ?>">Verlobungsfotobuch</a> festhalten oder für den Moment, in dem ihr „Ja“ gesagt habt, ein Hochzeitsalbum online erstellen. Verlass dich dabei auf unsere erfahrenen Hochzeitsalbum-Designer, um ein <a target="_blank" href="<?php echo $this->languageUrl('static-premium-layflat-wedding-albums-') ?>">edles Hochzeitsalbum</a> zu erstellen, das deinen eigenen Stil wirklich widerspiegelt.</p>
            <p>Mit unserem persönlichen Hochzeitsalbum Gestaltungsservice erstellst du ein atemberaubendes Album, das zu deinem Budget und deinen Individualisierungs-Wünschen passt. Wähle aus hochwertigen Albumeinbänden, ergänzt durch High-End Archiv Fotoalbumpapiere.</p>
            <p>Als Inspiration teilen unser talentierten <a target="_blank" href="<?php echo $this->languageUrl('static-howItWorks-') ?>">Hochzeitsalbum-Designer</a> gerne verschiedene Tipps & Ideen zur Album Gestaltung mit dir. Von der Erstellung eleganter Layouts bis zur Fotoauswahl, um die Geschichte eurer Hochzeit am besten zu erzählen, nehmen wir dir die harte Arbeit für die Erstellung des ultimativen Andenkens ab.</p>
            <p>Wenn du mit PikPerfect ein Hochzeitsfotoalbum oder ein <a target="_blank" href="<?php echo $this->languageUrl('static-wedding-guest-books-') ?>">Hochzeitsgästebuch mit Fotos</a> erstellst, bezahlst du erst, wenn du mit dem Design vollkommen zufrieden bist. Wir gestalten jedes Fotoalbum zur Hochzeit von Grund auf neu, um deine Vorstellungen umzusetzen. Unser Service umfasst unbegrenzte kostenlose Überarbeitungen, damit das fertige Album absolut perfekt ist und einen Ehrenplatz auf deinem Couchtisch bekommt und mit Familie und Freunden geteilt wird.</p>
        </div>
    </div>
</section>

<?php echo $this->render('partial/quick_chat.phtml'); ?>