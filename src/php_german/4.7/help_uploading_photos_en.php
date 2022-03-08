<?php
$this->headTitle('Fotobuch Bilder hochladen | Fotobuch Upload | PikPerfect');
$this->headMeta()->appendName('description', 'Antworten auf Fragen, wie man ganz einfach Fotos hochladen kann, um ein Fotobuch zu gestalten.');
?>
<section class="section-title">
    <div class="section-title__container">
        <h1 class="section-title__title"><span>help</span>Fotos hochladen</h1>
    </div>
</section>
<section class="section-content">
    <div class="section-content__wrap">
        <div class="section-sidebar">
            <h3 class="section-sidebar__title">Help Topics</h3>
            <?php echo $this->partial('application/static/help_menu') ?>
        </div>
        <div class="section-content__context">
            <p>Bei Hunderten und oft Tausenden digitaler Bilder, die für ein Fotobuch verwendet werden sollen, ist es wichtig, dass du deine Fotos schnell und einfach schicken kannst. Du hast dafür mehrere Möglichkeiten:</p>
            <ol class="section-content__text-bottom">
                <li>Lade sie vom Computer oder Mobilgerät hoch</li>
                <li>Verknüpfe dein Cloud-Speicherkonto und füge sie direkt von dort aus hinzu</li>
                <li>Schick uns einen Link an <a href="mailto:support@pikperfect.com" class="link">support@pikperfect.com</a> und wir laden die Fotos für dich herunter: Vergewisser dich, dass der Link uns Zugang zu den hochaufgelösten Originalen gibt und das Herunterladen kompletter Ordner ermöglicht.</li>
            </ol>
            <p class="section-content__text-strong">Wie erstelle ich ein Fotobuch aus DropBox? Folge diesen Schritten auch für das Fotobuch Erstellen aus Google Photos, Google Drive oder OneDrive:</p>
            <ul style="padding-inline-start: 25px;" class="section-content__text-bottom">
                <li>• Klick auf das DropBox-Symbol, das du auf der Upload-Seite siehst</li>
                <li>• Gewähre PikPerfect Zugriff</li>
                <li>• Sobald dein Konto verknüpft ist, werden deine DropBox-Ordner angezeigt. Wähl den Ordner mit den Fotos aus, die du uns schicken möchtest. Sobald er geladen ist, kannst du entweder den gesamten Ordner oder einzelne Fotos auswählen.</li>
                <li>• Klick auf FOTOS HINZUFÜGEN, um die Übertragung zu starten.</li>
                <li>• Klick auf FERTIG, wenn alle Fotos übertragen wurden.</li>
            </ul>
            <p class="section-content__text-strong">Wie lade ich Fotos aus iCloud hoch?</p>
            <p class="section-content__text-answer">Es ist nicht möglich, Fotos direkt aus iCloud zu schicken, aber man kann einen Link zu einem freigegebenen Ordner einfügen, von dem wir die Fotos dann herunterladen. Die Option zum Einfügen des Links befindet sich unterhalb der Buttons für die anderen Arten des Foto-Uploads.</p>
            <p class="section-content__text-strong">Wie lade ich Fotos von meinem Computer oder Mobilgerät hoch?</p>
            <p class="section-content__text-answer">Klick auf die Schaltfläche “Fotos hinzufügen”, um auf die Ordner auf deinem Computer/Gerät zuzugreifen. Wähl den Ordner, in dem sich die Fotos befinden, und wähl die Fotos aus, die du hochladen willst. Klicke dann auf “Öffnen”. Dies lässt sich beliebig oft wiederholen.</p>
            <p class="section-content__text-strong">Wie viele Fotos kann ich auf einmal hochladen?</p>
            <p class="section-content__text-answer">Man kann maximal 5’000 Fotos in ein einzelnes Album hochladen. Um alle Fotos in einem Ordner auszuwählen, gib Strg + A auf einem PC oder Cmd + A auf einem MAC ein (erst Strg/Cmd, dann A drücken).</p>
            <p class="section-content__text-strong">Kann ich eine ZIP-Datei schicken?</p>
            <p class="section-content__text-answer">Aus Sicherheitsgründen ist es leider nicht möglich, eine ZIP-Datei hochzuladen. Du kannst aber alle einzelnen Fotos auswählen und sie zusammen in das Upload-Fenster einfügen, anstatt sie einzeln auszuwählen (siehe Hinweis oben).</p>
            <p class="section-content__text-strong">Welches Format und welche Grösse sollten die Fotos haben?</p>
            <p class="section-content__text-answer">Wir arbeiten nur mit JPEG-Bildern. Die besten Ergebnisse erzielst du, wenn die Bilder mit mindestens 300 DPI und im sRGB-Farbraum ausgegeben wurden. Wir empfehlen immer, die hochaufgelösten Originale hochzuladen, die in der Regel 5-20 MB gross sind. Wir akzeptieren Dateien bis 40 MB.</p>
            <p class="section-content__text-strong">Ist es wichtig, die Fotos in der richtigen Reihenfolge hochzuladen?</p>
            <p class="section-content__text-answer">Nein. Die Reihenfolge, in der die Fotos hochgeladen werden, hat keinen Einfluss darauf, wie sie für uns angezeigt werden. Das System speichert sie nach Dateiname und Aufnahmedatum. Wenn beides nicht stimmt, benenne die Fotos am besten vor dem Upload in der gewünschten Reihenfolge um (s. nächster Punkt).</p>
            <p class="section-content__text-strong">Wie kann ich mehrere Dateien auf einmal umbenennen?</p>
            <p class="section-content__text-answer">PC: Wähle alle Dateien im Explorer aus, die du umbenennen willst, klicke mit der rechten Maustaste auf die erste Datei und wähle Umbenennen. Gib den gewünschten Dateinamen ein und drück die Eingabetaste. Windows Explorer fügt diesem Namen für jede Datei eine Nummer hinzu. Beispiel: Wenn du in "Urlaub" als Namen nimmst, werden die Dateien in "Urlaub (1)", "Urlaub (2)" usw. umbenannt.<br><br> MAC: Wähle die Dateien, die du umbenennen willst, im FINDER aus und klicke dann mit der rechten Maustaste auf die Auswahl - du siehst die Option Umbenennen. Wähle "Format" aus dem Dropdown-Menü und füge dann einen Namen wie "Hochzeit" hinzu. Alle Dateien werden dann nacheinander in Hochzeit 1, Hochzeit 2 usw. umbenannt.</p>
            <p class="section-content__text-strong">Der Button "Fotos hinzufügen" funktioniert nicht?</p>
            <p class="section-content__text-answer">Wenn beim Klicken auf "Fotos hinzufügen" nichts passiert, verwendest du wahrscheinlich eine ältere oder inkompatible Internet Browser-Version. Bitte aktualisiere ihn auf die neueste Version oder versuche es in einem anderen Browser. Google Chrome und Firefox sind für das Hochladen von Dateien am besten geeignet.</p>
            <p class="section-content__text-strong">Der Upload dauert sehr lange. Gibt es eine schnellere Methode?</p>
            <p class="section-content__text-answer">Die Upload-Geschwindigkeit hängt von deiner Internetverbindung und der Grösse der Fotos ab, die du uns schickst. Das Hochladen kann auch im Hintergrund (oder sogar über Nacht) laufen. Achte nur darauf, dass dein Computer nicht in den Ruhezustand geht, weil das den Upload unterbricht. Wenn das immer noch zu lang dauert und du keinen Zugang zu einer besseren Internetverbindung hast, empfehlen wir, die Fotos zunächst in DropBox, Google Photos oder einem anderen Cloud-Dienst zu speichern. Sie von dort aus zu schicken geht extrem schnell.</p>
            <p class="section-content__text-strong">Mein Upload wurde unterbrochen, was kann ich tun?</p>
            <p class="section-content__text-answer">Wenn noch nicht alle Fotos geschickt aber das Browserfenster geschlossen wurde oder der Upload auf andere Weise unterbrochen wurde, bevor du auf die FERTIG geklickt hast, erhältst du automatisch eine Email mit einem Link, über den sich der Upload fortsetzen lässt. Dies geschieht etwa 30 Minuten, nachdem wir das letzte Foto erhalten haben, ohne dass der Upload abgeschlossen wurde. Bitte schau im Spam-Ordner nach, falls du diese Email nicht erhalten hast - oder wende dich an unser Support-Team, damit sie dir den Neustart-Link zusenden kann.</p>
            <p>Solltest du hier keine Antworten auf deine Fragen finden, schick uns bitte eine Email an <a href="mailto:support@pikperfect.com" class="link">support@pikperfect.com</a>. Wir helfen gerne weiter.</p>
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