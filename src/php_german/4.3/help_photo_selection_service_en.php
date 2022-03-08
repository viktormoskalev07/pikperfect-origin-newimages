<?php
$this->headTitle('Photo Selection Service | PikPerfect');
$this->headMeta()->appendName('description', 'Our trained specialists help choose the best ones for your photo album or photo book. You only need to do the final review and approval.');
?>
<section class="section-title">
    <div class="section-title__container">
        <h1 class="section-title__title"><span>help</span>Photo Selection Service</h1>
    </div>
</section>
<section class="section-content">
    <div class="section-content__wrap">
        <div class="section-sidebar">
            <h3 class="section-sidebar__title">Help Topics</h3>
            <?php echo $this->partial('application/static/help_menu') ?>
        </div>
        <div class="section-content__context">
            <p class="section-content__text-strong">What is the photo selection service?</p>
            <p class="section-content__text-answer">With hundreds, and often thousands of photos to sort through, choosing the best images for your photo book can be a daunting task. Instead of letting this paralyze you, our photo selection service allows you to upload ALL your photos, we then meticulously sort through and choose the ones that best tell your story.<br><br>You’ll get to review and approve the selection (or make changes) before we start working on the album design. You can still add or remove photos from the album once the design has started, just speak to your designer about this.</p>
            <p class="section-content__text-strong">How do you know which photos to select?</p>
            <p class="section-content__text-answer">Keeping in mind the album type and size you’re looking to have made, we sort through the entire photo set, narrowing it down to the images that best tell your story, and are of the best quality. We also try to ensure we cover all sections of the photo set, so may choose some images that are not perfect quality, but which we feel are part of the memory you’re trying to preserve. If there are multiple photos from a similar setting, we choose the ones that have the best quality, are well composed, have good facial expressions, and which would give us the most options while designing the albums.</p>
            <p class="section-content__text-strong">What if I don’t like the photos you select?</p>
            <p class="section-content__text-answer">We know there are always going to be those special images that you would like to include, even if they may not be the best quality. To allow for this, and to give you the opportunity to review and make any other needed changes, we’ll send you a photo selection review link and only start with the album design once you have approved the selection. On the odd chance we are not able to make a selection that you like, you will not be charged for the service.</p>
            <p class="section-content__text-strong">Can I make changes after I approve the selection?</p>
            <p class="section-content__text-answer">While it helps to have the photo selection approved before we start with the album design, we’re always happy to add or remove photos during the design process too.</p>
            <p class="section-content__text-strong">Why do you charge per image uploaded and not per image selected?</p>
            <p class="section-content__text-answer">To select the best images, we have to go through all photos a number of times before making the final selection. The more photos you send us, the longer it takes which is why we charge per photo uploaded and not per photo selected.</p>
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