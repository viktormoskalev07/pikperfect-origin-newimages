<?php
$this->headTitle('Fotobearbeitung Service: Wir optimieren Fotos | PikPerfect');
$this->headMeta()->appendName('description', 'Möchtest du deine Fotos für ein Hochzeitsalbum oder Fotobuch bearbeiten? Unsere geschulten Spezialisten helfen dir gerne weiter.');
?>
<section class="section-title">
    <div class="section-title__container">
        <h1 class="section-title__title"><span>help</span>Fotobearbeitungsservice</h1>
    </div>
</section>
<section class="section-content">
    <div class="section-content__wrap">
        <div class="section-sidebar">
            <h3 class="section-sidebar__title">Help Topics</h3>
            <?php echo $this->partial('application/static/help_menu') ?>
        </div>
        <div class="section-content__context">
            <p class="section-content__text-strong">Bearbeitet ihr meine Fotos?</p>
            <p class="section-content__text-answer">Eine Standard-Fotobearbeitung ist in jeder Fotobuch Gestaltung enthalten. Dazu gehört die Optimierung deiner Bilder für den Druck, gerade ausrichten, zuschneiden und Rote-Augen-Korrektur. Falls du einen Filter angewendet hast und nicht möchtest, dass die Fotos bearbeitet werden, vermerke es einfach bei der Auftragsanlage.</p>
            <p class="section-content__text-strong">Macht ihr auch Photoshopping?</p>
            <p class="section-content__text-answer">Eine detaillierte Bearbeitung der Fotos zum Entfernen von Hintergrund usw. bieten wir als zusätzlichen Service an. Die Kosten hängen vom Arbeitsaufwand ab sowie der Anzahl Fotos. Es ist am besten, wenn du erst einmal deinen kompletten Fotosatz hochlädst und dann mit deinem Designer besprichst, was du bearbeiten möchtest. So können wir konkrete Antworten und Kostenvoranschläge geben, nachdem wir die Fotos gesehen haben.</p>
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