<?php
$this->headTitle('Fotoauswahlservice: Wir helfen Fotos sortieren | PikPerfect');
$this->headMeta()->appendName('description', 'Unsere geschulten Spezialisten helfen dir bei der Auswahl der besten Fotos für dein Fotobuch. Du brauchst diese nur noch zu prüfen und freizugeben.');
?>
<section class="section-title">
    <div class="section-title__container">
        <h1 class="section-title__title"><span>help</span>Fotoauswahl Service</h1>
    </div>
</section>
<section class="section-content">
    <div class="section-content__wrap">
        <div class="section-sidebar">
            <h3 class="section-sidebar__title">Help Topics</h3>
            <?php echo $this->partial('application/static/help_menu') ?>
        </div>
        <div class="section-content__context">
            <p class="section-content__text-strong">Was ist der Fotoauswahlservice?</p>
            <p class="section-content__text-answer">Bei Hunderten und oft Tausenden Fotos, die es zu sortieren gilt, kann die Auswahl der besten Bilder für ein Fotobuch eine entmutigende Aufgabe sein. Anstatt sich davon lähmen zu lassen, ermöglicht dir unser Fotoauswahlservice, ALLE deine Fotos hochzuladen. Wir sortieren sie sorgfältig und wählen die aus, die deine Geschichte am besten erzählen.<br><br>Du brauchst nur noch die Auswahl zu überprüfen und freizugeben (oder letzte Änderungen vorzunehmen), bevor wir mit der Gestaltung beginnen. Auch danach lassen sich noch Fotos zum Album hinzufügen oder entfernen, sprich einfach mit deinem Designer darüber.</p>
            <p class="section-content__text-strong">Woher wisst ihr, welche Fotos ihr auswählen sollen?</p>
            <p class="section-content__text-answer">Unter Berücksichtigung der Art und Grösse des gewünschten Albums sortieren wir das gesamte Fotoset und grenzen es auf die Bilder ein, die deine Geschichte am besten erzählen und die beste Qualität haben. Wir versuchen, alle Abschnitte des Fotosets abzudecken, wählen also auch einige Bilder, die nicht die perfekte Qualität haben, unserer Meinung nach aber Teil der Erinnerung sind, die du bewahren möchtest. Wenn es mehrere Fotos in einer ähnlichen Situation gibt, wählen wir die aus, die die beste Qualität haben, gut komponiert sind, einen guten Gesichtsausdruck haben und die bei der Gestaltung die meisten Möglichkeiten geben.</p>
            <p class="section-content__text-strong">Was ist, wenn mir die ausgewählten Fotos nicht gefallen?</p>
            <p class="section-content__text-answer">Es gibt immer Bilder, die du hinzufügen möchtest, auch wenn sie möglicherweise nicht die beste Qualität haben. Um dir die Möglichkeit für individuelle Anpassungen zu geben, senden wir dir einen Überprüfungslink zur Fotoauswahl und beginnen erst mit dem Albumdesign, wenn du die Auswahl freigegeben hast. Im seltenen Fall, dass wir für dich keine grundsätzlich passende Auswahl treffen können, wird der Service nicht berechnet.</p>
            <p class="section-content__text-strong">Kann ich Änderungen vornehmen, nachdem ich die Auswahl genehmigt habe?</p>
            <p class="section-content__text-answer">Ja, sicher. Gerne fügen wir auch während des Designprozesses noch Fotos hinzu oder entfernen sie, kein Problem.</p>
            <p class="section-content__text-strong">Warum berechnet ihr pro hochgeladenem Bild und nicht pro ausgewähltem Bild?</p>
            <p class="section-content__text-answer">Um die besten Bilder auszuwählen, müssen wir alle Fotos einige Male durchgehen, bevor wir die endgültige Auswahl treffen. Je mehr Fotos du uns schickst, desto länger dauert es, weshalb wir pro hochgeladenem Foto und nicht pro ausgewähltem Foto berechnen.</p>
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