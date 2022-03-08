<?php
$this->headTitle('Möglichkeiten für Fotobuch Zahlung & Versand | PikPerfect');
$this->headMeta()->appendName('description', 'PikPerfect akzeptiert die Zahlung mit allen gängigen Kreditkarten oder per Banküberweisung. Wir versenden weltweit, schnell und zuverlässig.');
?>
<section class="section-title">
    <div class="section-title__container">
        <h1 class="section-title__title"><span>help</span>Zahlung und Versand</h1>
    </div>
</section>
<section class="section-content">
    <div class="section-content__wrap">
        <div class="section-sidebar">
            <h3 class="section-sidebar__title">Help Topics</h3>
            <?php echo $this->partial('application/static/help_menu') ?>
        </div>
        <div class="section-content__context">
            <p class="section-content__text-strong">Welche Zahlungsmöglichkeiten akzeptiert ihr?</p>
            <p class="section-content__text-answer">Wir akzeptieren weltweit Zahlungen per Kreditkarte (Visa, Mastercard, American Express usw.). In der EU, der Schweiz, Australien und Grossbritannien bieten wir auch (SEPA) Banküberweisung an. Zahlungen über PayPal sind nicht möglich.</p>
            <p class="section-content__text-strong">Can I make partial payments?</p>
            <p class="section-content__text-answer">Ja, Ratenzahlung des Bestellbetrags auf zwei Mal aufgeteilt ist möglich. Die Bestellung geht in Druck, wenn der komplette Bestellbetrag eingegangen ist.</p>
            <p class="section-content__text-strong">In welche Länder liefert ihr?</p>
            <p class="section-content__text-answer">Wir liefern in über 140 Länder der Welt. Sollte dein Land nicht in der Auswahlliste an der Kasse sein, sende uns bitte eine Email an <a href="mailto:support@pikperfect.com" class="link">support@pikperfect.com</a>. Wir kümmern uns drum.</p>
            <p class="section-content__text-strong">Was ist eine Versandpauschale?</p>
            <p class="section-content__text-answer">Wir bieten eine Versandkostenpauschale an, d.h. du bestellst so viele Bücher oder Kopien eines Buches wie du magst und zahlst trotzdem die gleichen Versandkosten.</p>
            <p class="section-content__text-strong">Lokale Zölle und Zollgebühren</p>
            <p class="section-content__text-answer">Bei Bestellungen, die in die Schweiz, nach Deutschland und Irland versandt werden, ist die Mehrwertsteuer enthalten. Bestellungen in andere Länder enthalten keine Mehrwertsteuer oder Abgaben. Bücher sind oft mehrwertsteuerfrei oder reduziert, z.B. im Vereinigten Königreich, wo derzeit 0% Mehrwertsteuer auf Bücher erhoben wird. Erkundige dich bitte dennoch bei den örtlichen Behörden, da PikPerfect nicht für erhobene Steuern oder Zölle verantwortlich ist.</p>
            <p class="section-content__text-strong">Welche Versandart verwendet ihr?</p>
            <p class="section-content__text-answer">Bei Standardversand erfolgt die Zustellung durch deinen örtlichen Postanbieter. Als zuverlässigere und schnellere Option empfehlen wir DHL Express. Dauer und Preise für die verschiedenen Optionen findest du <a href="https://www.pikperfect.com/help/prices" class="link">hier</a>.</p>
            <p class="section-content__text-strong">Kann ich an mehrere Adressen liefern?</p>
            <p class="section-content__text-answer">Eine einzelne Bestellung (auch mit mehreren Büchern) kann nur an eine Adresse versandt werden. Für weitere Lieferungen bestell die entsprechenden Exemplare bitte separat und pass die Adresse jeweils im Warenkorb an.</p>
            <p class="section-content__text-strong">Wie kann ich meine Bestellung verfolgen?</p>
            <p class="section-content__text-answer">Du erhältst eine Tracking-Nummer per Email, wenn deine Bestellung verschickt wird.</p>
            <p class="section-content__text-strong">Was ist der Neukundenrabatt?</p>
            <p class="section-content__text-answer">Der Neukundenrabatt bietet Erstkunden einen Rabatt von 25% auf die Gestaltungskosten (nicht auf den Gesamtbetrag der Bestellung) für alle Fotobücher der ersten Bestellung. Der Rabattcode für Neukunden muss vor dem Kauf im Warenkorb und kann nicht rückwirkend angewendet werden.</p>
            <p class="section-content__text-strong">Ist eine Vorauszahlung erforderlich, um mein Buch zu drucken?</p>
            <p class="section-content__text-answer">Ja. Da jedes Buch individuell mit deinen Fotos gedruckt wird, können wir erst nach Zahlungseingang mit der Produktion beginnen.</p>
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