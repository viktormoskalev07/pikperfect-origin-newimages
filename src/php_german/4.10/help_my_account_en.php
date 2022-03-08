<?php
$this->headTitle('Konto & Bestellungen | PikPerfectx');
$this->headMeta()->appendName('description', 'Antworten auf häufig gestellte Fragen zum Konto und Bestelldaten.');
?>
<section class="section-title">
    <div class="section-title__container">
        <h1 class="section-title__title"><span>help</span>Mein Konto</h1>
    </div>
</section>
<section class="section-content">
    <div class="section-content__wrap">
        <div class="section-sidebar">
            <h3 class="section-sidebar__title">Help Topics</h3>
            <?php echo $this->partial('application/static/help_menu') ?>
        </div>
        <div class="section-content__context">
            <p class="section-content__text-strong">Wie lange wird mein Fotobuch für Nachbestellungen gespeichert?</p>
            <p class="section-content__text-answer">Wir speichern die hochaufgelösten Daten deines Buches bis 6 Monate nach dem Kauf. So lange können Kopien oder kleinere Exemplare über die Seite <a href="<?php echo $this->url('user/order', array('language' => $this->getLanguage())); ?>" class="link" target="_blank">Meine Bestellungen</a> auf unserer Website bestellt werden. Wende dich bitte an deinen Designer, falls du die digitalen Druckdaten selbst länger speichern möchtest.</p>
            <p class="section-content__text-strong">Kann ich eine Bestellung nach der Zahlung stornieren oder ändern?</p>
            <p class="section-content__text-answer">Alle Bücher werden nach der Zahlung in Druck gegeben. Da es sich um individuell gedruckte Fotobücher handelt, kann eine Bestellung dann nicht mehr storniert oder geändert werden.</p>
            <p class="section-content__text-strong">Kann ich eine digitale Version meines Fotobuchs mit meiner Familie oder Freunden teilen?</p>
            <p class="section-content__text-answer">Absolut! Sobald das Design freigegeben und der Kauf abgeschlossen ist, bekommst du einen individuellen (nicht öffentlichen) Link zur online-Ansicht, d.h. der digitalen Kopie deines Fotobuchs. Dieser Link ist ab Kaufdatum 2 Jahre gültig.</p>
            <p class="section-content__text-strong">Wie kann ich meine Fotos löschen?</p>
            <p class="section-content__text-answer">Die Fotos von nicht bestellten Aufträgen werden nach 30 Tagen automatisch gelöscht. Hast du gerade ein Fotobuch gekauft und möchtest nicht, dass wir die Bilder und Druckdaten 6 Monate lang aufbewahren, kannst du sie unter "Meine Bestellungen" auf unserer Website selbst löschen. Bitte beachte, dass gelöschte Daten nicht wiederhergestellt und somit nicht nachbestellt werden können.</p>
            <p class="section-content__text-strong">Wie kann ich mein Konto kündigen?</p>
            <p class="section-content__text-answer">Um dein PikPerfect-Konto zu kündigen, schick eine Email mit der Bitte um Kontoschliessung an <a href="moilto:support@pikperfect.com" class="link">support@pikperfect.com</a>.</p>
        </div>
    </div>
</section>
<section class="section-transition section-transition_gray">
    <div class="container">
        <div class="section-transition__content">
            <h2 class="section-transition__title">Bereit, ein Fotobuch zu erstellen?</h2>
        </div>
        <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="button section-transition__button">JETZT STARTEN</a>
    </div>
</section>

<?php echo $this->render('partial/quick_chat.phtml'); ?>