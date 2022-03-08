<?php
$this->headTitle('Fotobuch Papierqualität | Fotobuch drucken | PikPerfect');
$this->headMeta()->appendName('description', 'Wie bieten hochwertige Papiersorten für Fotobuchdruck matt oder glänzend, echtes Fuji Fotopapier,  verschiedene Papierarten für ein Fotoalbum in top Qualität.');
?>
<section class="section-title">
    <div class="section-title__container">
        <h1 class="section-title__title"><span>help</span> Fotobuch Druck & Papiere</h1>
    </div>
</section>
<section class="section-content">
    <div class="section-content__wrap">
        <div class="section-sidebar">
            <h3 class="section-sidebar__title">Help Topics</h3>
            <?php echo $this->partial('application/static/help_menu') ?>
        </div>
        <div class="section-content__context">
            <p class="section-content__text-bottom">Wir bieten eine Reihe verschiedener Papiersorten und Veredelungen an, um das jeweils passende Fotobuch zu drucken. Unser Layflat-Album wird auf Silberhalogenid-Papieren entwickelt, die sehr genaue Hauttöne, mehr Tiefe sowie eine grössere Farbpalette und Lebendigkeit bieten. Unser Fotobuch wird auf HP Indigo-Digitaldruckmaschinen hergestellt, die eine unglaubliche Detailgenauigkeit und Farbpalette für den Digitaldruck bieten, wobei sie jedoch nicht ganz an die Silberhalogenid-Belichtung heranreichen. Digital bedruckte Papiere haben den Vorteil, dass sie weniger feuchtigkeitsempfindlich sind.</p>
            <p class="section-content__text-strong">Premium-Fotoalbum Papiere</p>
            <p class="section-content__text-answer"><strong>Fujicolor Crystal Archive Digital Paper Type DPII:</strong> Speziell für den professionellen Einsatz entwickelt, bietet dieses Silberhalogenid-Papier den grössten Farbumfang, maximale Dichte für tiefe Schwarztöne und eine hervorragende Farbsättigung. Die perlmatte Oberfläche ist die beliebteste Option, da sie ein wenig glänzt und guten Kontrast hat. Das Gloss-Finish bietet mehr Glanz, wodurch die Bilder gesättigter erscheinen können, reflektiert dagegen mehr. <br><br><strong>Fujicolor Crystal Archive Professional Velvet:</strong> Dieses Silberhalogenid-Papier für den Fine Art-Markt ist professionell mit einer reflexionsfreien Deckschicht bezogen, die einen verblüffend weichen und tiefmatten Effekt erzeugt. Die samtene Oberfläche spricht den Tastsinn an. Bitte beachte, dass die Farben nicht so intensiv sind wie bei den Fuji Perlmatt oder Gloss Papieren.</p>
            <p class="section-content__text-strong">Echtfoto-Album Papiere</p>
            <p class="section-content__text-answer"><strong>Fujicolor Crystal Archive Album Paper:</strong> Dieses Silberhalogenid-Papier von Fuji ist speziell für die Herstellung von Echtfotobüchern konzipiert. Es hat eine intensive Farbwiedergabe und hervorragende Bildstabilität. Die perlmatte Oberfläche ist die beliebteste Option, da sie etwas Glanz und sehr guten Kontrast bietet. Die glänzende Oberfläche bietet mehr Glanz, was die Bilder etwas heller und mit einer höheren Farbsättigung erscheinen lässt, ist aber auch stärker reflektierend.</p>
            <p class="section-content__text-strong">Fotobuch Papiere</p>
            <p class="section-content__text-answer">OUnsere Fotobücher werden auf mattem 170 g/m²-Papier für die kleineren Formate und auf der 250 g/m²-Version des gleichen Papiers für die beiden grösseren Formate gedruckt. Dieses kräftige, gestrichene Papier liefert ein hervorragendes Ergebnis im Fotobuch-Druck. Daneben ist Felix Schoeller 190 g/m² E-PHOTO (Photo Lustre) Papier möglich, das echtem Fotopapier sehr nahe kommt.</p>
            <p>Unsere derzeitige Produktion erlaubt es nicht, einzelne Musterseiten zu drucken, aber wir beantworten gerne alle Fragen zu unseren Papieren oder zum Druck. Bitte sende uns eine Email an <a href="mailto:support@pikperfect.com" class="link">support@pikperfect.com</a>.</p>
        </div>
    </div>
</section>
<section class="section-transition section-transition_gray">
    <div class="container">
        <div class="section-transition__content">
            <h2 class="section-transition__title">Bereit, dein Fotobuch zu erstellen?</h2>
        </div>
        <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="button section-transition__button">JETZT STARTEN</a>
    </div>
</section>

<?php echo $this->render('partial/quick_chat.phtml'); ?>