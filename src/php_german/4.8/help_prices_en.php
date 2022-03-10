<?php

use Photobook\Model\DbTable\Paperquality;

$this->headTitle('Preise Fotobuch & Hochzeitsalbum | PikPerfect');
$this->headMeta()->appendName('description', 'Fotobuch erstellen lassen Kosten & Fotobuch drucken: Wir bieten hochwertige Qualität zu vernünftigen Preisen');
$region = $this->region()->getUserRegion();

$selected = false;
$selectedCountryIso = $this->countries()->isInternationalCountry() ? '' : $this->countries()->getSelectedCountryIso();
$countryItems = [];
foreach ($this->countries()->getFooterCountries() as $country) {
    $countryItems[$country['country']] = [
        'selected' => $selectedCountryIso == $country['iso2_country'],
        'iso' => $country['iso2_country'],
        'name' => $country['country']
    ];

    if ($selectedCountryIso == $country['iso2_country']) {
        $selected = true;
    }
}
$countryItems[\Application\Model\Country::INTERNATIONAL_KEY] = [
    'selected' => !$selected,
    'iso' => 'UM',
    'name' => $this->translate('International')
];

$selectedCountryIso = $selected ? $selectedCountryIso : \Application\Model\Country::INTERNATIONAL_KEY;
ksort($countryItems);

?>

<section class="section-title">
    <div class="section-title__container">
        <h1 class="section-title__title"><span>help</span>Fotobuch & Hochzeitsalbum Preise</h1>
    </div>
</section>
<section class="section-content">
    <div class="section-content__wrap section-content__wrap_big">
        <div class="section-sidebar">
            <h3 class="section-sidebar__title">Help Topics</h3>
            <?php echo $this->partial('application/static/help_menu') ?>
        </div>
        <div class="section-content__context">
            <div class="section-block">
                <p class="section-block__text-entered">PikPerfect bietet eine grosse Auswahl an Fotobüchern und Hochzeitsalben für jeden Bedarf und jedes Budget. Wähl einfach die Art des Albums, die dir am meisten zusagt, und pass dann das Format, den Einband und die Anzahl Seiten des Fotobuchs an.</p>
                <div class="section-block__wrap">
                    <div class="section-block__card">
                        <div class="section-block__content">
                            <div class="section-block__img">
                                <figure style="padding-bottom: calc(180% / 270 * 100)" class="figure-webp">
                                    <picture data-priority="1" data-name="layflat-photo-album" data-path="4.8-prices" class="picture-webp">
                                        <source class="toggle-img--js" srcset="/assets/images/towebp/4.8-prices/min-layflat-photo-album.webp" type="image/webp">
                                        <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/4.8-prices/layflat-photo-album.jpg" alt="Offenes Echtfotobuch mit Layflatseiten zeigt wunderschöne Panorama Doppelseiten">
                                    </picture>
                                </figure>
                            </div>
                            <h3 class="section-block__title">Premiumalbum</h3>
                            <h4 class="section-block__type-album">Our Luxury Line</h4>
                            <p class="section-block__price"><?php echo $this->translate('From') . ' ' . $this->format(
                                                                $this->smallestPrices['premium'],
                                                                $region->iso,
                                                                2,
                                                                $region->symbol
                                                            ); ?></p>
                        </div>
                        <a href="#PremiumLayflatAlbum" class="button button__gray">prices</a>
                    </div>
                    <div class="section-block__card">
                        <div class="section-block__content">
                            <div class="section-block__img">
                                <figure style="padding-bottom: calc(180% / 270 * 100)" class="figure-webp">
                                    <picture data-priority="1" data-name="premium-layflat-album" data-path="4.8-prices" class="picture-webp">
                                        <source class="toggle-img--js" srcset="/assets/images/towebp/4.8-prices/min-premium-layflat-album.webp" type="image/webp">
                                        <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/4.8-prices/premium-layflat-album.jpg" alt="Offenes Echtfotoalbum mit extra dicken Layflat Seiten">
                                    </picture>

                                </figure>


                            </div>
                            <h3 class="section-block__title">Echtfotobuch</h3>
                            <h4 class="section-block__type-album">Our Bestseller</h4>
                            <p class="section-block__price"><?php echo $this->translate('From') . ' ' . $this->format(
                                                                $this->smallestPrices['layflat'],
                                                                $region->iso,
                                                                2,
                                                                $region->symbol
                                                            ); ?></p>
                        </div>
                        <a href="#LayflatPhotoAlbum" class="button button__gray">prices</a>
                    </div>
                    <div class="section-block__card">
                        <div class="section-block__content">
                            <div class="section-block__img">
                                <figure style="padding-bottom: calc(180% / 270 * 100)" class="figure-webp">
                                    <picture data-priority="1" data-name="photo-book" data-path="4.8-prices" class="picture-webp">
                                        <source class="toggle-img--js" srcset="/assets/images/towebp/4.8-prices/min-photo-book.webp" type="image/webp">
                                        <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/4.8-prices/photo-book.jpg" alt="Offenes Alltags Fotobuch mit Bildern von Hunden">
                                    </picture>

                                </figure>


                            </div>
                            <h3 class="section-block__title">Fotobuch</h3>
                            <h4 class="section-block__type-album">Our Everyday Classic</h4>
                            <p class="section-block__price"><?php echo $this->translate('From') . ' ' . $this->format(
                                                                $this->smallestPrices['photobook'],
                                                                $region->iso,
                                                                2,
                                                                $region->symbol
                                                            ); ?></p>
                        </div>
                        <a href="#PhotoBook" class="button button__gray">prices</a>
                    </div>
                </div>
                <p>Nicht sicher, welches Fotobuch oder Album am besten geeignet ist?<br> Mehr zu <a href="<?php echo $this->languageUrl('static-help-book-vs-photo-album-') ?>" target="_blank" class="link">Unterschiede Fotobuch und Fotoalbum</a>.</p>
                <div class="bb-line"></div>
            </div>
            <div class="section-table section-table_album section-table_desktop">
                <a name="PremiumLayflatAlbum"></a>
                <h2 class="section-table__title">Premiumalbum</h2>
                <table>
                    <tr>
                        <th></th>
                        <?php foreach ($this->premiumDimensions as $name => $value) : ?>
                            <th>
                                <div class="section-table__img">
                                    <img src="/assets/images/towebp/4.8-prices/image_album_<?php echo $value['id'] ?>.svg" alt="<?php echo htmlentities($name) ?>">
                                </div>
                                <span class="size-album"><?php echo $value['size'] . ' | ' . $value['size2'] ?></span>
                                <span class="pages-album">Inkl. 24 Seiten</span>
                            </th>
                        <?php endforeach ?>
                    </tr>
                    <?php $premiumCovers = array_values($this->premiumPrices)[0];
                    $addPages = [];
                    foreach ($premiumCovers as $coverName => $value) : ?>
                        <tr>
                            <th class="name-type"><?php echo $coverName ?></th>
                            <?php foreach ($this->premiumDimensions as $dimensionName => $value) : ?>
                                <td><?php echo $this->priceRegion->symbol . $this->premiumPrices[$dimensionName][$coverName]['book_price'];
                                    $addPages[$dimensionName] = $this->premiumPrices[$dimensionName][$coverName]['paper_price'];
                                    ?></td>
                            <?php endforeach ?>
                        </tr>
                    <?php endforeach ?>
                    <tr>
                        <th class="name-type">Zus. 4 Seiten</th>
                        <?php foreach ($this->premiumDimensions as $dimensionName => $value) : ?>
                            <td><?php echo $this->priceRegion->symbol . $addPages[$dimensionName] ?></td>
                        <?php endforeach ?>
                    </tr>
                    <tr>
                        <th class="name-type">Ergänzungen</th>
                        <td colspan="4">Premium Geschenkbox <?php echo $this->priceRegion->symbol . $this->priceRegion->premium_box ?>
                            I Acryleinband <?php echo $this->priceRegion->symbol . $this->priceRegion->acrylic ?>
                            I Fotofenster <?php echo $this->priceRegion->symbol . $this->priceRegion->cameo ?>
                        </td>
                    </tr>
                </table>
                <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="section-table__link" target="_blank">Zum interaktiven Preisrechner <img src="/assets/images/arrow-right-blue.svg" alt="icon-arrow-right-blue"></a>
            </div>
            <!-- mobile table Photo Books -->
            <div class="section-table section-table_album section-table_mobile">
                <h2 class="section-table__title">Premiumalbum</h2>
                <?php foreach ($this->premiumDimensions as $name => $value) : ?>
                    <table>
                        <tr>
                            <th></th>
                            <th>
                                <div class="section-table__img">
                                    <img src="/assets/images/towebp/4.8-prices/image_album_<?php echo $value['id'] ?>.svg" alt="<?php echo htmlentities($name) ?>">
                                </div>
                                <span class="size-album"><?php echo $value['size'] . ' | ' . $value['size2'] ?></span>
                                <span class="pages-album">Inkl. 24 Seiten</span>
                            </th>
                        </tr>
                        <?php foreach ($premiumCovers as $coverName => $value) : ?>
                            <tr>
                                <th class="name-type"><?php echo $coverName ?></th>
                                <td><?php echo $this->priceRegion->symbol . $this->premiumPrices[$dimensionName][$coverName]['book_price']; ?></td>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                            <th class="name-type">Zus. 4 Seiten</th>
                            <td><?php echo $this->priceRegion->symbol . $this->premiumPrices[$dimensionName][$coverName]['paper_price'] ?></td>
                        </tr>
                        <tr>
                            <th class="name-type">Ergänzungen</th>
                            <td>Premium Geschenkbox <?php echo $this->priceRegion->symbol . $this->priceRegion->premium_box ?>
                                I Acryleinband <?php echo $this->priceRegion->symbol . $this->priceRegion->acrylic ?>
                                I Fotofenster <?php echo $this->priceRegion->symbol . $this->priceRegion->cameo ?>
                            </td>
                        </tr>
                    </table>
                <?php endforeach ?>

                <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="section-table__link" target="_blank">Zum interaktiven Preisrechner <img src="/assets/images/arrow-right-blue.svg" alt="icon-arrow-right-blue"></a>
            </div>
            <div class="section-table section-table_album section-table_desktop">
                <a name="LayflatPhotoAlbum"></a>
                <h2 class="section-table__title">Echtfotobuch</h2>
                <table>
                    <tr>
                        <th></th>
                        <?php foreach ($this->dimensions as $formatName => $value) : ?>
                            <th>
                                <div class="section-table__img">
                                    <img src="/assets/images/towebp/4.8-prices/image_album_<?php echo $value['id'] ?>.svg" alt="image_album_8x8">
                                </div>
                                <span class="size-album"><?php echo $value['size'] . ' | ' . $value['size2'] ?></span>
                                <span class="pages-album">Inkl. 24 Seiten</span>
                            </th>
                        <?php endforeach ?>
                    </tr>
                    <?php
                    $addPages = [];
                    $covers = array_values($this->prices)[0];
                    foreach ($covers as $coverName => $values) : ?>
                        <tr>
                            <th class="name-type"><?php echo $coverName ?></th>
                            <?php foreach ($this->dimensions as $formatName => $value) : ?>
                                <td><?php
                                    $values = $this->prices[$formatName][$coverName];
                                    foreach ($values as $k => $value) {
                                        if ($value['paper_quality_id'] == Paperquality::$LAYFLAT) {
                                            $addPages[$formatName] = $value['paper_price'];
                                            echo $this->priceRegion->symbol . $value['book_price'];
                                        }
                                    }
                                    ?></td>
                            <?php endforeach ?>
                        </tr>
                    <?php endforeach ?>
                    <tr>
                        <th class="name-type">Zus. 4 Seiten</th>
                        <?php foreach ($this->dimensions as $formatName => $value) : ?>
                            <td><?php if ($addPages[$formatName]) echo $this->priceRegion->symbol . $addPages[$formatName] ?> </td>
                        <?php endforeach ?>
                    </tr>
                    <tr>
                        <th class="name-type">Geschenkbox</th>
                        <?php foreach ($this->dimensions as $formatName => $value) : ?>
                            <td><?php $price = $this->priceRegion->getFormatBox($value['id']);
                                echo $price ? $this->priceRegion->symbol . $price : '' ?></td>
                        <?php endforeach ?>
                    </tr>
                </table>
                <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="section-table__link" target="_blank">Zum interaktiven Preisrechner <img src="/assets/images/arrow-right-blue.svg" alt="icon-arrow-right-blue"></a>
            </div>
            <!-- mobile table Photo Books -->
            <div class="section-table section-table_album section-table_mobile">
                <h2 class="section-table__title">Echtfotobuch</h2>
                <?php foreach ($this->dimensions as $formatName => $value) : ?>
                    <table>
                        <tr>
                            <th></th>
                            <th>
                                <div class="section-table__img">
                                    <img src="/assets/images/towebp/4.8-prices/image_album_<?php echo $value['id'] ?>.svg" alt="image_album_8x8">
                                </div>
                                <span class="size-album"><?php echo $value['size'] . ' | ' . $value['size2'] ?></span>
                                <span class="pages-album">Inkl. 24 Seiten</span>
                            </th>
                        </tr>
                        <?php foreach ($covers as $coverName => $values) : ?>
                            <tr>
                                <th class="name-type"><?php echo $coverName ?></th>
                                <td><?php $values = $this->prices[$formatName][$coverName];
                                    foreach ($values as $k => $priceValues) {
                                        if ($priceValues['paper_quality_id'] == Paperquality::$LAYFLAT) {
                                            echo $this->priceRegion->symbol . $priceValues['book_price'];
                                        }
                                    } ?></td>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                            <th class="name-type">Zus. 4 Seiten</th>
                            <td><?php if ($addPages[$formatName]) echo $this->priceRegion->symbol . $addPages[$formatName] ?> </td>
                        </tr>
                        <tr>
                            <th class="name-type">Geschenkbox</th>
                            <td><?php $price = $this->priceRegion->getFormatBox($value['id']);
                                echo $price ? $this->priceRegion->symbol . $price : '' ?></td>
                        </tr>
                    </table>
                <?php endforeach ?>
                <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="section-table__link" target="_blank">Zum interaktiven Preisrechner <img src="/assets/images/arrow-right-blue.svg" alt="icon-arrow-right-blue"></a>
            </div>
            <div class="section-table section-table_album section-table_desktop">
                <a name="PhotoBook"></a>
                <h2 class="section-table__title">Photo Book</h2>
                <table>
                    <tr>
                        <th></th>
                        <?php foreach ($this->dimensions as $formatName => $value) : ?>
                            <th>
                                <div class="section-table__img">
                                    <img src="/assets/images/towebp/4.8-prices/image_album_<?php echo $value['id'] ?>.svg" alt="image_album_8x8">
                                </div>
                                <span class="size-album"><?php echo $value['size'] . ' | ' . $value['size2'] ?></span>
                                <span class="pages-album">Inkl. 24 Seiten</span>
                            </th>
                        <?php endforeach ?>
                    </tr>
                    <?php
                    $addPages = [];
                    $covers = array_values($this->prices)[0];
                    foreach ($covers as $coverName => $values) : ?>
                        <tr>
                            <th class="name-type"><?php echo $coverName ?></th>
                            <?php foreach ($this->dimensions as $formatName => $value) : ?>
                                <td><?php
                                    $values = $this->prices[$formatName][$coverName];
                                    foreach ($values as $k => $value) {
                                        if ($value['paper_quality_id'] == Paperquality::$STANDARD_MATTE || $value['paper_quality_id'] == Paperquality::$PREMIUM_MATTE) {
                                            $addPages[$formatName] = $value['paper_price'];
                                            echo $this->priceRegion->symbol . $value['book_price'];
                                        }
                                    }
                                    ?></td>
                            <?php endforeach ?>
                        </tr>
                    <?php endforeach ?>
                    <tr>
                        <th class="name-type">Zus. 4 Seiten</th>
                        <?php foreach ($this->dimensions as $formatName => $value) : ?>
                            <td><?php if ($addPages[$formatName]) echo $this->priceRegion->symbol . $addPages[$formatName] ?> </td>
                        <?php endforeach ?>
                    </tr>
                    <tr>
                        <th class="name-type">Geschenkbox</th>
                        <?php foreach ($this->dimensions as $formatName => $value) : ?>
                            <td><?php $price = $this->priceRegion->getFormatBox($value['id']);
                                echo $price ? $this->priceRegion->symbol . $price : '' ?></td>
                        <?php endforeach ?>
                    </tr>
                </table>
                <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="section-table__link" target="_blank">Zum interaktiven Preisrechner <img src="/assets/images/arrow-right-blue.svg" alt="icon-arrow-right-blue"></a>
            </div>
            <!-- mobile table Photo Books -->
            <div class="section-table section-table_album section-table_mobile">
                <h2 class="section-table__title">Photo Book</h2>
                <?php foreach ($this->dimensions as $formatName => $value) : ?>
                    <table>
                        <tr>
                            <th></th>
                            <th>
                                <div class="section-table__img">
                                    <img src="/assets/images/towebp/4.8-prices/image_album_<?php echo $value['id'] ?>.svg" alt="image_album_8x8">
                                </div>
                                <span class="size-album"><?php echo $value['size'] . ' | ' . $value['size2'] ?></span>
                                <span class="pages-album">Inkl. 24 Seiten</span>
                            </th>
                        </tr>
                        <?php foreach ($covers as $coverName => $values) : ?>
                            <tr>
                                <th class="name-type"><?php echo $coverName ?></th>
                                <td><?php $values = $this->prices[$formatName][$coverName];
                                    foreach ($values as $k => $priceValues) {
                                        if ($value['paper_quality_id'] == Paperquality::$STANDARD_MATTE || $value['paper_quality_id'] == Paperquality::$PREMIUM_MATTE) {
                                            echo $this->priceRegion->symbol . $priceValues['book_price'];
                                        }
                                    } ?></td>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                            <th class="name-type">Zus. 4 Seiten</th>
                            <td><?php if ($addPages[$formatName]) echo $this->priceRegion->symbol . $addPages[$formatName] ?> </td>
                        </tr>
                        <tr>
                            <th class="name-type">Geschenkbox</th>
                            <td><?php $price = $this->priceRegion->getFormatBox($value['id']);
                                echo $price ? $this->priceRegion->symbol . $price : '' ?></td>
                        </tr>
                    </table>
                <?php endforeach ?>
                <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="section-table__link" target="_blank">Zum interaktiven Preisrechner <img src="/assets/images/arrow-right-blue.svg" alt="icon-arrow-right-blue"></a>
            </div>
            <div class="bb-line"></div>
            <div class="section-inform">
                <div class="section-inform__wrap">
                    <div class="section-inform__img">
                        <figure style="padding-bottom: calc(602% / 408 * 100)" class="figure-webp">
                            <picture data-priority="2" data-name="image" data-path="4.8-prices" class="picture-webp">
                                <source class="toggle-img--js" srcset="/assets/images/towebp/4.8-prices/min-image.webp" type="image/webp">
                                <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/4.8-prices/image.jpg" alt="two girls">
                            </picture>
                        </figure>
                    </div>
                    <div class="section-inform__text-wrap">
                        <div class="section-inform__context">
                            <h3 class="section-inform__title">Album Design Service<span>
                                    <?php if ($this->priceRegion->editors_piks != 0)
                                        echo $this->priceRegion->symbol . $this->priceRegion->design . " " . $this->translate('per page');
                                    ?>
                                </span></h3>
                            <p class="section-info__text">Du kannst einen unserer Designer dein Fotobuch erstellen lassen, individuell und passend zu deinen Bildern und deinem Stil. Das Design wird von dir online überprüft - und beinhaltet unbegrenzte Überarbeitungen.</p>
                        </div>
                        <div class="section-inform__context section-inform__context_bottom">
                            <h3 class="section-inform__title">Fotoauswahl-Service<span>
                                    <?php if ($this->priceRegion->editors_piks != 0)
                                        echo $this->priceRegion->symbol . $this->priceRegion->editors_piks . " " . $this->translate('per photo uploaded');
                                    ?></span></h3>
                            <p class="section-info__text">Schick uns alle Fotos, wir helfen bei der Auswahl, um deine Geschichte zu erzählen. Bilder mit geringer Qualität sortieren wir aus. Du überprüfst die Auswahl und gibst sie frei, bevor wir mit der Gestaltung anfangen.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bb-line"></div>
            <div class="section-inform section-inform_max-wrap">
                <div class="section-inform__wrapper">
                    <h2 class="section-inform__main-title">Lieferzeiten und Preise</h2>
                    <label for="shoppingTo">Versand in die Schweiz</label>
                    <div class="section-inform__select">
                        <select name="#" id="shoppingTo" class="tab-content__select" style="appearance: none;">
                            <?php foreach ($countryItems as $countryItem) : ?>
                                <option <?php if ($countryItem['iso'] === $selectedCountryIso) echo 'selected ' ?> value="<?php echo $countryItem['iso'] ?>"><?php echo $countryItem['name'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <img class="arrow-down" src="/assets/images/ic_chevron_down.svg" alt="ic_chevron_down">
                    </div>
                    <p>Bestell mehrere Fotobücher zusammen und spare mit unserer Versandpauschale.</p>
                    <?php foreach ($this->allRegions as $shippingRegion) : ?>
                        <span class="shippingDetails <?php if ($shippingRegion->iso != $selectedCountryIso) echo 'hide' ?>" data-iso="<?php echo $shippingRegion->iso ?>">
                            <div class="section-inform__block">
                                <h3 class="section-inform__title">Standard-Versand</h3>
                                <p>Fotobücher & Layflat-Alben: <?php echo $shippingRegion->symbol . $shippingRegion->shipping ?> </p>
                                <p>Premium-Alben: <?php echo $shippingRegion->symbol . $shippingRegion->shipping_premium ?></p>
                                <p class="section-inform__time">Produktions- und Lieferzeit <?php echo $shippingRegion->std_ship_lf_time ?> Werktage. Nicht gegen Verlust oder Beschädigung versichert..</p>
                            </div>
                            <div class="section-inform__block">
                                <h3 class="section-inform__title">Express Shipping</h3>
                                <p>Fotobücher & Layflat-Alben: <?php echo $shippingRegion->symbol . $shippingRegion->exp_ship ?></p>
                                <p>Premium-Alben: <?php echo $shippingRegion->symbol . $shippingRegion->exp_ship_premium ?></p>
                                <p class="section-inform__time">Produktions- und Lieferzeit <?php echo $shippingRegion->exp_ship_pb_time ?> Werktage. Versichert gegen Verlust oder Beschädigung.</p>
                            </div>
                        </span>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo $this->partial('application/partial/why_choose_us') ?>
<section class="section-transition section-transition_gray">
    <div class="container">
        <div class="section-transition__content">
            <h2 class="section-transition__title">Jetzt ein eigenes Fotobuch erstellen?</h2>
            <p class="section-transition__text">Der interaktive Preisrechner rechnet alle Optionen für dich durch.</p>
        </div>
        <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="button section-transition__button">JETZT STARTEN</a>
    </div>
</section>
