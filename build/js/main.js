const header=document.querySelector(".header"),body=document.querySelector("body");let scrollPos=0;window.addEventListener("load",(function(){window.addEventListener("scroll",(function(){scrollPos<window.scrollY&&scrollPos>=50?(header.classList.add("header-hide"),scrollPos=window.scrollY):(header.classList.remove("header-hide"),scrollPos=window.scrollY),window.scrollY>=50?header.classList.add("header-fixed"):header.classList.remove("header-fixed")})),html=document.querySelector("html"),openedNav=document.querySelector(".nav-wrap"),headerNav=document.querySelector(".header-nav");const e=document.querySelector(".header .menu-btn");e&&e.addEventListener("click",(function(e){header.classList.toggle("menu-open"),document.querySelector("body").classList.toggle("overflow"),e.preventDefault()}));const t=document.querySelectorAll(".header .menu > .has-sub-menu");t.forEach(e=>e.addEventListener("click",(function(){this.classList.contains("active")?t.forEach(e=>e.classList.remove("active")):(t.forEach(e=>e.classList.remove("active")),this.classList.add("active"))})))})),function(){const e=document.querySelector("#promo-place-text"),t=document.querySelector("#promo-place-code");e&&function(){const o=new XMLHttpRequest;o.open("GET","https://www.pikperfect.com/get-discount"),o.responseType="json",o.addEventListener("load",(function(){o.status<400&&(t.innerHTML="Code:"+o.response.code,e.innerHTML=" "+o.response.text,e.classList.remove("promobar-hide"),setTimeout(()=>{t.classList.remove("promobar-hide")},600))})),o.send()}()}(),function(){const e=document.querySelector("#change-pass");e&&e.addEventListener("click",(function(){document.querySelector(".tab-content__wrap-block").classList.toggle("block"),document.querySelector("#register-current-password").focus()}))}(),function(){const e=document.querySelector("#textareaCount"),t=document.querySelector("#textCounter");e&&t&&e.addEventListener("input",(function(){t.innerText=e.value.length}))}(),function(){const e=document.getElementById("copyCode"),t=document.getElementById("copyLink");e&&t&&t.addEventListener("click",(function(){window.navigator.clipboard.writeText(e.innerText)}))}(),function(){const e=document.getElementById("copyCodeAlbum"),t=document.getElementById("copyLinkAlbum");e&&t&&t.addEventListener("click",(function(){window.navigator.clipboard.writeText(e.innerText)}))}(),function(){const e=document.querySelector("#popupHelp"),t=document.querySelector(".popup-help"),o=document.querySelector("#popupHelpName");function n(o){o.target.matches(".popup-help *")||(t.classList.remove("active"),e.classList.remove("active"),document.body.removeEventListener("click",n))}e&&t&&e.addEventListener("click",(function(r){r.stopPropagation(),t.classList.toggle("active"),e.classList.toggle("active"),document.body.addEventListener("click",n),window.matchMedia("(min-width: 768px)").matches&&o.focus()}))}(),function(){const e=document.querySelector("#btnCookie"),t=document.querySelector(".cookie");localStorage.getItem("cookie")?t.classList.remove("block"):e&&t&&(t.classList.add("block"),e.addEventListener("click",(function(){t.classList.remove("block"),localStorage.setItem("cookie","1")})))}(),function(){const e=document.querySelector("#modalThankYouForChanges"),t=document.querySelector(".modal-changes"),o=document.querySelector("#ModalChangesClose");e&&t&&e.addEventListener("click",(function(){t.classList.add("open"),o&&o.addEventListener("click",(function(){t.classList.remove("open")}))}))}(),function(){const e=document.querySelector("#filtrsBtn"),t=document.querySelector(".section-photobooks__sidebar"),o=document.querySelector(".close-filter"),n=document.querySelector("#filtrsBtnApply");e&&t&&e.addEventListener("click",(function(){t.classList.add("open"),body.classList.add("overflow"),o&&o.addEventListener("click",(function(){t.classList.remove("open"),body.classList.remove("overflow")})),n&&n.addEventListener("click",(function(){t.classList.remove("open"),body.classList.remove("overflow")}))}))}(),function(){const e=document.querySelector("#user-email"),t=document.querySelector("#dropdownMenu2");e&&t&&e.addEventListener("focus",(function(){t.classList.add("active")})),e&&t&&e.addEventListener("blur",(function(){t.classList.remove("active")}))}();const mediaQuery=window.matchMedia("(max-width: 480px)");let baseDelay=100;function imgAdder(e,t,o,n){for(let r=0;r<o.length-1;r++){const c=o[r],s=document.createElement("source");c!=o[o.length-2]&&(s.media=`(max-width: ${c}px)`),s.srcset=`images/towebp/${t}/${e}-${o[r+1]}.webp 2x ,    images/towebp/${t}/${e}-${c}.webp`,s.type="image/webp";n.parentNode.insertBefore(s,n)}}function toggleMinImg(){const e=document.querySelectorAll(".toggle-img--js");for(let t=0;t<e.length;t++){const o=e[t],n=o.parentNode,r=n.dataset.name,c=n.dataset.path,s=[768,1440,2880];setTimeout(()=>{imgAdder(r,c,s,o)},n.dataset.priority*baseDelay)}}function accordionInit(){window.addEventListener("load",(function(){const e=document.querySelector(".accordion");e.querySelectorAll(".accordion__item").forEach((function(o){o.querySelector(".accordion__title").addEventListener("click",n=>{const r=e.querySelector(".is-open");t(o),r&&r!==o&&t(r)})}));const t=function(e){e.classList.contains("is-open")?e.classList.remove("is-open"):e.classList.add("is-open")}}))}mediaQuery.matches&&(baseDelay=800),toggleMinImg(),document.querySelector(".accordion")&&accordionInit();const parentLogin=document.querySelector(".popup-login"),parentForgot=document.querySelector(".popup-forgot"),overlay=document.querySelectorAll(".popup__overlay"),closeLogin=document.querySelector(".close-login"),closeForgot=document.querySelector(".close-forgot"),showHidePasswordBtns=document.querySelectorAll(".show-hide-password"),loginBtn='[data-for-tab="login"]',loginContent='[data-tab="login"]',registerBtn='[data-for-tab="register"]',registerContent='[data-tab="register"]',toForgotModalBtn='[data-ref="forgot"]',openModal=e=>{body.style.overflow="hidden",e.classList.add("active")},showHidePassword=()=>{showHidePasswordBtns.forEach(e=>{e.addEventListener("click",()=>{let t=e.parentElement.firstElementChild;"password"===t.type?(t.type="text",e.querySelector(".password-pass").style="display:none",e.querySelector(".password-text").style="display:block"):(t.type="password",e.querySelector(".password-pass").style.display="block",e.querySelector(".password-text").style.display="none")})})},popupLogin=e=>{const t=document.querySelector(".popup-login__title"),o=(e,t)=>{document.querySelector(e).classList.add("active"),document.querySelector(t).classList.add("active")},n=(e,t)=>{document.querySelector(e).classList.remove("active"),document.querySelector(t).classList.remove("active")},r=()=>{body.style.overflow="",parentLogin.classList.remove("active"),n(loginBtn,loginContent),n(registerBtn,registerContent)};!1===e?(o(registerBtn,registerContent),t.innerHTML="Create Account"):!0===e&&(o(loginBtn,loginContent),t.innerHTML="Login"),document.querySelector(registerBtn).addEventListener("click",()=>{o(registerBtn,registerContent),n(loginBtn,loginContent),t.innerHTML="Create Account"}),document.querySelector(loginBtn).addEventListener("click",()=>{n(registerBtn,registerContent),o(loginBtn,loginContent),t.innerHTML="Login"});overlay.forEach(e=>{e.addEventListener("click",r)}),closeLogin.addEventListener("click",r),document.querySelector(toForgotModalBtn).addEventListener("click",r),document.querySelector(toForgotModalBtn).addEventListener("click",popupForgot),(()=>{const e=document.querySelector(".custom-checkbox__input[data-accord]"),t=document.querySelector(".custom-checkbox__accord"),o=(document.querySelector("#register-social-page"),document.querySelector("#register-album-purchase"),document.querySelector(".custom-file-upload__body")),n=document.querySelector(".custom-file-upload__btn"),r=document.querySelector(".custom-file-upload__file-name");o.addEventListener("change",(function(e){const t=e.target.files[0].name;r.innerHTML=t;const o=document.createElement("button");o.classList.add("custom-file-upload__remove-btn"),o.setAttribute("type","button"),o.innerHTML='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">\n        <rect fill=\'none\' width="24" height="24" />\n        <g style=\'fill:none;stroke: #575d61;stroke-linecap: round;stroke-linejoin: round;stroke-width: 2px;\'>\n        <path d="M3,6H21" />\n        <path d="M19,6V20a2,2,0,0,1-2,2H7a2,2,0,0,1-2-2V6M8,6V4a2,2,0,0,1,2-2h4a2,2,0,0,1,2,2V6" />\n        </g>\n      </svg>',r.insertAdjacentElement("beforeend",o),o.addEventListener("click",e=>{e.preventDefault,n.value=null,r.innerHTML=""})})),e.addEventListener("click",()=>{!0===e.checked?(t.style.display="block",t.classList.add("active")):(t.classList.remove("active"),setTimeout(()=>{t.style.display="none"},300))})})(),openModal(parentLogin)},popupForgot=()=>{document.querySelector(".popup-forgot__form").addEventListener("submit",e=>{const t=document.querySelector(".popup-forgot__success"),o=document.querySelector('.popup-forgot__input input[type="email"]');e.preventDefault(),t.classList.add("show"),o.value="",setTimeout(()=>{t.classList.add("showing")},0),setTimeout(()=>{t.classList.remove("showing")},3500),setTimeout(()=>{t.classList.remove("show")},4e3)});const e=()=>{body.style.overflow="",parentForgot.classList.remove("active")};closeForgot.addEventListener("click",e),overlay.forEach(t=>{t.addEventListener("click",e)}),setTimeout(()=>{openModal(parentForgot)},0)};function addScript(e,t){localStorage.getItem(e)&&(t=1);const o=document.body,n=document.createElement("script");return n.async=!0,n.src=e,setTimeout(()=>{o.append(n),localStorage.setItem(e,!0)},t),n}function formErr(e,t,o){const n=document.createElement("p");let r=window.getComputedStyle(e,null).getPropertyValue("margin-bottom");r=parseFloat(r),r>25&&(e.style.marginBottom=r-20+"px"),n.innerText=t,n.style.color=o,e.parentNode.append(n),setTimeout(()=>{n.remove(),e.style.marginBottom=r+"px"},3e3)}showHidePasswordBtns.forEach(e=>{e.addEventListener("click",()=>{let t=e.parentElement.firstElementChild;"password"===t.type?(t.type="text",e.querySelector(".password-pass").style="display:none",e.querySelector(".password-text").style="display:block"):(t.type="password",e.querySelector(".password-pass").style.display="block",e.querySelector(".password-text").style.display="none")})}),function(){const e=document.querySelector(".photobook__radio__container"),t=document.querySelectorAll(".filtered-card-js");e&&t&&e.addEventListener("change",(function(e){t.forEach(t=>{t.dataset.type!=e.target.value&&"All"!=e.target.value?t.classList.add("card-hide"):t.classList.remove("card-hide")})}))}(),window.addEventListener("load",(function(){const e=window.matchMedia("(max-width: 480px)").matches;let t=1;const o=document.querySelector(".swiper-delay");if(o){const n=parseInt(o.dataset.time);n>100&&(t=1+n/5,e&&(t=n))}addScript("js/swiper.min.js",t).addEventListener("load",()=>{addScript("js/slider.js",0)}),addScript("//code.jquery.com/jquery-1.11.2.min.js",6e3).addEventListener("load",()=>{addScript("js/jqueryWorksHere.js",0),document.querySelector("#workonlyhere")&&addScript("js/workonlyhere.js",0)});(()=>{const t=document.querySelector(".lazy-video__activator-js");let o=1;const n=()=>{if(document.querySelector(".lazy-video")){const e=document.querySelector(".lazy-video__preloader");t.src=t.dataset.src,o=0,setTimeout(()=>{e.style.opacity=0,setTimeout(()=>{t.style.opacity=1},100)},900)}};if(t){let r=2500;e&&(r=8e3),setTimeout(()=>{o&&n()},r);const c=function(e,t){e.forEach(e=>{if(!e.isIntersecting)return!1;o&&n(),t.unobserve(e.target)})};new IntersectionObserver(c,{rootMargin:"-20px",threshold:.01}).observe(t)}})()})),document.querySelectorAll(".tab-content__form").forEach(e=>{e.addEventListener("submit",(function(t){t.preventDefault();const o=e.querySelectorAll("input");o.forEach(e=>{formErr(e,"error message","red")})}))});