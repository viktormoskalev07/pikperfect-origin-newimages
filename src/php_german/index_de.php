<?php
$this->headTitle($this->translate('Professional Photo Books & Photo Albums Online | PikPerfect'));
$this->headMeta()->appendName('description', $this->translate('Create professional photo books and photo albums online. Work with our design specialist to craft a photo album you`ll cherish for life.'));
$region = $this->region()->getUserRegion();
?>
<section class="section-hero__image-right">
    <div class="section-hero__wrap-flex">
        <div class="section-hero__image-col px-0">
            <figure class="figure-webp">
                <picture data-priority="0" data-name="professional-photo-albums" data-path="1.0-homepage" class="picture-webp">
                    <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-professional-photo-albums.webp" type="image/webp">
                    <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/professional-photo-albums.jpg" alt="Beispiel Fotobuch für Fotografen auf Holztisch">
                </picture>


            </figure>
        </div>
        <div class="section-hero__content-col section-hero__content-col_gray">
            <div class="section-hero__bg">
                <img src="/assets/images/towebp/image_texture.jpg" alt="bg-hero">
            </div>
            <h1 class="section-hero__home-title">Fotoalben & Fotobücher erstellen</h1>
            <h2 class="section-hero__sub-home-title">ERINNERUNGEN BEWAHREN</h2>
            <p>Unsere Designexperten erstellen mit dir ein wunderschönes Fotobuch, das ein Leben lang Freude macht.</p>
            <a href="<?php echo $this->languageUrl('static-photo-books-') ?>" class="button button__gray-dark">ZUM SORTIMENT</a>
        </div>
    </div>
</section>
<section class="section-logos section-logos_white">
    <div class="section-logos__container">
        <div class="section-logos__wrap">
            <p>Vorgestellt in</p>
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
<section class="section-book section-book_mb">
    <div class="section-book__container">
        <h2 class="section-book__title section-book__title_mb">Momente für die Erinnerung</h2>
        <p class="section-book__text">Hochwertige Fotobücher und Fotoalben, um die Momente für immer festzuhalten, die am wichtigsten sind. </p>
        <div class="section-book__wrap section-book__wrap_more">
            <a href="<?php echo $this->languageUrl('static-wedding-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>mehr erfahren</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="wedding-photo-albums" data-path="1.0-homepage" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-wedding-photo-albums.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/wedding-photo-albums.jpg" alt="Hochzeitsalbum mit persönlicher Lasergravur">
                        </picture>

                    </figure>


                </div>
                <h3 class="section-book__name-box">Hochzeitsalbum</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-baby-photo-books-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>mehr erfahren</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="baby-photo-books" data-path="1.0-homepage" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-baby-photo-books.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/baby-photo-books.jpg" alt="offenes Baby Fotobuch">
                        </picture>
                    </figure>
                </div>
                <h3 class="section-book__name-box">Babyfotobuch</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-family-photo-albums-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>mehr erfahren</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="family-photo-albums" data-path="1.0-homepage" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-family-photo-albums.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/family-photo-albums.jpg" alt="Familie Fotoalbum Einband">
                        </picture>
                    </figure>
                </div>
                <h3 class="section-book__name-box">Familienalbum</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-travel-photo-books-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>mehr erfahren</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="travel-photo-books" data-path="1.0-homepage" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-travel-photo-books.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/travel-photo-books.jpg" alt="Fotobuch Einband türkis">
                        </picture>
                    </figure>
                </div>
                <h3 class="section-book__name-box">Reisefotobuch</h3>
            </a>
        </div>
        <div class="section-book__wrap section-book__wrap_more">
            <a href="<?php echo $this->languageUrl('static-wedding-guest-books-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>mehr erfahren</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="wedding-guest-books" data-path="1.0-homepage" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-wedding-guest-books.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/wedding-guest-books.jpg" alt="Hochzeit Gästebuch offen">
                        </picture>
                    </figure>
                </div>
                <h3 class="section-book__name-box">Hochzeitsgästebuch</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-engagement-photo-book-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>mehr erfahren</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="engagement-photo-albums" data-path="1.0-homepage" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-engagement-photo-albums.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/engagement-photo-albums.jpg" alt="Verlobungsfotobuch Einband">
                        </picture>
                    </figure>
                </div>
                <h3 class="section-book__name-box">Verlobungsfotoalbum</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-cookbook-recipe-photobooks-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>mehr erfahren</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="cookbook-photobooks" data-path="1.0-homepage" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-cookbook-photobooks.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/cookbook-photobooks.jpg" alt="selbst erstelltes Kochbuch auf Küchenzeile">
                        </picture>
                    </figure>
                </div>
                <h3 class="section-book__name-box">Kochbuch</h3>
            </a>
            <a href="<?php echo $this->languageUrl('static-photographer-photo-albums-') ?>" target="_blank" class="section-book__block">
                <div class="section-book__img">
                    <div class="section-book__active">
                        <p>mehr erfahren</p>
                        <img src="/assets/images/arrow-right.svg" alt="arrow-right">
                    </div>
                    <figure style="padding-bottom: calc(302% / 284 * 100)" class="figure-webp">
                        <picture data-priority="2" data-name="photographer-photo-albums" data-path="1.0-homepage" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-photographer-photo-albums.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/photographer-photo-albums.jpg" alt="Professionelles Fotobuch in Geschenkbox">
                        </picture>
                    </figure>
                </div>
                <h3 class="section-book__name-box">Alben für Fotografen</h3>
            </a>
        </div>
    </div>
</section>
<section class="dignity">
    <div class="dignity__container">
        <h2 class="dignity__title">Der PikPerfect-Vorteil</h2>
        <div class="dignity__wrap">
            <div class="dignity__block">
                <div class="dignity__img">
                    <img src="/assets/images/circle_the_human_touch.svg" alt="circle_the_human_touch">
                </div>
                <div class="dignity__content">
                    <h3>Wir machen die Arbeit</h3>
                    <p>Wir helfen, die besten Fotos auswählen und dein Fotoalbum erstellen. Überarbeitungen inklusive.</p>
                </div>
            </div>
            <div class="dignity__block">
                <div class="dignity__img">
                    <img src="/assets/images/circle_attention_to_detail.svg" alt="circle_attention_to_detail">
                </div>
                <div class="dignity__content">
                    <h3>Qualität zählt</h3>
                    <p>Handgefertigt nur mit hochwertigen Materialien, um ein Leben lang zu halten.</p>
                </div>
            </div>
            <div class="dignity__block">
                <div class="dignity__img">
                    <img src="/assets/images/circle_premium_materials.svg" alt="circle_premium_materials">
                </div>
                <div class="dignity__content">
                    <h3>Glück garantiert</h3>
                    <p style="width: 90%;">Zahle erst, wenn dein Fotobuch perfekt erstellt ist. Qualität garantiert.</p>
                </div>
            </div>
        </div>
    </div>
</section>
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
        <div class="lazy-video__item ">
            <iframe class="lazy-video__activator-js" frameborder="0" data-src="https://player.vimeo.com/video/576814404?background=1" allow="autoplay; fullscreen; picture-in-picture" title="Premium Photo Albums - PikPerfect"></iframe>
        </div>
    </div>
</section>
<section class="section-album section-album_tree-block">
    <div class="section-album__container">
        <h2 class="section-album__title">Fotoalben & Fotobücher</h2>
        <p class="section-album__entered">Wir haben vom hochwertigen Fotobuch bis zum Premium-Fotoalbum für alle Anlässe und Budgets etwas dabei. <br> Erfahre mehr über die <a class="link" href="<?php echo $this->languageUrl('static-help-book-vs-photo-album-') ?>">Unterschiede zwischen Fotobuch, Echtfotobuch und Premiumalbum.</a>.</p>
        <div class="section-album__wrap">
            <a href="<?php echo $this->languageUrl('static-premium-layflat-albums-') ?>" class="section-album__block">
                <figure style="padding-bottom: calc(288% / 330 * 100)" class="figure-webp">
                    <picture data-priority="1" data-name="pikPerfect-premium-albums" data-path="1.0-homepage" class="picture-webp">
                        <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-pikPerfect-premium-albums.webp" type="image/webp">
                        <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/pikPerfect-premium-albums.jpg" alt="weisses Hochzeitsalbum in Geschenkschachtel">
                    </picture>

                </figure>


                <h3 class="section-album__name-album">Premiumalbum <span>Die Luxuslinie	</span></h3>
                <p class="section-album__price"><?php echo $this->translate('From') . ' ' . $this->format(
                                                    $this->smallestPrices['premium'],
                                                    $region->iso,
                                                    2,
                                                    $region->symbol
                                                ); ?></p>
            </a>
            <a href="<?php echo $this->languageUrl('static-layflat-photo-albums-') ?>" class="section-album__block">
                <figure style="padding-bottom: calc(288% / 330 * 100)" class="figure-webp">
                    <picture data-priority="2" data-name="pikperfect-photo-albums" data-path="1.0-homepage" class="picture-webp">
                        <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-pikperfect-photo-albums.webp" type="image/webp">
                        <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/pikperfect-photo-albums.jpg" alt="ein blaues Leinen Echtfotobuch">
                    </picture>

                </figure>


                <h3 class="section-album__name-album">Echtfotobuch<span>Der Bestseller	</span></h3>
                <p class="section-album__price"><?php echo $this->translate('From') . ' ' . $this->format(
                                                    $this->smallestPrices['layflat'],
                                                    $region->iso,
                                                    2,
                                                    $region->symbol
                                                ); ?></p>
            </a>
            <a href="<?php echo $this->languageUrl('static-custom-photo-books-') ?>" class="section-album__block">
                <figure style="padding-bottom: calc(288% / 330 * 100)" class="figure-webp">
                    <picture data-priority="2" data-name="pikperfect-photobooks" data-path="1.0-homepage" class="picture-webp">
                        <source class="toggle-img--js" srcset="/assets/images/towebp/1.0-homepage/min-pikperfect-photobooks.webp" type="image/webp">
                        <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/1.0-homepage/pikperfect-photobooks.jpg" alt="hochwertiges Fotobuch Beispiel">
                    </picture>

                </figure>


                <h3 class="section-album__name-album">Fotobuch<span>Der Klassiker</span></h3>
                <p class="section-album__price"><?php echo $this->translate('From') . ' ' . $this->format(
                                                    $this->smallestPrices['photobook'],
                                                    $region->iso,
                                                    2,
                                                    $region->symbol
                                                ); ?></p>
            </a>
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
<section class="section-accordion">
    <div class="container">
        <h2 class="section-accordion__title">Häufig gestellte Fragen</h2>
        <div class="accordion">
            <div class="accordion__item">
                <h3 class="accordion__title">Wie kann ich ein Fotobuch erstellen lassen?</h3>
                <p class="accordion__text">Keine Zeit für ein Fotobuch? Bei uns ist es am einfachsten ein Fotobuch zu erstellen:  <a target="_blank" href="<?php echo $this->languageUrl('upload-photos-') ?>">Lade die Fotos hoch, </a> die du verwenden möchtest, und lass dann unser Team aus kreativen Albumdesignern an die Arbeit gehen. Wir senden dir innerhalb von 2-4 Werktagen einen ersten Entwurf per Email zu. Alle Gestaltungen beinhalten unbegrenzte Überarbeitungen, damit du 100%-ig zufrieden bist, bevor wir dein Fotobuch fertigen.
</p>
            </div>

            <div class="accordion__item">
                <h3 class="accordion__title">Welche Fotobücher und -alben bietet ihr an?</h3>
                <p class="accordion__text">PikPerfect-Fotobücher werden auf branchenführenden Maschinen digital gedruckt. Unsere Echtfotobücher und Premiumalben werden auf Fuji-Fotopapieren entwickelt, die die hervorragende Farben und Klarheit eines professionellen Abzugs bieten. Erfahre mehr über unsere Papiere und den <a target="_blank" href="<?php echo $this->languageUrl('static-photo-books-') ?>">Fotoalbumdruck.</a>  </p>
            </div>

            <div class="accordion__item">
                <h3 class="accordion__title">Wie viel kostet ein Fotobuch?</h3>
                <p class="accordion__text">Die Kosten für ein Fotoalbum variieren je nach Albumtyp, Grösse, Einband und Anzahl der Seiten. Der entsprechende Preis wird automatisch auf unserer Website angezeigt, wenn du anfängst, <a target="_blank" href="<?php echo $this->languageUrl('static-photo-books-') ?>">ein Fotobuch zu erstellen. </a>.
                Details zu allen Preisen und dem Versand findest du auch <a target="_blank" href="<?php echo $this->languageUrl('static-help-prices-') ?>">hier</a>.
                </p>
            </div>

            <div class="accordion__item">
                <h3 class="accordion__title">Wie viele Fotos kann ich in mein Album aufnehmen?</h3>
                <p class="accordion__text">Dies hängt zwar von der gewählten Albumgrösse und dem Design ab, wir empfehlen jedoch durchschnittlich 2-3 Fotos pro Seite. Das heisst auf einigen Seiten haben wir so ein einzelnes Bild auf einer Seite oder sogar auf einer Doppelseite und auf anderen mehrere kleinere Fotos auf einer Seite. Denk daran: je mehr Fotos man auf einer Seite unterbringen will, desto kleiner werden sie und desto beengter sieht das Album aus.
</p>
            </div>
            <div class="accordion__item">
                <h3 class="accordion__title">Kann ich Text in mein Fotoalbum einfügen?</h3>
                <p class="accordion__text">Natürlich! Alle Fotobücher werden von uns von Grund auf neu und individuell erstellt. Sie können eine beliebige Kombination aus Bild und Text enthalten. Schick entweder eine Word-Datei mit dem gewünschten Text beim Hochladen deiner Fotos mit oder übermittel den Text zusammen mit deinem Feedback, nachdem wir dir den ersten Online-Fotobuchentwurf erstellt haben.
</p>
            </div>
            <p class="bottom-text">Nicht gefunden, wonach du gesucht hast? Besuch unsere <a target="_blank" href="<?php echo $this->languageUrl('static-help-') ?>">HILFE</a>
            Seite für Details.</p>
        </div>
    </div>
</section>