<?php
$this->headTitle('Verlobung Fotobuch oder Fotoalbum erstellen| PikPerfect');
$this->headMeta()->appendName('description', 'Ein hochwertiges Verlobungsfotobuch schön gestalten als bleibende Erinnerung eurer Liebe. Von deinem persönlichen Designer mit Auge fürs Detail erstellt.');
$region = $this->region()->getUserRegion();
?>
<section class="section-hero__image-left">
  <div class="section-hero__wrap-flex">
    <div class="section-hero__image-col px-0">
      <figure style="padding-bottom: calc(505% / 880 * 100)" class="figure-webp">
        <picture data-priority="0" data-name="engagement-photo-album-covers" data-path="2.9-engagement-photo-book" class="picture-webp">
          <source class="toggle-img--js" srcset="/assets/images/towebp/2.9-engagement-photo-book/min-engagement-photo-album-covers.webp" type="image/webp">
          <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/2.9-engagement-photo-book/engagement-photo-album-covers.jpg" alt="Einband Fotobuch mit verlobtem Paar beim Hochzeitsantrag">
        </picture>

      </figure>


    </div>
    <div class="section-hero__content-col section-hero__content-col_gray-pink">
      <div class="section-hero__bg">
        <picture data-priority="0" data-name="image_texture" data-path="" class="picture-webp">
          <source class="toggle-img--js" srcset="/assets/images/towebp//min-image_texture.webp" type="image/webp">
          <img loading="lazy" class="nowebp-img" src="/assets/images/towebp//image_texture.jpg" alt="bg-hero">
        </picture>


      </div>
      <h1 class="section-hero__size-title">Fotobuch Verlobung</h1>
      <p class="entered-text">Eine dauerhafte Erinnerung an eure Liebe mit einem wunderschön gestalteten Verlobungsfotoalbum erstellen.</p>
      <a href="<?php echo $this->languageUrl('upload-photos-') ?>?occasion=8" class="button button__gray-pink">JETZT ANFANGEN</a>
      <p class="price"><?php echo $this->translate('From') . ' ' . $this->format(
                          $this->smallestPrices['photobook'],
                          $region->iso,
                          2,
                          $region->symbol
                        ); ?></p>
    </div>
  </div>
</section>
<section class="section-text section-text_padding">
  <div class="section-text__container section-text__container_max">
    <div class="section-text__content">
      <p>Dieses JA ist einer der wunderbarsten Momente deines Lebens! Halte ihn oder ein professionelles Verlobung Fotoshooting fest und verewige diese schönen Erinnerungen in einem elegant gestalteten Verlobungsfotobuch, das ein Leben lang hält und geschätzt wird.</p>
    </div>
  </div>
</section>
<section class="section-service section-service_big-cards">
    <div class="section-service__cards">
        <div class="section-service__card">
            <h3 class="section-service__number">1.</h3>
            <h4 class="section-service__name-service">Du wählst</h4>
            <p>Teil uns deinen gewünschten Fotobuchtyp und Albumdesignstil mit und lade deine Fotos hoch.</p>
        </div>
        <div class="section-service__card">
            <h3 class="section-service__number">2.</h3>
            <h4 class="section-service__name-service">Wir gestalten</h4>
            <p>Unsere Fotobuchdesigner erwecken dein Album zum Leben. Überarbeitungen inklusive.</p>
        </div>
        <div class="section-service__card">
            <h3 class="section-service__number">3.</h3>
            <h4 class="section-service__name-service">Zahle zum Drucken</h4>
            <p>Zahle erst, wenn du 100 % mit dem Design zufrieden bist <br>(ohne Kaufverpflichtung).</p>
        </div>
    </div>
</section>
<section class="section-img section-img_size-m">
  <div class="section-img__container">
    <figure style="padding-bottom: calc(600% / 1376 * 100)" class="figure-webp">
      <picture data-priority="2" data-name="engagement-photo-albums" data-path="2.9-engagement-photo-book" class="picture-webp">
        <source class="toggle-img--js" srcset="/assets/images/towebp/2.9-engagement-photo-book/min-engagement-photo-albums.webp" type="image/webp">
        <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/2.9-engagement-photo-book/engagement-photo-albums.jpg" alt="Offenes Premium Verlobungs Fotoalbum mit Ringen">
      </picture>

    </figure>


  </div>
</section>
<section class="section-img-text">
  <div class="section-img-text__container section-img-text_wrapper">
    <div class="section-img-text__wrap">
      <div class="section-img-text__img">
        <figure>
          <picture data-priority="1" data-name="engagement-photo-book-design" data-path="2.9-engagement-photo-book" class="picture-webp">
            <source class="toggle-img--js" srcset="/assets/images/towebp/2.9-engagement-photo-book/min-engagement-photo-book-design.webp" type="image/webp">
            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/2.9-engagement-photo-book/engagement-photo-book-design.jpg" alt="Individuell gestaltetes Verlobungs Fotobuch Leinen Rot">
          </picture>


        </figure>
      </div>
      <div class="section-img-text__content">
        <div class="section-img-text__content-wrap">
          <h2 class="section-img-text__title">Verlobungsalbum Ideen</h2>
          <p>Wir bieten verschiedene Möglichkeiten, um ein individuelles Verlobungsalbum zu erstellen. Wenn nur das Beste gut genug ist, empfehlen wir ein <a href="<?php echo $this->languageUrl('static-premium-layflat-albums-') ?>" target="_blank" class="link">Premium Layflat Album</a> mit dicken Echtfotoseiten und einer Auswahl an Premium Fotoalbum Covern.</p>
        </div>
      </div>
    </div>
    <div class="section-img-text__wrap section-img-text__wrap_order">
      <div class="section-img-text__img">
        <figure>
          <picture data-priority="1" data-name="engagement-photo-books" data-path="2.9-engagement-photo-book" class="picture-webp">
            <source class="toggle-img--js" srcset="/assets/images/towebp/2.9-engagement-photo-book/min-engagement-photo-books.webp" type="image/webp">
            <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/2.9-engagement-photo-book/engagement-photo-books.jpg" alt="Fotobuch mit Verlobungsfotos von Paar neben Wasserfall">
          </picture>


        </figure>
      </div>
      <div class="section-img-text__content">
        <div class="section-img-text__content-wrap">
          <p>Unser <a href="<?php echo $this->languageUrl('static-layflat-photo-albums-') ?>" target="_blank" class="link">Layflat-Fotobuch</a> ist die beliebteste Option bei Paaren, da es hervorragende Qualität zu attraktiven Preisen bietet. Diese Alben wurden auf echtem Fotopapier entwickelt und zeigen eure Lieblingsfotos auf atemberaubenden nahtlosen Doppelseiten. Benötigt ihr besonders viele Seiten? Dann ist unser <a href="<?php echo $this->languageUrl('static-custom-photo-books-') ?>" target="_blank" class="link">cuHardcover Fotobuch</a> mit bis zu 240 Seiten ideal.</p>
          <div class="section-img-text__button">
            <a href="<?php echo $this->languageUrl('upload-photos-') ?>?occasion=8" class="button ">JETZT STARTEN</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-album section-album_size-xxl">
  <div class="section-album__container">
    <div class="section-album__wrap-content">
      <h2 class="section-album__title">Verlobung Album online erstellen</h2>
      <p class="section-album__entered">Arbeite mit unserem Designteam zusammen, um genau das Verlobungsfotoalbum zu gestalten, das eure Liebe verdient. Alle Verlobungsbuch-Gestaltungen werden von Grund auf neu erstellt, um deinem Stil zu entsprechen. Unbegrenzte gratis Überarbeitungen inklusive, damit dein Album perfekt ist, bevor es in Druck geht.</p>
    </div>
    <div class="swiper-container swiperalbum ">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure style="padding-bottom: calc(362% / 362 * 100)" class="figure-webp">
            <picture data-priority="1" data-name="image_engagement_example_1" data-path="2.9-engagement-photo-book" class="picture-webp">
              <source class="toggle-img--js" srcset="/assets/images/towebp/2.9-engagement-photo-book/min-image_engagement_example_1.webp" type="image/webp">
              <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/2.9-engagement-photo-book/image_engagement_example_1.jpg" alt="album Love">
            </picture>

          </figure>


          <h3 class="section-album__name-title">Love<span>Engagement</span></h3>
        </div>
        <div class="swiper-slide">
          <figure style="padding-bottom: calc(362% / 362 * 100)" class="figure-webp">
            <picture data-priority="2" data-name="image_engagement_example_2" data-path="2.9-engagement-photo-book" class="picture-webp">
              <source class="toggle-img--js" srcset="/assets/images/towebp/2.9-engagement-photo-book/min-image_engagement_example_2.webp" type="image/webp">
              <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/2.9-engagement-photo-book/image_engagement_example_2.jpg" alt="album The Perfect Day">
            </picture>

          </figure>


          <h3 class="section-album__name-title">The Perfect Day<span>Engagement</span></h3>
        </div>
        <div class="swiper-slide">
          <figure style="padding-bottom: calc(362% / 362 * 100)" class="figure-webp">
            <picture data-priority="2" data-name="image_engagement_example_3" data-path="2.9-engagement-photo-book" class="picture-webp">
              <source class="toggle-img--js" srcset="/assets/images/towebp/2.9-engagement-photo-book/min-image_engagement_example_3.webp" type="image/webp">
              <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/2.9-engagement-photo-book/image_engagement_example_3.jpg" alt="album Adrian & Jennifer">
            </picture>

          </figure>


          <h3 class="section-album__name-title">Adrian & Jennifer<span>Engagement</span></h3>
        </div>
        <div class="swiper-slide">
          <figure style="padding-bottom: calc(362% / 362 * 100)" class="figure-webp">
            <picture data-priority="2" data-name="image_engagement_example_4" data-path="2.9-engagement-photo-book" class="picture-webp">
              <source class="toggle-img--js" srcset="/assets/images/towebp/2.9-engagement-photo-book/min-image_engagement_example_4.webp" type="image/webp">
              <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/2.9-engagement-photo-book/image_engagement_example_4.jpg" alt="album Us, forever">
            </picture>

          </figure>


          <h3 class="section-album__name-title">Us, forever.<span>Engagement</span></h3>
        </div>
      </div>
      <div class="swiper-pagination swiperalbum-pagination"></div>
    </div>
    <div class="section-album__button">
      <a href="<?php echo $this->languageUrl('static-photo-book-samples-') ?>" class="button button__light_border">view more</a>
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
<section class="section-transition">
  <div class="container">
    <div class="section-transition__content">
      <h2 class="section-transition__title">Jetzt ein Fotobuch Verlobung erstellen?</h2>
    </div>
    <a href="<?php echo $this->languageUrl('upload-photos-') ?>?occasion=8" class="button button__light section-transition__button section-transition__button_big">FOTOBUCH ANFANGEN</a>
  </div>
</section>
<?php echo $this->partial('application/partial/why_choose_us') ?>
<section class="section-text section-text_white">
  <div class="section-text__container section-text_big-container">
    <h2 class="section-text__title">Warum ein Fotoalbum zur Verlobung erstellen?</h2>
    <div class="section-text__content">
      <p>Whether you want to make an engagement present for your partner or a gift for your parents-in-law, designing an engagement photo book is the perfect way to share your love story. When you <a href="<?php echo $this->languageUrl('static-photo-books-') ?>" class="link" target="_blank">create a photo book</a> with PikPerfect, our experienced photo album designers will craft a stunning memento that reflects your individual taste and budget.</p>
      <p>Unser Premium Fotoalbum wird aus hochwertigen Materialien handgefertigt und hat harte, flachliegende Seiten. Die Qualität ist durch sein professionelles Fotopapier und eine Reihe luxuriöser Einbände, darunter elegante <a href="<?php echo $this->languageUrl('static-leather-photo-albums-') ?>" class="link" target="_blank">Fotobuch Einbände aus echtem Leder</a> und Leinen, einfach überragend.</p>
      <p>Zu viele Fotos vom Verlobungs Fotoshooting? Unser talentiertes Designteam hilft dir bei der Auswahl der Fotos, die die Geschichte eurer Liebe am besten erzählen. Und entwerfen dann eine schöne Gestaltung für ein Verlobungsalbum. Unbegrenzte Überarbeitungen sind gratis, damit du vollkommen zufrieden bist, bevor dein Verlobung Fotobuch in Druck geht.</p>
    </div>
  </div>
</section>

<?php echo $this->render('partial/quick_chat.phtml'); ?>