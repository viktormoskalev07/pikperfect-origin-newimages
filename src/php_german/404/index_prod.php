<?php
$this->placeholder('bodyClass')->set('main-content');
$this->headTitle('Seite nicht gefunden | PikPerfect');
?>
<section class="error">
    <div class="error__container">
        <div class="error__img">
            <img src="/assets/images/Illustration_404.svg" alt="Illustration_404">
        </div>
        <h1 class="title">Seite nicht gefunden</h1>
        <p>Die von dir gesuchte Seite kann leider nicht gefunden werden. Bitte überprüfe, ob die eingegebene URL korrekt ist. Oder starte von unserer Homepage aus.</p>
        <a href="<?php echo $this->url('home', array("language" => $this->getLanguage())) ?>" class="button">ZUR HOMEPAGE</a>
    </div>
</section>

<?php echo $this->partial('application/partial/why_choose_us', ['color' => 'dignity_gray']) ?>