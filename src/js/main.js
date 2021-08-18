const header = document.querySelector(".header");
const body = document.querySelector("body");

let scrollPos = 0;
window.addEventListener("load", function () {
  window.addEventListener("scroll", function () {
    if (scrollPos < window.scrollY && scrollPos >= 50) {
      header.classList.add("header-hide");
      scrollPos = window.scrollY;
    } else {
      header.classList.remove("header-hide");
      scrollPos = window.scrollY;
    }

    if (window.scrollY >= 50) {
      header.classList.add("header-shadow");
    } else {
      header.classList.remove("header-shadow");
    }
  });
  // body = document.body;
  html = document.querySelector("html");
  openedNav = document.querySelector(".nav-wrap");
  headerNav = document.querySelector(".header-nav");
  let ii = 0;
  document
    .querySelector(".header .menu-btn")
    .addEventListener("click", function (e) {
      header.classList.toggle("menu-open");
      document.querySelector("body").classList.toggle("overflow");
      e.preventDefault();
    });

  const elems = document.querySelectorAll(".header .menu > .has-sub-menu");

  elems.forEach((elem) =>
    elem.addEventListener("click", function () {
      if (this.classList.contains("active")) {
        elems.forEach((elem) => elem.classList.remove("active"));
      } else {
        elems.forEach((elem) => elem.classList.remove("active"));
        this.classList.add("active");
      }
    })
  );
});


// promobar




function promobar() {
  const xhr = new XMLHttpRequest();
  const promoText = document.querySelector('#promo-place-text');
  const promoCode = document.querySelector('#promo-place-code');

  xhr.open('GET', 'https://www.pikperfect.com/get-discount');
  xhr.responseType = 'json';
  xhr.addEventListener('load', function () {
    if (xhr.status < 400) {
      promoCode.innerHTML = 'Code:' + xhr.response.code;
      promoText.innerHTML = ' ' + xhr.response.text;
      promoText.classList.remove('promobar-hide');
      setTimeout(() => {
        promoCode.classList.remove('promobar-hide');
      }, 600);
    }
  })
  xhr.send();
}

promobar(); 
// promobar

(function () {
  const changePass = document.querySelector("#change-pass");
  if (changePass) {
    changePass.addEventListener('click', function () {
      document.querySelector('.tab-content__wrap-block').classList.toggle('block');
      document.querySelector("#register-current-password").focus();
    })
  }
}());



(function () {
  const textareaCount = document.querySelector("#textareaCount");
  const textCounter = document.querySelector("#textCounter");
  if (textareaCount && textCounter) {
    textareaCount.addEventListener('input', function () {
      textCounter.innerText = textareaCount.value.length;
    })
  }
}());


(function () {
  const copyText = document.getElementById("copyCode");
  const copyLink = document.getElementById("copyLink");
  if (copyText && copyLink) {
    copyLink.addEventListener('click', function () {
      window.navigator.clipboard.writeText(copyText.innerText)
    })
  }
}());

(function () {
  const btnPopupHelp = document.querySelector('#popupHelp');
  const PopupHelp = document.querySelector('.popup-help');
  const PopuopHelpName = document.querySelector("#popupHelpName");

  function helpPopupClose(e) {
    if (!(e.target.matches('.popup-help *'))) {
      PopupHelp.classList.remove('active');
      btnPopupHelp.classList.remove('active');
      document.body.removeEventListener('click', helpPopupClose)
    }
  }
  if (btnPopupHelp && PopupHelp) {
    btnPopupHelp.addEventListener('click', function (e) {
      e.stopPropagation()
      PopupHelp.classList.toggle('active');
      btnPopupHelp.classList.toggle('active');
      document.body.addEventListener('click', helpPopupClose);
      PopuopHelpName.focus();
    })
  }
}());



////////// Cookie /////////
(function () {
  const btnCookie = document.querySelector('#btnCookie');
  const sectionCookie = document.querySelector('.cookie');
  if (localStorage.getItem('cookie')) {
    sectionCookie.classList.remove("block");
  } else {
    if (btnCookie && sectionCookie) {
      sectionCookie.classList.add("block");
      btnCookie.addEventListener('click', function () {
        sectionCookie.classList.remove("block");
        localStorage.setItem('cookie', '1');
      })
    }
  }
}());
 

@@include('modules/imgpreloader.js')
@@include('modules/accordion.js') 
@@include('modules/popup-login.js')
@@include('modules/card-filter.js')
@@include('modules/optim.js')
@@include('modules/form-errors.js')
