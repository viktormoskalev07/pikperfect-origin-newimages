<?php
$this->headTitle('Photo Editing Service | PikPerfect');
$this->headMeta()->appendName('description', 'Need help editing your photos for your wedding album or photo book? Our trained specialists are here to help.');
?>
<section class="section-title">
    <div class="section-title__container">
        <h1 class="section-title__title"><span>help</span>Photo Editing Service</h1>
    </div>
</section>
<section class="section-content">
    <div class="section-content__wrap">
        <div class="section-sidebar">
            <h3 class="section-sidebar__title">Help Topics</h3>
            <?php echo $this->partial('application/static/help_menu') ?>
        </div>
        <div class="section-content__context">
            <p class="section-content__text-strong">Do you edit my photos?</p>
            <p class="section-content__text-answer">Standard photo editing is included with all album designs. This includes optimizing your images for print, straighten, cropping and red-eye removal. If you have already applied a special filter on the photos you send us and you would prefer these are not edited in any way, please make note of this when you start your album and we’ll be happy to use your photos as-is.</p>
            <p class="section-content__text-strong">Can you do more detailed photoshopping?</p>
            <p class="section-content__text-answer">If you would like detailed photoshopping done to remove background etc, we offer this as an additional service. The cost depends on the amount of editing you need done, as well as the number of photos you’d like us to work on. It is almost always easier if you first upload your complete set of photos and then discuss with your designer which ones you would like edited. This way, we can respond with more concrete answers after having seen your photos.</p>
        </div>
    </div>
</section>
<section class="section-transition section-transition_gray">
    <div class="container">
        <div class="section-transition__content">
            <h2 class="section-transition__title">Ready to make your photobook?</h2>
        </div>
        <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="button section-transition__button">start now</a>
    </div>
</section>

<?php echo $this->render('partial/quick_chat.phtml'); ?>