if(document.querySelector(".swiperalbum"))var swiperAlbum=new Swiper(".swiperalbum",{pagination:{el:".swiperalbum-pagination",clickable:!0},breakpoints:{320:{slidesPerView:1,spaceBetween:20},450:{slidesPerView:2,spaceBetween:20},768:{slidesPerView:3,spaceBetween:20},1200:{slidesPerView:4,spaceBetween:35}}});if(document.querySelector(".swiperDescription"))var swiper123=new Swiper(".swiperDescription",{loop:!0,Infinity:!1,autoplay:{delay:5e3},pagination:{el:".swiperDescription-pagination",clickable:!0}});if(document.querySelector(".section-reviews__swiper"))swiper123=new Swiper(".section-reviews__swiper",{loop:!0,autoplay:{delay:3e3},navigation:{nextEl:".section-reviews__button-next",prevEl:".section-reviews__button-prev"},breakpoints:{320:{slidesPerView:1,spaceBetween:20},768:{slidesPerView:2,spaceBetween:100},1200:{slidesPerView:3,spaceBetween:100},1400:{slidesPerView:3,spaceBetween:115}}});if(document.querySelector(".section-reviews-card__wrap"))var swiper312=new Swiper(".section-reviews-card__wrap",{loop:!0,autoplay:{delay:3e3},navigation:{el:".swiperalbum-pagination",clickable:!0},breakpoints:{320:{slidesPerView:1,spaceBetween:20},768:{slidesPerView:2,spaceBetween:32},1200:{slidesPerView:3,spaceBetween:32}}});function videoInSlider(){const e=document.querySelector(".hero-video-slide"),s=(document.querySelector(".hero-video-slide__preloader"),document.getElementById("hero-video"));s.style.background="#eeeeee";let t=1;new MutationObserver((function(){e&&e.matches(".swiper-slide-active")&&(s.src=s.dataset.src,t=0)})).observe(e,{childList:!1,attributes:!0,characterData:!1,attributeFilter:["class"]}),setTimeout(()=>{t&&(s.src=s.dataset.src.replace("background=1",""),t=0)},mediaQuery?5e3:1200)}if(document.querySelector(".section-hero__tab-activators")&&!document.querySelector("#no-video")){const e=document.querySelectorAll(".section-hero__tab-activators .swiper-slide");var swiperTabsControl=new Swiper(".section-hero__tab-activators",{slidesPerView:6,direction:"vertical",spaceBetween:15,allowTouchMove:!1,touchStartForcePreventDefault:!0,updateOnWindowResize:!1}),swiperTabs=new Swiper(".section-hero__swiper",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:swiperTabsControl}});videoInSlider(),e.forEach((e,s)=>{e.addEventListener("click",()=>{swiperTabs.slideTo(s)})})}if(document.querySelector(".swiperBigSlider")){new Swiper(".swiperBigSlider",{allowTouchMove:!1,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiperDescription-pagination",clickable:!1}})}if(document.querySelector(".update-slider-a")){const e=new Swiper(".update-slider-a",{slidesPerView:5,direction:"vertical",spaceBetween:11,draggable:!0,allowTouchMove:!1,touchStartForcePreventDefault:!0});new Swiper(".section-hero__swiper-a",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:e}})}if(document.querySelector(".update-slider-b"))swiperTabsControl=new Swiper(".update-slider-b",{slidesPerView:5,direction:"vertical",spaceBetween:16,allowTouchMove:!1,touchStartForcePreventDefault:!0}),swiperTabs=new Swiper(".section-hero__swiper-b",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:swiperTabsControl}});if(document.querySelector(".update-slider-c"))swiperTabsControl=new Swiper(".update-slider-c",{slidesPerView:5,direction:"vertical",spaceBetween:16,allowTouchMove:!1,touchStartForcePreventDefault:!0}),swiperTabs=new Swiper(".section-hero__swiper-c",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:swiperTabsControl}});if(document.querySelector(".select-style__swiper"))swiper123=new Swiper(".select-style__swiper",{loop:!0,pagination:{el:".select-style__example",type:"fraction"},navigation:{nextEl:".next",prevEl:".prev"},breakpoints:{320:{slidesPerView:1,spaceBetween:20}}});if(document.querySelector(".select-style__swiper-card")){var swiper223=new Swiper(".select-style__swiper-card",{navigation:{nextEl:".next-card",prevEl:".prev-card"},breakpoints:{320:{slidesPerView:1,slidesPerGroup:1,spaceBetween:10},576:{slidesPerView:2,spaceBetween:8,slidesPerGroup:2},1024:{slidesPerView:3,spaceBetween:8,slidesPerGroup:3},1200:{slidesPerView:4,spaceBetween:8,slidesPerGroup:4}}});const e=document.querySelector(".select-style__button-next.next-card");function SlideToStart(){swiper223.slideTo(0),e.removeEventListener("click",SlideToStart)}swiper223.on("reachEnd",(function(){e.addEventListener("click",SlideToStart)}))}if(document.querySelector(".section-hero__slider-half"))swiperTabsControl=new Swiper(".section-hero__slider-half",{slidesPerView:6,direction:"vertical",spaceBetween:10,allowTouchMove:!1,touchStartForcePreventDefault:!0}),swiperTabs=new Swiper(".section-hero__swiper-half",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:swiperTabsControl}});if(document.querySelector(".section-hero__slider-half-second"))swiperTabsControl=new Swiper(".section-hero__slider-half-second",{slidesPerView:6,direction:"vertical",spaceBetween:10,allowTouchMove:!1,touchStartForcePreventDefault:!0}),swiperTabs=new Swiper(".section-hero__swiper-half-second",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:swiperTabsControl}});if(document.querySelector(".swipercolor")){var swiperAlbumFirst=new Swiper(".swipercolor",{loop:!0,navigation:{nextEl:".swiper-button-next-first",prevEl:".swiper-button-prev-first"},breakpoints:{300:{slidesPerView:3,slidesPerGroup:3,spaceBetween:5},360:{slidesPerView:4,slidesPerGroup:4,spaceBetween:5},450:{slidesPerView:5,slidesPerGroup:5,spaceBetween:5},550:{slidesPerView:6,slidesPerGroup:6,spaceBetween:5},650:{slidesPerView:7,slidesPerGroup:7,spaceBetween:10},1024:{slidesPerView:5,slidesPerGroup:5,spaceBetween:10},1100:{slidesPerView:6,slidesPerGroup:6,spaceBetween:10},1200:{slidesPerView:7,slidesPerGroup:7,spaceBetween:10}}});const e=document.querySelector(".swiper-button-next-first");function SlideToStart(){swiperAlbumFirst.slideTo(0),e.removeEventListener("click",SlideToStart)}swiperAlbumFirst.on("reachEnd",(function(){e.addEventListener("click",SlideToStart)}))}if(document.querySelector(".swipercolorSecond")){swiperAlbum=new Swiper(".swipercolorSecond",{loop:!0,navigation:{nextEl:".swiper-button-next-second",prevEl:".swiper-button-prev-second"},breakpoints:{300:{slidesPerView:3,slidesPerGroup:3,spaceBetween:5},360:{slidesPerView:4,slidesPerGroup:4,spaceBetween:5},450:{slidesPerView:5,slidesPerGroup:5,spaceBetween:5},550:{slidesPerView:6,slidesPerGroup:6,spaceBetween:5},650:{slidesPerView:7,slidesPerGroup:7,spaceBetween:10},1024:{slidesPerView:5,slidesPerGroup:5,spaceBetween:10},1100:{slidesPerView:6,slidesPerGroup:6,spaceBetween:10},1200:{slidesPerView:7,slidesPerGroup:7,spaceBetween:10}}});const e=document.querySelector(".swiper-button-next-second");function SlideToStart(){swiperAlbum.slideTo(0),e.removeEventListener("click",SlideToStart)}swiperAlbum.on("reachEnd",(function(){e.addEventListener("click",SlideToStart)}))}!function(){let e=!0,s=!0,t=()=>{},i=()=>{},r=()=>{},n=()=>{},o=()=>{};const c=document.querySelector(".flip-book__prev"),a=document.querySelector(".flip-book__next"),l=document.querySelector("#galleryProgres"),d=document.querySelector(".progressBar-text"),p=document.querySelector(".container-flip"),u={status:!1},w=()=>{u.status=!1,c&&(c.style.opacity=1),a&&(a.style.opacity=1)},v=()=>{const e=u.status;return c.style.opacity=.5,a.style.opacity=.5,u.status||(clearTimeout(w),setTimeout(w,900)),u.status=!0,e},g=()=>{l&&(l.value=0),d&&(d.innerHTML="0%")},m=()=>{h.classList.add("gallery__fade"),p.classList.remove("shadow"),p.classList.remove("end"),p.classList.remove("landscape"),p.classList.remove("portrait"),p.style="",b.classList.remove("loaded"),g(),document.removeEventListener("keydown",t),p.removeEventListener("click",r),e=!0,a.removeEventListener("click",o),c.removeEventListener("click",n),s=!1,u.status=!1,setTimeout(()=>{h.classList.add("gallery__d-none")},400),document.body.classList.remove("overflow-h"),app.innerHTML=""},h=document.querySelector(".gallery__container");if(!h||!p)return;const b=document.querySelector(".preloader"),_=document.querySelectorAll(".gallery__activator-js"),f=document.querySelector(".gallery__close");_.forEach(e=>{const s=e.querySelector(".thumb__place__figure"),t=e.querySelector(".thumb__img");e.classList.add("cursor-pointer"),t.width/t.height<.8&&s.classList.add("portrait"),s.style.opacity=1});const y=function(){e=!1;const s=document.querySelector("#app");if(s){let w=" ";const m=this.dataset.folder;let _=Number(this.dataset.pages);(_<4||isNaN(_))&&(console.error("unsupported data-pages"),_=4),_=_%2>0?_-1:_;const f=m,y="front-cover.jpg , base-left.jpg , page-1.jpg",S=`base-right.jpg , page-${_}.jpg , back-cover.jpg`.split(" , "),L='src="images/8.0/spiner.gif"';S.forEach((e,s)=>{0===s&&(w+=`\n    <div class="page page__back-cover">\n      <div class="front last-page" style="background-image:url(${f+e})">`),1===s&&(w+=`\n          <div class="outer">\n              <div class="content">\n                <img ${L} class="lazypage" data-src="${f+e}" alt="cover">\n              </div>\n          </div>\n      </div>`),s===S.length-1&&(w+=`\n      <div class="back">\n          <div class="outer">\n              <div class="content">\n                  <div class="helper-class-to-make-bug-visbile">\n                    <img ${L}  class="lazypage" data-src="${f+e}">\n                  </div>\n              </div>\n          </div>\n      </div>\n    </div>`)});let P=[];for(let e=2;e<_;e++){const s=e%2>0?2:0;P.push(`page-${_-e+s}.jpg`)}P.forEach((e,s)=>{if(0===s){let e=new Image;e.src=""+(m+P[P.length-1]),e.onload=function(){let s=e.width,t=e.height;p.style.aspectRatio=s+"/"+t,p.style.height="auto",p.style.width="40%",p.classList.add(s/t<1?"portrait":"landscape"),s===t&&p.classList.remove("landscape")}}w+=s%2?` <div class="back">\n                  <div class="outer">\n                      <div class="content">\n                          <div class="helper-class-to-make-bug-visbile">\n                            <img ${L}  class="lazypage"  data-src="${m+e}">\n                          </div>\n                      </div>\n                  </div>\n                </div> </div>`:`<div class="page"> <div class="front">\n                  <div class="outer">\n                      <div class="content">\n                        <img ${L}  class="lazypage"  data-src="${m+e}">\n                      </div>\n                  </div>\n                </div>`});const k=y.split(" , ");k.forEach((e,s)=>{0===s&&(w+=`\n      <div class="page page__front-cover">\n        <div class="front">\n            <div class="outer">\n                <div class="content">\n                  <img ${L}  class="lazypage" data-src="${f+e}">\n                </div>\n            </div>\n        </div>`),1===s&&(w+=`\n        <div class="back first-page" style="background-image:url(${f+e})">`),s===k.length-1&&(w+=`\n            <div class="outer">\n                <div class="content">\n                    <div class="helper-class-to-make-bug-visbile">\n                      <img ${L}  class="lazypage"  data-src="${f+e}">\n                    </div>\n                </div>\n            </div>\n        </div></div>`)});const T=document.querySelector(".gallery__controls");function u(){let s=document.querySelectorAll(".lazypage"),l=s.length;const d=()=>{if(e)return s=[],void(l=0);const t=s[l-1];t&&(t.src=t.dataset.src,t.addEventListener("load",()=>{if(l--,l<1||e)return!1;d()}))};d();const u=document.querySelectorAll(".page"),w=document.querySelector(".page__front-cover"),g=document.querySelector(".page__back-cover");function m(){w.classList.contains("next")&&p.classList.add("shadow")}function h(){w.classList.contains("prev")&&p.classList.remove("shadow")}function b(){g.classList.contains("prev")&&p.classList.add("shadow")}function _(){g.classList.contains("next")&&p.classList.remove("shadow")}function f(){setTimeout(m,600),setTimeout(h,200)}u.forEach((e,s)=>{const t=e.previousSibling;e.addEventListener("click",(function(){u.forEach(e=>e.classList.remove("current","prev")),p.classList.remove("end"),e.classList.contains("next")?(e.classList.remove("next"),e.classList.add("prev")):(e.classList.remove("prev"),e.classList.add("next")),t.classList&&t.classList.add("current"),0===s&&p.classList.contains("shadow")&&setTimeout(()=>p.classList.add("end"),700)}))}),w.addEventListener("click",f),g.addEventListener("click",(function(){setTimeout(b,600),setTimeout(_,200)})),o=()=>{if(v())return!1;if(w.classList.contains("next")){const e=document.querySelectorAll(".page.next");f(),setTimeout(_,600);const s=u[u.length-1-e.length];s&&s.click()}else u[u.length-1]&&u[u.length-1].click()},a.addEventListener("click",o),n=()=>{if(v())return!1;if(w.classList.contains("next")){const e=document.querySelectorAll(".page.next"),s=u[u.length-e.length];s&&s.click()}},c.addEventListener("click",n);const y=()=>{p.classList.remove("click"),T.classList.remove("click")};r=e=>{const s=(e=e||window.event).target.closest(".container-flip");s&&(s.classList.add("click"),T.classList.add("click"),setTimeout(y,1e3))},p.addEventListener("click",r),r();i=e=>{e.target.closest(".page").style.zIndex=(()=>{const e=[];return u.forEach(s=>{e.push(Number(s.style.zIndex))}),Math.max(...e)})()+1},p.addEventListener("click",i),t=e=>{"ArrowLeft"===e.code?p.classList.contains("click")||n():"ArrowRight"===e.code&&(p.classList.contains("click")||o())},document.addEventListener("keydown",t)}document.body.classList.add("overflow-h"),h.classList.remove("gallery__d-none"),setTimeout(()=>{h.classList.remove("gallery__fade")},1),setTimeout((function(){if(b){let t=[],i=[];const r=r=>{const n=new Image;n.src=r,i.push(n);const o=()=>{if(e)return t=[],i=0,void g();t.push(n);const r=Math.floor(t.length/i.length*100+1);l&&(l.value=r),d&&(d.innerHTML=r+"%"),t.length===i.length&&(s.innerHTML=w,g(),u(),b.classList.add("loaded"))};n.addEventListener("load",o),n.addEventListener("error",o)},n=P.length>5?5:P.length,o="images/8.0/";r(o+"shadow-open.png"),r(m+"front-cover.jpg"),r(m+"base-left.jpg"),r(m+"base-left.jpg"),r(o+"inner_page_botom_shadow_common.png");for(let e=1;e<n;e++)r(m+`page-${e}.jpg`)}}),500)}};h&&_&&(f.addEventListener("click",m),document.addEventListener("keydown",(function(e){"Escape"===e.code&&m()})),_.forEach(e=>{e.addEventListener("click",y)}))}();