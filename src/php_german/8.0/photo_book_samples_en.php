<?php
$this->headTitle('Fotobuch Beispiele | Fotoalbum Kundenbeispiele | PikPerfect');
$this->headMeta()->appendName('description', 'Lass dich von den Fotobuch Kundenbeispielen inspirieren. Wir haben eine Auswahl der beliebtesten Fotobuchbeispiele zusammengestellt.');
?>
<section class="section-img m-auto">
    <figure style="padding-bottom: calc(505% / 1440 * 100)" class="figure-webp">
        <picture data-priority="0" data-name="wedding-photo-book-sample" data-path="8.0-photobook-sample-gallery" class="picture-webp">
            <source class="toggle-img--js" srcset="/assets/images/towebp/8.0-photobook-sample-gallery/min-wedding-photo-book-sample.webp" type="image/webp">
            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/8.0-photobook-sample-gallery/wedding-photo-book-sample.jpg" alt="Beispiel Hochzeitsalbum ansehen">
        </picture>

    </figure>
</section>

<section class="section-text section-text_entered">
    <div class="section-text__container">
        <h1 class="section-text__title">Fotobuch-Muster Galerie</h1>
        <div class="section-text__content">
            <p>Unsere Leidenschaft ist es schöne Fotobücher zu gestalten für Menschen auf der ganzen Welt. Mit deren Erlaubnis zeigen wir einige Fotobuch Beispiele und Design-Vorlagen.</p>
        </div>
    </div>
</section>
<section class="section-photobooks">
    <div class="section-photobooks__wrap">
        <div class="section-photobooks__sidebar">
            <button class="popup__close close-filter">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <rect fill="transparent" width="24" height="24"></rect>
                    <g style="stroke:#2f353a;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;" transform="translate(-0.662 -0.662)">
                        <line x1="14" y2="14" transform="translate(5.662 5.662)"></line>
                        <line x2="14" y2="14" transform="translate(5.662 5.662)"></line>
                    </g>
                </svg>
            </button>
            <div class="section-photobooks__sidebar-wrap" id="byOccasion">
                <h3 class="section-photobooks__title--radio">Anlass</h3>
                <div class="photobook__radio__container">
                    <?php foreach ($this->occasions as $occasion): if ($occasion['parent_id']) continue; ?>
                    <label class="photobook__radio__label">
                        <input class="photobook__radio__input" type="radio" name="occasion" value="<?php echo $occasion['id']?>">
                        <span class="photobook__radio__checker"></span>     
                        <span class="photobook__radio__text"><?php echo $this->translate($occasion['name'])?></span>
                    </label>
                    <?php endforeach ?>
                    <label class="photobook__radio__label">
                        <input class="photobook__radio__input" checked type="radio" name="occasion" value="all">
                        <span class="photobook__radio__checker"></span>
                        <span class="photobook__radio__text">Alle</span>
                    </label>
                </div>
            </div>
            <div class="section-photobooks__sidebar-wrap hide" id="byDesign">
                <h3 class="section-photobooks__title--radio">By design</h3>
                <div class="photobook__radio__container">
                    <?php foreach ($this->occasions as $occasion): if (!$occasion['parent_id']) continue; ?>
                    <label class="photobook__radio__label" data-occasion-id="<?php echo $occasion['parent_id']?>">
                        <input class="photobook__radio__input" type="radio" name="design" value="<?php echo $occasion['id']?>" data-occasion="<?php echo $occasion['parent_id']?>">
                        <span class="photobook__radio__checker"></span>
                        <span class="photobook__radio__text"><?php echo $this->translate($occasion['name'])?></span>
                    </label>
                    <?php endforeach ?>
                    <label class="photobook__radio__label all">
                        <input class="photobook__radio__input" checked type="radio" name="design" value="all">
                        <span class="photobook__radio__checker"></span>
                        <span class="photobook__radio__text">Alle</span>
                    </label>
                </div>
            </div>
            <div class="section-photobooks__button section-photobooks__button_apply">
                <button class="button" id="filtrsBtnApply">Anwenden</button>
            </div>
        </div>
        <div class="section-photobooks__button">
            <button class="button" id="filtrsBtn">Filters</button>
        </div>
        <style>
            .light-italic {
                font-weight: 300;
                font-style: italic;
            }

            .cursor-pointer {
                cursor: pointer;
            }
        </style>
        <div class="section-photobooks__blocks">
            <?php foreach ($this->albums as $album): ?>
            <div data-occasion="<?php echo $album['occasion_id']?>" data-occasion-design="<?php echo $album['occasion_design_id']?>" data-folder="<?php echo $album['path']?>" data-galleryimages="<?php echo $album['images']?>" class="gallery__activator-js filtered-card-js section-photobooks__block">
                <figure style="padding-bottom: calc(310% / 290 * 100)" class="figure-webp">
                    <picture class="picture-webp">
                        <img loading="lazy" class="nowebp-img" src="<?php echo $album['thumb_url']?>" alt="<?php echo htmlentities($album['title'])?>">
                    </picture>
                </figure>
                <h4 class="section-photobooks__name-album"><?php echo $album['title']?></h4>
                <p class="section-photobooks__price light-italic"><?php echo $this->translate($album['occasion_name'])?></p>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<?php echo $this->partial('application/partial/why_choose_us') ?>
<?php echo $this->partial('application/partial/reviews_widget', ['product' => 'photo-book']) ?>
<section class="gallery__container gallery__fade gallery__d-none">
    <div class="gallery__background"></div>
    <div class="gallery__content">
        <div class="swiper-container swiperGallery">
            <div class="swiper-wrapper">
            </div>
        </div>
        <div class="gallery__button">
            <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="button" id="createSimilar" data-url="<?php echo $this->languageUrl('upload-photos-') ?>">create similar album</a>
        </div>

        <div class="gallery__controls">
            <div class="gallery__prev"><img src="/assets/images/icons/circle_arrow_left.svg" alt="slide to previous image"></div>
            <button class="gallery__fullscreen-btn"> <img src="/assets/images/icons/rotate.svg" alt=""></button>
            <div class="gallery__next"> <img src="/assets/images/icons/circle_arrow_right.svg" alt="slide to next image"></div>
        </div>
    </div>
    <button type="button" class="gallery__close">galerie schliessen</button>
</section>

<?php echo $this->render('partial/quick_chat.phtml'); ?>