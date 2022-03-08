<?php
$this->headTitle('Fotobuch Designservice: Wir gestalten für dich | PikPerfect');
$this->headMeta()->appendName('description', 'Leichter geht’s nicht: Fotobuch vom Profi gestalten lassen. Unbegrenzte gratis Überarbeitungen, keine Anzahlung. Du bezahlst erst, wenn das Buch in Druck geht.');
$region = $this->region()->getUserRegion();
?>
<section class="section-title">
    <div class="section-title__container">
        <h1 class="section-title__title"><span>help</span>Fotobuch Design Service</h1>
    </div>
</section>
<section class="section-content">
    <div class="section-content__wrap">
        <div class="section-sidebar">
            <h3 class="section-sidebar__title">Help Topics</h3>
            <?php echo $this->partial('application/static/help_menu') ?>
        </div>
        <div class="section-content__context">
            <div class="section-img section-img_mb-77 video-full-hd">
                <div class="lazy-video">
                    <div class="lazy-video__preloader">
                        <svg class="lazy-video__preloader-svg" width="60" height="60" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg" stroke="#8ba4b4">
                            <g fill="none" fill-rule="evenodd">
                                <g transform="translate(1 1)" stroke-width="2">
                                    <circle stroke-opacity=".5" cx="18" cy="18" r="18" />
                                    <path d="M36 18c0-9.94-8.06-18-18-18">
                                        <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="1s" repeatCount="indefinite" />
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="lazy-video__item "><iframe frameborder="0" class="lazy-video__activator-js" data-src="https://player.vimeo.com/video/569987859?background=1 " allow="autoplay; fullscreen; picture-in-picture" title="Photo Book vs Photo Album | PikPerfect"></iframe>
                    </div>
                </div>
            </div>
            <p class="section-content__text-strong">Was ist der Fotobuch Gestaltungsservice?</p>
            <p class="section-content__text-answer">Wenn du nicht die Zeit, Geduld oder Erfahrung hast, dein eigenes Fotobuch oder Hochzeitsalbum zu gestalten, ist unser <a href="<?php echo $this->languageUrl('static-howItWorks-') ?>" target="_blank" class="link">Fotobuch Gestaltungsservice</a> genau richtig. Du sparst viele Stunden Arbeit: einfach Fotobuch vom Profi gestalten lassen, genau nach deinen Vorstellungen.</p>
            <p class="section-content__text-strong">Wie viel kostet es und bezahle ich im Voraus?</p>
            <p class="section-content__text-answer">Es ist keine Anzahlung nötig, unser Service kann kostenlos ausprobiert werden. Lade alle Bilder hoch und lass unser Designteam einen ersten Entwurf des Albums gestalten. Alle Gestaltungen beinhalten unbegrenzte kostenlose Überarbeitungen, damit du mit dem Design vollkommen zufrieden bist, bevor das Buch in Druck geht. Sollten wir es ausnahmsweise einmal nicht schaffen, Layouts zu gestalten, die dir gefallen, besteht keine Kaufverpflichtung. Die Kosten für die Gestaltung hängen davon ab, wie viele Seiten das Album umfasst, Details zu allen Kosten findest du <a href="https://www.pikperfect.com/help/prices" target="_blank" class="link">hier</a> aufgelistet.</p>
            <p class="section-content__text-strong">Ich bin mir nicht sicher, welches Album oder Design am besten zu meinen Fotos passt.</p>
            <p class="section-content__text-answer">Kein Problem, wir helfen gerne! Gib uns eine Vorstellung davon, welche Ästhetik dir gefällt, oder überlass es einfach unserem Designteam: Sie zeigen dir ein paar Varianten, die gut zu deinen Fotos passen. Wie gesagt, alle Designs beinhalten unbegrenzte gratis Überarbeitungen. Wenn dir die gezeigten Stile nicht gefallen, erstellen wir einige neue, bis wir etwas finden, das dir gefällt.</p>
            <p class="section-content__text-strong">Kann ich was ändern, bevor es in Druck geht?</p>
            <p class="section-content__text-answer">Natürlich! Du prüfst und kommentierst jeden neuen Entwurf des Fotobuchgestaltung. Erst wenn du mit dem Design vollkommen zufrieden bist, benötigen wir deine Zahlung, um das Fotobuch zu drucken.</p>
            <p class="section-content__text-strong">Sind die Überarbeitungen wirklich unbegrenzt gratis?</p>
            <p class="section-content__text-answer">Während die meisten Kunden nach 2-6 Feedbackrunden mit dem Design zufrieden sind, fahren wir gerne mit den Änderungen fort, falls für dein Album mehr nötig ist. Manchmal verlangen wir dann eine Anzahlung als Zeichen deines guten Willens. Dies ist nur ein Vorschuss, um sicherzustellen, dass unser Service nicht missbraucht wird.</p>
            <p class="section-content__text-strong">Kann ich Fotos hinzufügen oder entfernen, nachdem das Design begonnen wurde?</p>
            <p class="section-content__text-answer">Absolut! Es ist hilfreich, die Fotoauswahl freizugeben, bevor wir mit dem Albumdesign beginnen, um zusätzliches Hin und Her zu vermeiden. Fotos zum Design hinzuzufügen oder daraus zu entfernen, ist aber zu jeder Zeit vor Freigabe der Gestaltung möglich.</p>
            <p class="section-content__text-strong">Ist es möglich, Änderungen selbst vorzunehmen oder das Buch selbst zu gestalten?</p>
            <p class="section-content__text-answer">Für etwas so Wichtiges wie ein Hochzeitsalbum oder ein Fotobuch für besondere Anlässe wünschen sich viele Paare die Hilfe eines erfahrenen Fotobuch-Gestalters. Für mehr Kontrolle über den Prozess bietet unsere Schwesterfirma Piktology die Möglichkeit, <a href="https://www.piktology.com/" target="_blank" class="link">ein eigenes Fotobuch zu gestalten</a>.</p>
            <p class="section-content__text-strong">Wie lange dauert der gesamte Gestaltungsprozess?</p>
            <p class="section-content__text-answer">Abhängig davon, wie viele Bücher wir derzeit in der Warteschlange haben, versenden wir den ersten Entwurf normalerweise innerhalb von 2-4 Werktagen. Danach liegt es an dir, wie schnell du uns Feedback schickst. Änderungswünsche werden in der Regel am nächsten Tag erledigt.</p>
            <p class="section-content__text-strong">Bin ich auf die von euch gezeigten Layouts beschränkt?</p>
            <p class="section-content__text-answer">Absolut nicht. Unsere Website zeigt einige beliebte Fotobuch Design Stile, aber da jedes Album von Grund auf neu erstellt wird, können wir es ganz nach Wunsch gestalten. Schick uns Details und Beispiele, falls du ein Thema, Stil oder eine Idee im Sinn hast. Wir setzen deine Vorstellungen um.</p>
            <p class="section-content__text-strong">Kann ich das Design mit Familie und Freunden teilen?</p>
            <p class="section-content__text-answer">Während der Gestaltung kann nur über dein Konto darauf zugegriffen werden. Du erhältst einen Link, um dich automatisch anzumelden und den Entwurf in deinem Konto anzuzeigen. Natürlich kannst du ihn mit Familie oder Freunden teilen (wodurch sie Zugriff auf dein Konto erhalten), wenn du magst. Nachdem du das Design freigegeben hast und das Buch in Druck geht, erhältst du einen anderen Link, um die endgültige Version mit Familie und Freunden zu teilen. Für diesen Link braucht man sich nicht anzumelden.</p>
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