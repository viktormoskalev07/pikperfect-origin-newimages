if(document.querySelector(".swiperalbum"))var swiperAlbum=new Swiper(".swiperalbum",{pagination:{el:".swiperalbum-pagination",clickable:!0},breakpoints:{320:{slidesPerView:1,spaceBetween:20},450:{slidesPerView:2,spaceBetween:20},768:{slidesPerView:3,spaceBetween:20},1200:{slidesPerView:4,spaceBetween:35}}});if(document.querySelector(".swiperDescription"))var swiper123=new Swiper(".swiperDescription",{loop:!0,Infinity:!1,autoplay:{delay:5e3},pagination:{el:".swiperDescription-pagination",clickable:!0}});if(document.querySelector(".section-reviews__swiper"))swiper123=new Swiper(".section-reviews__swiper",{loop:!0,autoplay:{delay:3e3},navigation:{nextEl:".section-reviews__button-next",prevEl:".section-reviews__button-prev"},breakpoints:{320:{slidesPerView:1,spaceBetween:20},768:{slidesPerView:2,spaceBetween:100},1200:{slidesPerView:3,spaceBetween:100},1400:{slidesPerView:3,spaceBetween:115}}});if(document.querySelector(".section-reviews-card__wrap"))var swiper312=new Swiper(".section-reviews-card__wrap",{loop:!0,autoplay:{delay:3e3},navigation:{el:".swiperalbum-pagination",clickable:!0},breakpoints:{320:{slidesPerView:1,spaceBetween:20},768:{slidesPerView:2,spaceBetween:32},1200:{slidesPerView:3,spaceBetween:32}}});function videoInSlider(){const e=document.querySelector(".hero-video-slide"),s=(document.querySelector(".hero-video-slide__preloader"),document.getElementById("hero-video"));s.style.background="#eeeeee";let i=1;new MutationObserver((function(){e&&e.matches(".swiper-slide-active")&&(s.src=s.dataset.src,i=0)})).observe(e,{childList:!1,attributes:!0,characterData:!1,attributeFilter:["class"]}),setTimeout(()=>{i&&(s.src=s.dataset.src.replace("background=1",""),i=0)},mediaQuery?5e3:1200)}if(document.querySelector(".section-hero__tab-activators")&&!document.querySelector("#no-video")){const e=document.querySelectorAll(".section-hero__tab-activators .swiper-slide");var swiperTabsControl=new Swiper(".section-hero__tab-activators",{slidesPerView:6,direction:"vertical",spaceBetween:15,allowTouchMove:!1,touchStartForcePreventDefault:!0,updateOnWindowResize:updateOnWindowResize=!1}),swiperTabs=new Swiper(".section-hero__swiper",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:swiperTabsControl}});videoInSlider(),e.forEach((e,s)=>{e.addEventListener("click",()=>{swiperTabs.slideTo(s)})})}if(document.querySelector(".swiperBigSlider")){new Swiper(".swiperBigSlider",{allowTouchMove:!1,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiperDescription-pagination",clickable:!1}})}if(document.querySelector(".update-slider-a")){const e=new Swiper(".update-slider-a",{slidesPerView:5,direction:"vertical",spaceBetween:11,draggable:!0,allowTouchMove:!1,touchStartForcePreventDefault:!0});new Swiper(".section-hero__swiper-a",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:e}})}if(document.querySelector(".update-slider-b"))swiperTabsControl=new Swiper(".update-slider-b",{slidesPerView:5,direction:"vertical",spaceBetween:16,allowTouchMove:!1,touchStartForcePreventDefault:!0}),swiperTabs=new Swiper(".section-hero__swiper-b",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:swiperTabsControl}});if(document.querySelector(".update-slider-c"))swiperTabsControl=new Swiper(".update-slider-c",{slidesPerView:5,direction:"vertical",spaceBetween:16,allowTouchMove:!1,touchStartForcePreventDefault:!0}),swiperTabs=new Swiper(".section-hero__swiper-c",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:swiperTabsControl}});if(document.querySelector(".select-style__swiper"))swiper123=new Swiper(".select-style__swiper",{loop:!0,pagination:{el:".select-style__example",type:"fraction"},navigation:{nextEl:".next",prevEl:".prev"},breakpoints:{320:{slidesPerView:1,spaceBetween:20}}});if(document.querySelector(".select-style__swiper-card")){var swiper223=new Swiper(".select-style__swiper-card",{navigation:{nextEl:".next-card",prevEl:".prev-card"},breakpoints:{320:{slidesPerView:1,slidesPerGroup:1,spaceBetween:10},576:{slidesPerView:2,spaceBetween:8,slidesPerGroup:2},1024:{slidesPerView:3,spaceBetween:8,slidesPerGroup:3},1200:{slidesPerView:4,spaceBetween:8,slidesPerGroup:4}}});const e=document.querySelector(".select-style__button-next.next-card");function SlideToStart(){swiper223.slideTo(0),e.removeEventListener("click",SlideToStart)}swiper223.on("reachEnd",(function(){e.addEventListener("click",SlideToStart)}))}if(document.querySelector(".section-hero__slider-half"))swiperTabsControl=new Swiper(".section-hero__slider-half",{slidesPerView:6,direction:"vertical",spaceBetween:10,allowTouchMove:!1,touchStartForcePreventDefault:!0}),swiperTabs=new Swiper(".section-hero__swiper-half",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:swiperTabsControl}});if(document.querySelector(".section-hero__slider-half-second"))swiperTabsControl=new Swiper(".section-hero__slider-half-second",{slidesPerView:6,direction:"vertical",spaceBetween:10,allowTouchMove:!1,touchStartForcePreventDefault:!0}),swiperTabs=new Swiper(".section-hero__swiper-half-second",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:swiperTabsControl}});if(document.querySelector(".swipercolor")){var swiperAlbumFirst=new Swiper(".swipercolor",{loop:!0,navigation:{nextEl:".swiper-button-next-first",prevEl:".swiper-button-prev-first"},breakpoints:{300:{slidesPerView:3,slidesPerGroup:3,spaceBetween:5},360:{slidesPerView:4,slidesPerGroup:4,spaceBetween:5},450:{slidesPerView:5,slidesPerGroup:5,spaceBetween:5},550:{slidesPerView:6,slidesPerGroup:6,spaceBetween:5},650:{slidesPerView:7,slidesPerGroup:7,spaceBetween:10},1024:{slidesPerView:5,slidesPerGroup:5,spaceBetween:10},1100:{slidesPerView:6,slidesPerGroup:6,spaceBetween:10},1200:{slidesPerView:7,slidesPerGroup:7,spaceBetween:10}}});const e=document.querySelector(".swiper-button-next-first");function SlideToStart(){swiperAlbumFirst.slideTo(0),e.removeEventListener("click",SlideToStart)}swiperAlbumFirst.on("reachEnd",(function(){e.addEventListener("click",SlideToStart)}))}if(document.querySelector(".swipercolorSecond")){swiperAlbum=new Swiper(".swipercolorSecond",{loop:!0,navigation:{nextEl:".swiper-button-next-second",prevEl:".swiper-button-prev-second"},breakpoints:{300:{slidesPerView:3,slidesPerGroup:3,spaceBetween:5},360:{slidesPerView:4,slidesPerGroup:4,spaceBetween:5},450:{slidesPerView:5,slidesPerGroup:5,spaceBetween:5},550:{slidesPerView:6,slidesPerGroup:6,spaceBetween:5},650:{slidesPerView:7,slidesPerGroup:7,spaceBetween:10},1024:{slidesPerView:5,slidesPerGroup:5,spaceBetween:10},1100:{slidesPerView:6,slidesPerGroup:6,spaceBetween:10},1200:{slidesPerView:7,slidesPerGroup:7,spaceBetween:10}}});const e=document.querySelector(".swiper-button-next-second");function SlideToStart(){swiperAlbum.slideTo(0),e.removeEventListener("click",SlideToStart)}swiperAlbum.on("reachEnd",(function(){e.addEventListener("click",SlideToStart)}))}!function(){const e=document.querySelector(".gallery__container"),s=document.querySelector(".container-flip"),i=document.querySelector(".preloader");let t,r,n;e&&s&&(t=document.querySelectorAll(".gallery__activator-js"),t.forEach(e=>{e.classList.add("cursor-pointer")}),r=document.querySelector(".gallery__close"),n=()=>{e.classList.add("gallery__fade"),s.classList.remove("shadow"),s.classList.remove("end"),s.classList.remove("landscape"),i.classList.remove("loaded"),setTimeout(()=>{e.classList.add("gallery__d-none")},400),document.body.classList.remove("overflow-h")});const o=function(){const s=document.querySelector("#app");if(s){let e=" ";const t=this.dataset.folder;let n=Number(this.dataset.pages);(n<4||isNaN(n))&&(console.error("unsupported data-pages"),n=4),n=n%2>0?n-1:n;const o=t,c="front-cover.jpg , base-left.jpg , page-1.jpg",a=`base-right.jpg , page-${n}.jpg , back-cover.jpg`.split(" , ");a.forEach((s,i)=>{0===i&&(e+=`\n        <div class="page page__back-cover">\n          <div class="front last-page" style="background-image:url(${o+s})">`),1===i&&(e+=`\n              <div class="outer">\n                  <div class="content">\n                    <img src="${o+s}" alt="cover">\n                  </div>\n              </div>\n          </div>`),i===a.length-1&&(e+=`\n          <div class="back">\n              <div class="outer">\n                  <div class="content">\n                      <div class="helper-class-to-make-bug-visbile">\n                        <img src="${o+s}">\n                      </div>\n                  </div>\n              </div>\n          </div>\n        </div>`)});let l=[];for(let e=2;e<n;e++){const s=e%2>0?2:0;l.push(`page-${n-e+s}.jpg`)}l.forEach((s,i)=>{if(0===i){let e=new Image;e.src=""+(t+l[0]),e.onload=function(){e.width/e.height>1&&r.classList.add("landscape")}}e+=i%2?` <div class="back">\n                      <div class="outer">\n                          <div class="content">\n                              <div class="helper-class-to-make-bug-visbile">\n                                <img src="${t+s}">\n                              </div>\n                          </div>\n                      </div>\n                    </div> </div>`:`<div class="page"> <div class="front">\n                      <div class="outer">\n                          <div class="content">\n                            <img src="${t+s}">\n                          </div>\n                      </div>\n                    </div>`});const p=c.split(" , ");p.forEach((s,i)=>{0===i&&(e+=`\n          <div class="page page__front-cover">\n            <div class="front">\n                <div class="outer">\n                    <div class="content">\n                      <img src="${o+s}">\n                    </div>\n                </div>\n            </div>`),1===i&&(e+=`\n            <div class="back first-page" style="background-image:url(${o+s})">`),i===p.length-1&&(e+=`\n                <div class="outer">\n                    <div class="content">\n                        <div class="helper-class-to-make-bug-visbile">\n                          <img src="${o+s}">\n                        </div>\n                    </div>\n                </div>\n            </div></div>`)}),s.innerHTML=e,setTimeout((function(){if(i){let e=new Image;e.src=d.src,e.addEventListener("load",(function(){const e=[],s=l.length>5?5:l.length;l.slice(-s).forEach(r=>{let n=new Image,o=t+r;n.src=o,n.addEventListener("load",(function(){e.push(n),e.length==s&&i.classList.add("loaded")}))})}))}}),500)}const t=document.querySelectorAll(".page"),r=document.querySelector(".container-flip"),n=document.querySelector(".page__front-cover"),o=document.querySelector(".page__back-cover"),c=document.querySelector(".gallery__controls"),a=document.querySelector(".flip-book__prev"),l=document.querySelector(".flip-book__next"),d=document.querySelector(".page__front-cover img");function p(){n.classList.contains("next")&&r.classList.add("shadow")}function w(){n.classList.contains("prev")&&r.classList.remove("shadow")}function u(){o.classList.contains("prev")&&r.classList.add("shadow")}function v(){o.classList.contains("next")&&r.classList.remove("shadow")}function m(){setTimeout(p,600),setTimeout(w,200)}function g(){if(n.classList.contains("next")){const e=document.querySelectorAll(".page.next");m(),setTimeout(v,600),t[t.length-1-e.length].click()}else t[t.length-1].click()}function b(){if(n.classList.contains("next")){const e=document.querySelectorAll(".page.next");t.length,e.length,t[t.length-e.length].click()}}function h(){r.classList.remove("click"),c.classList.remove("click")}t.forEach((e,s)=>{const i=e.previousSibling;e.addEventListener("click",(function(){t.forEach(e=>e.classList.remove("current","prev")),r.classList.remove("end"),e.classList.contains("next")?(e.classList.remove("next"),e.classList.add("prev")):(e.classList.remove("prev"),e.classList.add("next")),i.classList&&i.classList.add("current"),0===s&&r.classList.contains("shadow")&&setTimeout(()=>r.classList.add("end"),700)}))}),n.addEventListener("click",m),o.addEventListener("click",(function(){setTimeout(u,600),setTimeout(v,200)})),l.addEventListener("click",g),a.addEventListener("click",b),r.addEventListener("click",(function(e){e.target.closest(".container-flip").classList.add("click"),c.classList.add("click"),setTimeout(h,1e3)}));r.addEventListener("click",e=>{e.target.closest(".page").style.zIndex=(()=>{const e=[];return t.forEach(s=>{e.push(Number(s.style.zIndex))}),Math.max(...e)})()+1}),document.body.classList.add("overflow-h"),e.classList.remove("gallery__d-none"),document.addEventListener("keydown",(function(e){"37"==(e=e||window.event).keyCode?r.classList.contains("click")||b():"39"==e.keyCode&&(r.classList.contains("click")||g())})),setTimeout(()=>{e.classList.remove("gallery__fade")},1)};e&&t&&(r.addEventListener("click",n),document.addEventListener("keydown",(function(e){27==e.keyCode&&n()})),t.forEach(e=>{e.addEventListener("click",o)}))}();