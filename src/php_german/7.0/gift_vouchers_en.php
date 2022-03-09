<?php
$this->headTitle('Personalisierter Fotobuch Geschenkgutschein | PikPerfect');
$this->headMeta()->appendName('description', 'Digitale Fotobuch-Gutscheine von PikPerfect sind ideal, um ein Fotobuch zu verschenken, das der Beschenkte in Merkmalen und Design individuell aussuchen kann.');
$region = $this->region()->getUserRegion();

$this->headScript()->appendFile('https://js.stripe.com/v3/');
$this->placeholder('addJquery')->set(true);
?>

<?php $this->placeholder('footerScripts')->captureStart(); ?>
<script type="text/javascript">
  $(function() {
    Pikperfect.PikPlaceOrder.init({
      'stripe': {
        'publishable_key': '<?php echo $this->stripeKey ?>',
        'payment_intent_code': '<?php echo $this->paymentIntentCode ?>',
        'error_message': '<?php echo addslashes($this->translate('cc_payment_error')) ?>',
        'cc_placeholder': '<?php echo addslashes($this->translate('cc_checkout_number')) ?>'
      },
      'translations': {
        'cc_required': '<?php echo addslashes($this->translate('cc_required')) ?>',
        'cc_invalid': '<?php echo addslashes($this->translate('cc_invalid')) ?>',
        'expiry_required': '<?php echo addslashes($this->translate('expiry_required')) ?>',
        'expiry_invalid': '<?php echo addslashes($this->translate('expiry_invalid')) ?>',
        'cvc_required': '<?php echo addslashes($this->translate('cvc_required')) ?>',
        'cvc_invalid': '<?php echo addslashes($this->translate('cvc_invalid')) ?>',
        'name_required': '<?php echo addslashes($this->translate('name_required')) ?>',
        'street_required': '<?php echo addslashes($this->translate('street_required')) ?>',
        'postal_required': '<?php echo addslashes($this->translate('postal_required')) ?>'
      },
    });
  });
</script>
<?php $this->placeholder('footerScripts')->captureEnd();  ?>

<section class="section-img m-auto">
  <figure style="padding-bottom: calc(505% / 1440 * 100)" class="figure-webp">
    <picture data-priority="0" data-name="photo-book-gift-voucher" data-path="7.0-gift-vouchers" class="picture-webp">
      <source class="toggle-img--js" srcset="/assets/images/towebp/7.0-gift-vouchers/min-photo-book-gift-voucher.webp" type="image/webp">
      <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/7.0-gift-vouchers/photo-book-gift-voucher.jpg" alt="Beispiel Fotobuch Geschenkgutschein von PikPerfect">
    </picture>

  </figure>
</section>
<section class="section-text section-text_padding">
  <div class="section-text__container section-text_mini-container">
    <h1 class="section-text__title">Geschenkgutschein</h1>
    <div class="section-text__content">
      <p>Mach anderen eine Freude mit einem Fotobuch Gutschein. Einfach online kaufen und ausdrucken oder per Email verschicken.</p>
    </div>
  </div>
</section>
<section class="section-form">
  <div class="section-form__wrap">
    <div class="section-form__banner">
      <div class="sample">Sample</div>
      <figure style="padding-bottom: calc(837% / 610 * 100)" class="figure-webp">
        <picture data-priority="0" data-name="image_gift_card_english_all_information" data-path="7.0-gift-vouchers" class="picture-webp">
          <source class="toggle-img--js" srcset="/assets/images/towebp/7.0-gift-vouchers/min-image_gift_card_english_all_information.webp" type="image/webp">
          <img loading="lazy" class="nowebp-img" src="/assets/images/towebp/7.0-gift-vouchers/image_gift_card_english_all_information.jpg" alt="wedding guest books">
        </picture>

      </figure>
    </div>
    <div class="section-form__form" id="giftVouchersContainer">
      <form data-action="<?php echo $this->url("send-gift-vouchers") ?>" action="#" class="tab-content__form" id="giftVouchersForm">
        <div class="tab-content__input">
          <label for="selectAnAmount">Choose Amount</label>
          <select name="select-an-amount" id="selectAnAmount" class="tab-content__select">Select an amount
            <option value="">Select an amount</option>
            <option value="25"><?php echo $region->symbol ?>25</option>
            <option value="50"><?php echo $region->symbol ?>50</option>
            <option value="100"><?php echo $region->symbol ?>100</option>
            <option value="150"><?php echo $region->symbol ?>150</option>
            <option value="200"><?php echo $region->symbol ?>200</option>
            <option value="250"><?php echo $region->symbol ?>250</option>
            <option value="300"><?php echo $region->symbol ?>300</option>
            <option value="350"><?php echo $region->symbol ?>350</option>
            <option value="400"><?php echo $region->symbol ?>400</option>
            <option value="450"><?php echo $region->symbol ?>450</option>
            <option value="500"><?php echo $region->symbol ?>500</option>
          </select>
          <p class="error hide"><?php echo $this->translate('This field is required.') ?></p>
        </div>
        <div class="tab-content__input">
          <label for="registerTo">To</label>
          <input type="text" name="to" autocomplete="off" placeholder="Hi Mom" id="registerTo">
          <p class="error hide"><?php echo $this->translate('This field is required.') ?></p>
        </div>
        <div class="tab-content__input">
          <label for="textareaCount">Your Message</label>
          <textarea name="message" class="tab-content__textarea" cols="30" rows="8" maxlength="180" id="textareaCount"></textarea>
          <span class="tab-content__counter"><span id="textCounter">0</span>/180</span>
          <p class="error hide"><?php echo $this->translate('This field is required.') ?></p>
        </div>
        <div class="tab-content__input">
          <label for="registerFrom">From</label>
          <input type="text" name="from" autocomplete="off" placeholder="Love Christy" id="registerFrom">
          <p class="error hide"><?php echo $this->translate('This field is required.') ?></p>
        </div>
        <button <?php if (!$this->isLogin()) echo ' not-logged="true" ' ?> class="popup__submit" type="button" id="makePayment">proceed to checkout</button>
        <p class="section-form__text">Rabatte und Sonderangebote können nicht auf den Kauf von Geschenkkarten angewendet werden, jedoch im Warenkorb beim Einlösen des Gutscheins.</p>
      </form>
    </div>
    <div id="pagePayment" class="gift-vouchers paymentContent hide section-form__form">
      <div class="row">
        <div class="col-xs12 payment__form">
          <div class="tab-content">
            <div class="tab-pane active" id="payWithCcContainer">
              <div class="payment__img-card">
                <div class="payment__img">
                  <img src="/assets/images/ic_visa.svg" alt="icon visa">
                </div>
                <div class="payment__img">
                  <img src="/assets/images/ic_mastercard.svg" alt="icon mastercard">
                </div>
                <div class="payment__img">
                  <img src="/assets/images/ic_american_express.svg" alt="icon american_express">
                </div>
              </div>
              <form action="<?php echo $this->url("send-gift-vouchers") ?>" method="post" autocomplete="off">
                <div class="form-content">
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p class="payment-errors error"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <label class="form-control__label" for="name">
                        <?php echo $this->translate('cc_checkout_name') ?>
                        <input type="text" class="form-control name" id="name" autocomplete="off" value="">
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-9">
                      <label class="form-control__label" for="address_line1">
                        <?php echo $this->translate('cc_checkout_address') ?>
                        <input type="text" class="form-control address_line1" id="address_line1" autocomplete="off" value="">
                      </label>
                    </div>
                    <div class="col-md-3">
                      <label class="form-control__label" for="address_zip">
                        <?php echo $this->translate('cc_checkout_postal') ?>
                        <input type="text" class="form-control address_zip" id="address_zip" autocomplete="off" value="">
                      </label>
                    </div>
                  </div>
                  <div id="cc" class="form-control"></div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-control" id="expiry"></div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-control" id="cvc"></div>
                    </div>
                  </div>
                  <div class="alert alert-info text-center hidden" id="ccProcessing">
                    <strong><?php echo $this->translate('Processing, please wait!') ?></strong>
                  </div>
                  <div class="row gift-amount">
                    Gift Card Amount: <span></span>
                  </div>
                  <div class="row">
                    <button class="btn btn-default btn-submit btn_blue paymentContent" id="submitCCForm"><?php echo $this->translate('MAKE PAYMENT') ?></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<section class="section-text">
  <div class="section-text__container">
    <h2 class="section-text__title">Bedingungen und Konditionen</h2>
    <div class="section-text__content">
      <p>Geschenkgutscheine sind nicht erstattungsfähig und können nur auf pikperfect.com eingelöst werden. Sie sind nicht übertragbar und können nicht in bar ausbezahlt werden. Fotobuch-Geschenkkarten sind zur einmaligen Verwendung und nur in der Währung des Kaufs gültig, sie können nur für eine einzige Transaktion verwendet werden. Gutscheine können nicht für frühere Bestellungen verwendet werden. <br> Alle <a href="<?php echo $this->languageUrl('static-terms-') ?>" target="_blank" class="link">Geschäftsbedingungen</a> anzeigen.</p>
    </div>
  </div>
</section>

<div class="selection-album__modal small text-center" id="giftVouchersSuccess">
  <div class="selection-album__modal-content">
    <button class="popup__close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <rect fill="transparent" width="24" height="24"></rect>
        <g style="stroke:#2f353a;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;" transform="translate(-0.662 -0.662)">
          <line x1="14" y2="14" transform="translate(5.662 5.662)"></line>
          <line x2="14" y2="14" transform="translate(5.662 5.662)"></line>
        </g>
      </svg>
    </button>
    <h6 class="message">
      Thanks for your Gift Card purchase! An order confirmation email has been sent to you.
    </h6>
  </div>
  <div class="modal-shadow blocker"></div>
</div>