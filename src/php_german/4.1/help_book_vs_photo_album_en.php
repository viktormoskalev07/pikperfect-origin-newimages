<?php
$this->headTitle('Fotobuch vs Echtfotobuch vs Premiumalbum | PikPerfect');
$this->headMeta()->appendName('description', 'Ein Unterschied ist z.B.: Echtfotobücher und Premiumalben haben (dicke) Layflat-Seiten, Fotobücher haben dünnere flexible Seiten. Die Bindung ist auch anders.');
$region = $this->region()->getUserRegion();
?>
<section class="section-title">
    <div class="section-title__container">
        <h1 class="section-title__title"><span>help</span>Unterschiede Fotobuch Album</h1>
    </div>
</section>
<section class="section-content">
    <div class="section-content__wrap">
        <div class="section-sidebar">
            <h3 class="section-sidebar__title">Help Topics</h3>
            <?php echo $this->partial('application/static/help_menu') ?>
        </div>
        <div class="section-content__context">
            <p class="section-content__text-entered"><strong>Was ist der Unterschied zwischen einem Fotobuch, Echtfotobuch und einem Premiumalbum? Welches ist das Richtige für dich?</strong></p>
            <p class="section-content__text-bottom">Wir haben einen leicht verständlichen Leitfaden erstellt, um dir bei der Wahl des Buches zu helfen, das deine Geschichte für dich passend erzählt. Falls du dir nicht sicher bist, empfehlen dir unsere Designer gerne eins auf der Grundlage deiner Fotos.</p>
            <div class="section-content__img">
                <figure class="figure-webp figure-webp_mini">
                    <picture data-priority="1" data-name="photobook-vs-photo-album-comparision" data-path="4.1-photo-book-vs-photo-album" class="picture-webp">
                        <source class="toggle-img--js" srcset="/assets/images/towebp/4.1-photo-book-vs-photo-album/min-photobook-vs-photo-album-comparision.webp" type="image/webp">
                        <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/4.1-photo-book-vs-photo-album/photobook-vs-photo-album-comparision.jpg" alt="Das gleiche Design als Fotobuch und Echtfotobuch mit Layflatbindung">
                    </picture>


                </figure>
                <div class="section-content__signature">
                    <p>Photobook (72 pages)</p>
                    <p>Layflat Photo Album (72 pages)</p>
                    <p class="section-content__signature_big">Premium Album (72 pages)</p>
                </div>
            </div>

            <div class="section-img video-full-hd">
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
                    <div class="lazy-video__item "><iframe frameborder="0" class="lazy-video__activator-js" data-src="https://player.vimeo.com/video/569987859?background=1 " allow="autoplay; fullscreen; picture-in-picture" title="Photo Book vs Photo Album | PikPerfect"></iframe>
                    </div>
                </div>
                <p class="section-img__description">Die gleichen 72 Seiten gedruckt als Fotobuch, in einem Layflat-Fotoalbum und als Premium-Album.</p>
                <div class="bb-line"></div>
            </div>

            <div class="section-img">
                <h2 class="section-img__title section-img__title_small">Was ist ein Fotobuch?</h2>
                <div class="section-img__img">
                    <figure style="padding-bottom: calc(526% / 938 * 100)" class="figure-webp">
                        <picture data-priority="1" data-name="photo-book" data-path="4.1-photo-book-vs-photo-album" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/4.1-photo-book-vs-photo-album/min-photo-book.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/4.1-photo-book-vs-photo-album/photo-book.jpg" alt="Beispiel Fotobuch mit Bild von Hunden">
                        </picture>

                    </figure>


                </div>
                <p>Ein <a href="<?php echo $this->languageUrl('static-photo-books-')?>" target="_blank" class="link">Fotobuch</a> wird digital auf flexible Seiten gedruckt und wie ein herkömmliches Buch klebegebunden. Fotobuchseiten liegen nicht ganz flach auf, und wichtige Motive (wie Gesichter) sollten nicht direkt im Bund platziert werden. Fotobücher sind robust, können bis zu 240 Seiten haben und sind der ideale Bildband für den Kaffeetisch.</p>
                <div class="bb-line"></div>
            </div>

            <div class="section-img">
                <h2 class="section-img__title section-img__title_small">Was ist ein Echtfotobuch?</h2>
                <div class="section-img__img">
                    <figure style="padding-bottom: calc(526% / 938 * 100)" class="figure-webp">
                        <picture data-priority="1" data-name="layflat-photobook" data-path="4.1-photo-book-vs-photo-album" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/4.1-photo-book-vs-photo-album/min-layflat-photobook.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/4.1-photo-book-vs-photo-album/layflat-photobook.jpg" alt="Offenes Echtfotobuch mit nahtloser Layflat Doppelseite">
                        </picture>

                    </figure>


                </div>
                <p>Unsere Layflat-Fotobücher werden auf Silberhalogenid-Fotopapier entwickelt, was die Farben und Brillanz eines echten Fotoabzugs bietet. Sie werden in Leporello-Technik gebunden, bei der die Seiten ganz flach liegen. Die Seiten sind dicker und steifer als beim digitalen Fotobuch, aber nicht so dick bzw. steif wie beim Premium-Album. Die ununterbrochenen Doppelseiten machen <a href="<?php echo $this->languageUrl('static-layflat-photo-albums-')?>" target="_blank" class="link">Echtfotobücher</a> ideal für Hochzeiten und andere Anlässe.</p>
                <div class="bb-line"></div>
            </div>

            <div class="section-img">
                <h2 class="section-img__title section-img__title_small">Was ist ein Premium-Fotoalbum?</h2>
                <div class="section-img__img">
                    <figure style="padding-bottom: calc(526% / 938 * 100)" class="figure-webp">
                        <picture data-priority="1" data-name="flush-mount-album" data-path="4.1-photo-book-vs-photo-album" class="picture-webp">
                            <source class="toggle-img--js" srcset="/assets/images/towebp/4.1-photo-book-vs-photo-album/min-flush-mount-album.webp" type="image/webp">
                            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/4.1-photo-book-vs-photo-album/flush-mount-album.jpg" alt="Hochwertiges Fotoalbum mit extradicken Echtfoto-Seiten">
                        </picture>

                    </figure>


                </div>
                <p>Das Premiumalbum (auch <a href="<?php echo $this->languageUrl('static-premium-layflat-albums-')?>" target="_blank" class="link">Premium-Layflat-Album</a> genannt) wird auf professionellem Fujicolor Crystal Archive DPII-Papier ausbelichtet, was dicke Echtfoto-Seiten sind. Hochwertige Einband-Optionen und Geschenkboxen runden den Luxus ab. Die Doppelseiten in diesem High-End-Fotoalbum werden von Hand auf ein weisses Kartonsubstrat montiert, wodurch die Layflat-Seiten stabil und noch dicker werden. Du erhältst ein Album, das ein Leben lang hält, ein Fotoalbum in Erbstückqualität.</p>
                <div class="bb-line"></div>
            </div>

            <div class="section-table section-table_desktop">
                <h2 class="section-table__title">Unser Sortiment im Vergleich</h2>
                <table>
                    <tr>
                        <th></th>
                        <th>
                            <span class="name-album">Fotobuch</span>
                            <span class="type-album">Our Everyday Classic</span>
                            <span class="price-album"><?php echo $this->translate('From') . ' ' . $this->format(
                                                            $this->smallestPrices['photobook'],
                                                            $region->iso,
                                                            2,
                                                            $region->symbol
                                                        ); ?></span>
                            <span><a href="<?php echo $this->languageUrl('static-photo-books-')?>" class="link-album">Mehr erfahren</a></span>
                        </th>
                        <th>
                            <span class="name-album">Layflat-Fotoalbum</span>
                            <span class="type-album">Our Bestseller</span>
                            <span class="price-album"><?php echo $this->translate('From') . ' ' . $this->format(
                                                            $this->smallestPrices['layflat'],
                                                            $region->iso,
                                                            2,
                                                            $region->symbol
                                                        ); ?></span>
                            <span><a href="<?php echo $this->languageUrl('static-layflat-photo-albums-')?>" class="link-album">Mehr erfahren</a></span>
                        </th>
                        <th>
                            <span class="name-album">Premium-Album</span>
                            <span class="type-album">Our Luxury Line</span>
                            <span class="price-album"><?php echo $this->translate('From') . ' ' . $this->format(
                                                            $this->smallestPrices['premium'],
                                                            $region->iso,
                                                            2,
                                                            $region->symbol
                                                        ); ?></span>
                            <span><a href="<?php echo $this->languageUrl('static-premium-layflat-albums-')?>" class="link-album">Mehr erfahren</a></span>
                        </th>
                    </tr>
                    <tr>
                        <th class="name-type">Papier</th>
                        <td>Flexible Buchseiten 170–250 g/m² (nicht flach aufliegend)</td>
                        <td>Halbsteife Lay-Flat-Seiten (ähnlich wie zwei Abzüge, die aneinander geklebt werden)</td>
                        <td>Dicke, starre Layflat-Seiten (1.1 mm dick)</td>
                    </tr>
                    <tr>
                        <th class="name-type">Druck</th>
                        <td>HP Indigo Digitaldruck</td>
                        <td>Belichtetes Fuji-Albumpapier</td>
                        <td>Belichtetes professionelles Fuji Crystal Archive DP II-Papier</td>
                    </tr>
                    <tr>
                        <th class="name-type">Seitenzahl</th>
                        <td>240 Seiten</td>
                        <td>120 Seiten</td>
                        <td>76 Seiten</td>
                    </tr>
                    <tr>
                        <th class="name-type">Anzahl Fotos</th>
                        <td>Bis zu 1’000</td>
                        <td>Bis 450</td>
                        <td>Bis zu 300</td>
                    </tr>
                    <tr>
                        <th class="name-type">Einband-Material</th>
                        <td>Foto, Leinen oder veganes Leder</td>
                        <td>Foto, Leinen oder veganes Leder</td>
                        <td>Foto, Leinen, veganes oder Echtleder</td>
                    </tr>
                    <tr>
                        <th class="name-type">Cover-Addons</th>
                        <td> </td>
                        <td> </td>
                        <td>Acrylglas oder Foto-Fenster erhältlich</td>
                    </tr>
                    <tr>
                        <th class="name-type">Title individualisieren</th>
                        <td colspan="3">Standard-Textprägung (im Preis enthalten), individuelles Logo/Grafik als Prägung oder Lasergravur</td>
                    </tr>
                    <tr>
                        <th class="name-type">Geschenkbox</th>
                        <td>Stabiler schwarzer Karton</td>
                        <td>Stabiler schwarzer Karton</td>
                        <td>Hochwertige Holzrahmenbox mit Bezug nach Wahl</td>
                    </tr>
                </table>
            </div>
            <!-- mobile table Photo Books -->
            <div class="section-table section-table_mobile">
                <h2 class="section-table__title">Unser Sortiment im Vergleich</h2>
                <table>
                    <tr>
                        <th colspan="3">
                            <span class="name-album">Photo Books</span>
                            <span class="type-album">Our Everyday Classic</span>
                            <span class="price-album">From CHF 34.90</span>
                            <span><a href="<?php echo $this->languageUrl('static-photo-books-')?>" class="link-album">Learn more</a></span>
                        </th>
                    </tr>
                    <tr>
                        <th class="name-type">Papier</th>
                        <td>Flexible Buchseiten 170–250 g/m² (nicht flach aufliegend)</td>
                    </tr>
                    <tr>
                        <th class="name-type">Druck</th>
                        <td>HP Indigo Digitaldruck</td>
                    </tr>
                    <tr>
                        <th class="name-type">Seitenzahl</th>
                        <td>240 Seiten</td>
                    </tr>
                    <tr>
                        <th class="name-type">Anzahl Fotos</th>
                        <td>Bis zu 1’000</td>
                    </tr>
                    <tr>
                        <th class="name-type">Einband-Material</th>
                        <td>Foto, Leinen oder veganes Leder</td>
                    </tr>
                    <tr>
                        <th class="name-type">Cover-Addons</th>
                        <td> </td>
                    </tr>
                    <tr>
                        <th class="name-type">Title individualisieren</th>
                        <td>Standard-Textprägung (im Preis enthalten), individuelles Logo/Grafik als Prägung oder Lasergravur</td>
                    </tr>
                    <tr>
                        <th class="name-type">Geschenkbox</th>
                        <td>Stabiler schwarzer Karton</td>
                    </tr>
                </table>
                <!-- mobile table Layflat Photo Album -->
                <table>
                    <tr>
                        <th colspan="2">
                            <span class="name-album">Layflat Photo Album</span>
                            <span class="type-album">Our Bestseller</span>
                            <span class="price-album">From CHF 74.90</span>
                            <span><a href="<?php echo $this->languageUrl('static-layflat-photo-albums-')?>" class="link-album">Learn more</a></span>
                        </th>
                    </tr>
                    <tr>
                        <th class="name-type">Papier</th>
                        <td>Halbsteife Lay-Flat-Seiten (ähnlich wie zwei Abzüge, die aneinander geklebt werden)</td>
                    </tr>
                    <tr>
                        <th class="name-type">Druck</th>
                        <td>Belichtetes Fuji-Albumpapier</td>
                    </tr>
                    <tr>
                        <th class="name-type">Seitenzahl</th>
                        <td>120 Seiten</td>
                    </tr>
                    <tr>
                        <th class="name-type">Anzahl Fotos</th>
                        <td>Bis 450</td>
                    </tr>
                    <tr>
                        <th class="name-type">Einband-Material</th>
                        <td>Foto, Leinen oder veganes Leder</td>
                    </tr>
                    <tr>
                        <th class="name-type">Cover-Addons</th>
                        <td> </td>
                    </tr>
                    <tr>
                        <th class="name-type">Title individualisieren</th>
                        <td>Standard-Textprägung (im Preis enthalten), individuelles Logo/Grafik als Prägung oder Lasergravur</td>
                    </tr>
                    <tr>
                        <th class="name-type">Geschenkbox</th>
                        <td>Stabiler schwarzer Karton</td>
                    </tr>
                </table>
                <!-- mobile table Premium Album -->
                <table>
                    <tr>
                        <th colspan="2">
                            <span class="name-album">Premium Album <br>(Flush Mount Album)</span>
                            <span class="type-album">Our Luxury Line</span>
                            <span class="price-album">From CHF 199.00</span>
                            <span><a href="<?php echo $this->languageUrl('static-premium-layflat-albums-')?>" class="link-album">Learn more</a></span>
                        </th>
                    </tr>
                    <tr>
                        <th class="name-type">Papier</th>
                        <td>Dicke, starre Layflat-Seiten (1.1 mm dick)</td>
                    </tr>
                    <tr>
                        <th class="name-type">Druck</th>
                        <td>Belichtetes professionelles Fuji Crystal Archive DP II-Papier</td>
                    </tr>
                    <tr>
                        <th class="name-type">Seitenzahl</th>
                        <td>76 Seiten</td>
                    </tr>
                    <tr>
                        <th class="name-type">Anzahl Fotos</th>
                        <td>Bis zu 300</td>
                    </tr>
                    <tr>
                        <th class="name-type">Einband-Material</th>
                        <td>Foto, Leinen, veganes oder Echtleder</td>
                    </tr>
                    <tr>
                        <th class="name-type">Cover-Addons</th>
                        <td>Acrylglas oder Foto-Fenster erhältlich</td>
                    </tr>
                    <tr>
                        <th class="name-type">Title individualisieren</th>
                        <td>Standard-Textprägung (im Preis enthalten), individuelles Logo/Grafik als Prägung oder Lasergravur</td>
                    </tr>
                    <tr>
                        <th class="name-type">Geschenkbox</th>
                        <td>Hochwertige Holzrahmenbox mit Bezug nach Wahl</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</section>
<?php echo $this->partial('application/partial/why_choose_us', ['color' => 'dignity_more']) ?>
<section class="section-transition section-transition_gray">
    <div class="container">
        <div class="section-transition__content">
            <h2 class="section-transition__title">Jetzt ein Fotobuch erstellen?</h2>
            <p style="font-size: 20px">Und mit unserem interaktiven Preisrechner die verschiedenen Optionen durchrechnen.</p>
        </div>
        <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="button section-transition__button">JETZT ANFANGEN</a>
    </div>
</section>

<?php echo $this->render('partial/quick_chat.phtml'); ?>