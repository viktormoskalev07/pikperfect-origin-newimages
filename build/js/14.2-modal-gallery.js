!function(){const e=document.querySelector(".select-style__modal");let t,s,l,a,r,n,i,o;e&&(t=document.querySelectorAll(".gallery__activator-js"),t.forEach(e=>{e.classList.add("cursor-pointer")}),s=document.querySelector(".select-style__close"),l=e.querySelector(".swiper-wrapper"),n=e.querySelector(".select-style__modal-content"),a=e.querySelector(".gallery__fullscreen-btn"),r=()=>{e.classList.add("gallery__fade"),e.classList.add("gallery__d-none"),o.destroy(!0,!0),l.innerHTML="",n.innerHTML="",document.body.classList.remove("overflow-h")});const c=function(){const t=this.dataset.title,s=this.dataset.text;t&&(modalText="",modalText=`\n      <h2>${t}</h2> \n      <p>${s}</p>\n      `,n.innerHTML=modalText);const a=this.dataset.folder,r=this.dataset.galleryimages;if(r){const e=r.split(" , ");i="",e.forEach(e=>{e=e.replace(/\s/g,""),imgNameWebp=e.replace(/(\.png|\.jpg)/gm,""),i+=`\n              <div class="swiper-slide select-style__item">\n              <figure class="select-style__image"> \n              <img class="swiper-lazy"\n              data-src="${a+e}"  \n              data-srcset="${a}${imgNameWebp}-2880.webp 2x ,    ${a}${imgNameWebp}-1440.webp" \n              /> \n              </figure> \n              <div class="swiper-lazy-preloader swiper-lazy-preloader-white "></div>\n                  </div>  \n              `}),l.innerHTML=i,setTimeout(()=>{o=new Swiper(".swiperGallery",{effect:"fade",loop:!0,grabCursor:!0,resizeObserver:!0,lazy:{loadPrevNext:!0},navigation:{nextEl:".swiper-next",prevEl:".swiper-prev"},pagination:{el:".swiper-pagination",type:"bullets"}})},10)}document.body.classList.add("overflow-h"),e.classList.remove("gallery__d-none"),e.classList.remove("gallery__fade")};e&&t&&(s.addEventListener("click",r),document.addEventListener("keydown",(function(e){27==e.keyCode&&r()})),t.forEach(e=>{e.addEventListener("click",c)}),a.addEventListener("click",(function(){e.classList.contains("gallery__fullscreen-open")&&(o.update(),o.updateSize()),e.classList.toggle("gallery__fullscreen-open"),o.update(),o.updateSize()})))}();