const header = document.querySelector(".header");
const body = document.querySelector("body"); 
const mediaQuery = window.matchMedia('(max-width: 580px)').matches;  
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
      header.classList.add("header-fixed");
    } else {
      header.classList.remove("header-fixed");
    }
  }); 
  html = document.querySelector("html");
  openedNav = document.querySelector(".nav-wrap");
  headerNav = document.querySelector(".header-nav");
  let ii = 0;
   const navbtn =document.querySelector(".header .menu-btn");
   if(navbtn){
    navbtn.addEventListener("click", function (e) {
      header.classList.toggle("menu-open");
      document.querySelector("body").classList.toggle("overflow");
      e.preventDefault();
    });

   }

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
(function(){
  const promoText = document.querySelector('#promo-place-text');
  const promoCode = document.querySelector('#promo-place-code');
  function promobar() {
    const xhr = new XMLHttpRequest(); 
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
  if(promoText){
      promobar(); 
  } 
}());

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
  const copyText = document.getElementById("copyCodeAlbum");
  const copyLink = document.getElementById("copyLinkAlbum");
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
      body.classList.remove('overflow');
      document.body.removeEventListener('click', helpPopupClose)
    }
  }
  if (btnPopupHelp && PopupHelp) {
    btnPopupHelp.addEventListener('click', function (e) {
      e.stopPropagation()
      
      PopupHelp.classList.toggle('active');
      btnPopupHelp.classList.toggle('active');
      document.body.addEventListener('click', helpPopupClose);
      if (window.matchMedia("(min-width: 768px)").matches) {
        PopuopHelpName.focus();
      }
      if (window.matchMedia("(max-width: 768px)").matches) {
        body.classList.toggle('overflow');
      }
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


//////////// Modal ///////////
(function(){
  const ModalChanges = document.querySelector('#modalThankYouForChanges');
  const ModalChangesOpen = document.querySelector('.modal-changes');
  const ModalChangesClose = document.querySelector('#ModalChangesClose');

  if(ModalChanges && ModalChangesOpen){
    ModalChanges.addEventListener('click', function(){
      ModalChangesOpen.classList.add('open');
      if(ModalChangesClose){
        ModalChangesClose.addEventListener('click', function(){
          ModalChangesOpen.classList.remove('open');
        })
      }
    })
  }
}());



////// sidebar mobile 8.0 8.2
(function(){
  const filterBtn = document.querySelector('#filtrsBtn');
  const filterSidebar = document.querySelector('.section-photobooks__sidebar');
  const filterClose = document.querySelector('.close-filter');
  const filterCloseApply = document.querySelector('#filtrsBtnApply');

  if(filterBtn && filterSidebar){
    filterBtn.addEventListener('click', function(){
      filterSidebar.classList.add('open');
      body.classList.add('overflow');
      if(filterClose){
        filterClose.addEventListener('click', function(){
          filterSidebar.classList.remove('open');
          body.classList.remove('overflow');

        })
      }
      if(filterCloseApply){
        filterCloseApply.addEventListener('click', function(){
          filterSidebar.classList.remove('open');
          body.classList.remove('overflow');

        })
      }
    })
  }
}());

/////// madal login:hover
(function(){
  const focusLogin = document.querySelector('#user-email');
  const focusLoginPass = document.querySelector('#user-password');
  const focusModuleLogin = document.querySelector('#dropdownMenu2');

  
  if(focusLogin && focusModuleLogin){
    focusLogin.addEventListener('focus', function(){
      focusModuleLogin.classList.add('active');
    })
    focusLogin.addEventListener('blur', function(){
      focusModuleLogin.classList.remove('active');
    })
    focusLoginPass.addEventListener('focus', function(){
      focusModuleLogin.classList.add('active');
    })
    focusLoginPass.addEventListener('blur', function(){
      focusModuleLogin.classList.remove('active');
    })
  }
}());


/////// modal-info  Cover Design
(function(){
  const closeModalInfo = document.querySelector('.close-modal-info-coverDesign');
  const ModalInfo = document.querySelector('.modal-coverDesign');
  const iconModalInfo = document.querySelector('.icon-info-coverDesign');
  const shadowClose = document.querySelector('.modal-shadow-coverDesign');

  if(closeModalInfo && ModalInfo){
    iconModalInfo.addEventListener('click', function(){
      ModalInfo.classList.add('d-block');
      body.classList.add('shadow');
    });
    closeModalInfo.addEventListener('click', function(){
      ModalInfo.classList.remove('d-block');
      body.classList.remove('shadow');
    });
    shadowClose.addEventListener('click', function(){
      ModalInfo.classList.remove('d-block');
      body.classList.remove('shadow');
    });
  }
}());


/////// modal-info  Paper Type
(function(){
  const closeModalInfo = document.querySelector('.close-modal-info-paperType');
  const ModalInfo = document.querySelector('.modal-paperType');
  const iconModalInfo = document.querySelector('.icon-info-paperType');
  const shadowClose = document.querySelector('.modal-shadow-paperType');

  if(closeModalInfo && ModalInfo){
    iconModalInfo.addEventListener('click', function(){
      ModalInfo.classList.add('d-block');
      body.classList.add('shadow');
    });
    closeModalInfo.addEventListener('click', function(){
      ModalInfo.classList.remove('d-block');
      body.classList.remove('shadow');
    });
    shadowClose.addEventListener('click', function(){
      ModalInfo.classList.remove('d-block');
      body.classList.remove('shadow');
    });
  }
  
}());

////// 14.2 click like /////
// (function(){
//   const buttonLike = document.querySelector('.button-like');
//   const activeLike = document.querySelector('.photoselect__favorite');

//   if(buttonLike){
//     buttonLike.addEventListener('click', function(){
//       activeLike.classList.toggle('checked');
//       console.log('hi');
//     })
//   }
// }());

@@include('modules/imgpreloader.js')
@@include('modules/accordion.js') 
@@include('modules/popup-login.js')
@@include('modules/card-filter.js')
@@include('modules/optim.js')
@@include('modules/form-errors.js')
