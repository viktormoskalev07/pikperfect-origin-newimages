<?php
$this->headTitle('Fotobuch Rabatte & Aktionen | PikPerfect');
$this->headMeta()->appendName('description', 'Benötigst du einen Sonderrabatt für dein Fotobuch? Wende dich an unser Design-Team, wir helfen gerne weiter.');
?>
<section class="section-title">
    <div class="section-title__container">
        <h1 class="section-title__title"><span>help</span>Mengenrabatt</h1>
    </div>
</section>
<section class="section-content">
    <div class="section-content__wrap">
        <div class="section-sidebar">
            <h3 class="section-sidebar__title">Help Topics</h3>
            <?php echo $this->partial('application/static/help_menu') ?>
        </div>
        <div class="section-content__context">
            <p>Wir bieten einen Mengenrabatt von 25% für Bestellungen von mehr als 10 Exemplaren desselben Buches, die zusammen bestellt und an dieselbe Adresse versandt werden. Wende dich an deinen Designer, bevor du deine Bestellung aufgibst. Wir helfen dir bei der Anwendung des Rabatts im Warenkorb. Mengenrabatte können nicht mit anderen Rabatten oder Werbeaktionen kombiniert werden.</p>
            <p class="section-content__text-bottom">Für grössere Mengen schick uns bitte eine Email an <a href="moilto:support@pikperfect.com" class="link">support@pikperfect.com</a> mit den Einzelheiten zur Bestellung und der Anzahl der gewünschten Exemplare, damit wir ein individuelles Angebot erstellen können.</p>
        </div>
    </div>
</section>
<section class="section-transition section-transition_gray">
    <div class="container">
        <div class="section-transition__content">
            <h2 class="section-transition__title">Bereit, dein Fotobuch zu erstellen?</h2>
        </div>
        <a href="<?php echo $this->languageUrl('upload-photos-') ?>" class="button section-transition__button">JETZT ANFANGEN</a>
    </div>
</section>

<?php echo $this->render('partial/quick_chat.phtml'); ?>