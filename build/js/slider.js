if(document.querySelector(".swiperalbum"))var swiperAlbum=new Swiper(".swiperalbum",{pagination:{el:".swiperalbum-pagination",clickable:!0},breakpoints:{320:{slidesPerView:1,spaceBetween:20},450:{slidesPerView:2,spaceBetween:20},768:{slidesPerView:3,spaceBetween:20},1200:{slidesPerView:4,spaceBetween:35}}});if(document.querySelector(".swiperDescription"))var swiper123=new Swiper(".swiperDescription",{loop:!1,autoplay:{delay:5e3},pagination:{el:".swiperDescription-pagination",clickable:!0}});if(document.querySelector(".section-reviews__swiper"))swiper123=new Swiper(".section-reviews__swiper",{loop:!0,autoplay:{delay:3e3},navigation:{nextEl:".section-reviews__button-next",prevEl:".section-reviews__button-prev"},breakpoints:{320:{slidesPerView:1,spaceBetween:20},768:{slidesPerView:2,spaceBetween:100},1200:{slidesPerView:3,spaceBetween:100},1400:{slidesPerView:3,spaceBetween:115}}});if(document.querySelector(".section-reviews-card__wrap"))var swiper312=new Swiper(".section-reviews-card__wrap",{loop:!0,autoplay:{delay:3e3},navigation:{el:".swiperalbum-pagination",clickable:!0},breakpoints:{320:{slidesPerView:1,spaceBetween:20},768:{slidesPerView:2,spaceBetween:32},1200:{slidesPerView:3,spaceBetween:32}}});function videoInSlider(){const e=document.querySelector(".hero-video-slide"),i=document.querySelector(".hero-video-slide__preloader"),r=document.getElementById("hero-video");let s=1;const t=new MutationObserver((function(){s&&e&&e.matches(".swiper-slide-active")&&(r.src=r.dataset.src,s=0,setTimeout(()=>{i.style.opacity=0},300),t.disconnect())}));t.observe(e,{childList:!1,attributes:!0,characterData:!1,attributeFilter:["class"]})}if(document.querySelector(".section-hero__tab-activators")&&!document.querySelector("#no-video")){var swiperTabsControl=new Swiper(".section-hero__tab-activators",{slidesPerView:6,direction:"vertical",spaceBetween:15,allowTouchMove:!1,touchStartForcePreventDefault:!0}),swiperTabs=new Swiper(".section-hero__swiper",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:swiperTabsControl}});videoInSlider()}if(document.querySelector(".swiperBigSlider")){new Swiper(".swiperBigSlider",{navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiperDescription-pagination",clickable:!0}})}if(document.querySelector(".update-slider-a"))swiperTabsControl=new Swiper(".update-slider-a",{slidesPerView:5,direction:"vertical",spaceBetween:16,draggable:!0,allowTouchMove:!1,touchStartForcePreventDefault:!0}),swiperTabs=new Swiper(".section-hero__swiper-a",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:swiperTabsControl}});if(document.querySelector(".update-slider-b"))swiperTabsControl=new Swiper(".update-slider-b",{slidesPerView:5,direction:"vertical",spaceBetween:16,allowTouchMove:!1,touchStartForcePreventDefault:!0}),swiperTabs=new Swiper(".section-hero__swiper-b",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:swiperTabsControl}});if(document.querySelector(".update-slider-c"))swiperTabsControl=new Swiper(".update-slider-c",{slidesPerView:5,direction:"vertical",spaceBetween:16,allowTouchMove:!1,touchStartForcePreventDefault:!0}),swiperTabs=new Swiper(".section-hero__swiper-c",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:swiperTabsControl}});if(document.querySelector(".select-style__swiper"))swiper123=new Swiper(".select-style__swiper",{loop:!0,navigation:{nextEl:".select-style__button-next",prevEl:".select-style__button-prev"},breakpoints:{320:{slidesPerView:1,spaceBetween:20}}});if(document.querySelector(".section-hero__slider-half"))swiperTabsControl=new Swiper(".section-hero__slider-half",{slidesPerView:6,direction:"vertical",spaceBetween:10,allowTouchMove:!1,touchStartForcePreventDefault:!0}),swiperTabs=new Swiper(".section-hero__swiper-half",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:swiperTabsControl}});if(document.querySelector(".section-hero__slider-half-second"))swiperTabsControl=new Swiper(".section-hero__slider-half-second",{slidesPerView:6,direction:"vertical",spaceBetween:10,allowTouchMove:!1,touchStartForcePreventDefault:!0}),swiperTabs=new Swiper(".section-hero__swiper-half-second",{pagination:{el:".section-hero__swiper-pagination",clickable:!0},thumbs:{swiper:swiperTabsControl}});if(document.querySelector(".swipercolor"))swiperAlbum=new Swiper(".swipercolor",{loop:!0,navigation:{nextEl:".swiper-button-next-first",prevEl:".swiper-button-prev-first"},breakpoints:{300:{slidesPerView:3,spaceBetween:5},360:{slidesPerView:4,spaceBetween:5},450:{slidesPerView:5,spaceBetween:5},550:{slidesPerView:6,spaceBetween:5},650:{slidesPerView:7,spaceBetween:10},1024:{slidesPerView:5,spaceBetween:10},1100:{slidesPerView:6,spaceBetween:10},1200:{slidesPerView:7,spaceBetween:10}}});if(document.querySelector(".swipercolorSecond"))swiperAlbum=new Swiper(".swipercolorSecond",{loop:!0,navigation:{nextEl:".swiper-button-next-second",prevEl:".swiper-button-prev-second"},breakpoints:{300:{slidesPerView:3,spaceBetween:5},360:{slidesPerView:4,spaceBetween:5},450:{slidesPerView:5,spaceBetween:5},550:{slidesPerView:6,spaceBetween:5},650:{slidesPerView:7,spaceBetween:10},1024:{slidesPerView:5,spaceBetween:10},1100:{slidesPerView:6,spaceBetween:10},1200:{slidesPerView:7,spaceBetween:10}}});!function(){const e=document.querySelector(".gallery__container");let i,r,s,t,o,n,a;e&&(i=document.querySelectorAll(".gallery__activator-js"),i.forEach(e=>{e.classList.add("cursor-pointer")}),r=document.querySelector(".gallery__close"),s=e.querySelector(".swiper-wrapper"),t=e.querySelector(".gallery__fullscreen-btn"),o=()=>{e.classList.add("gallery__fade"),setTimeout(()=>{e.classList.add("gallery__d-none")},400),a.destroy(!0,!0),s.innerHTML="",document.body.classList.remove("overflow-h")});const l=function(){const i=this.dataset.folder,r=this.dataset.galleryimages;if(r){const e=r.split(",");n="",e.forEach(e=>{e=e.replace(/\s/g,""),imgNameWebp=e.replace(/(\.png|\.jpg)/gm,""),n+=`\n                <div class="swiper-slide gallery__item">\n                <figure class="gallery__image"> \n                <img   class="swiper-lazy"\n                data-src="${i+e}"  \n                data-srcset="${i}${imgNameWebp}-2880.webp 2x ,    ${i}${imgNameWebp}-1440.webp" \n                /> \n                </figure> \n                <div class="swiper-lazy-preloader swiper-lazy-preloader-white "></div>\n                    </div>  \n                `}),s.innerHTML=n,setTimeout(()=>{a=new Swiper(".swiperGallery",{effect:"fade",loop:!0,grabCursor:!0,resizeObserver:!0,lazy:{loadPrevNext:!0},navigation:{nextEl:".gallery__next",prevEl:".gallery__prev"}})},100)}document.body.classList.add("overflow-h"),e.classList.remove("gallery__d-none"),setTimeout(()=>{e.classList.remove("gallery__fade")},1)};e&&i&&(r.addEventListener("click",o),document.addEventListener("keydown",(function(e){27==e.keyCode&&o()})),i.forEach(e=>{e.addEventListener("click",l)}),t.addEventListener("click",(function(){e.classList.contains("gallery__fullscreen-open")&&setTimeout(()=>{a.update(),a.updateSize()},500),e.classList.toggle("gallery__fullscreen-open"),setTimeout(()=>{a.update(),a.updateSize()},1)})))}();