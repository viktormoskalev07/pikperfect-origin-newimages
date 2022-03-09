<?php
$this->placeholder('bodyClass')->set('main-content');
$this->headTitle('Page not Found | PikPerfect');
?>
<section class="error">
    <div class="error__container">
        <div class="error__img">
            <img src="/assets/images/Illustration_404.svg" alt="Illustration_404">
        </div>
        <h1 class="title">Page not found</h1>
        <p>Sorry, the page you're looking for cannot be found. Please check to make sure the URL entered is correct. Or start again from our Homepage.</p>
        <a href="<?php echo $this->url('home', array("language" => $this->getLanguage())) ?>" class="button">BACK TO HOMEPAGE</a>
    </div>
</section>

<?php echo $this->partial('application/partial/why_choose_us', ['color' => 'dignity_gray']) ?>