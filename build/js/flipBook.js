!function(){const e=["complete-album/wedding-timeless-hochzeit-A+A/page-12.jpg","complete-album/wedding-timeless-hochzeit-A+A/page-13.jpg","complete-album/wedding-timeless-hochzeit-A+A/page-10.jpg","complete-album/wedding-timeless-hochzeit-A+A/page-11.jpg","complete-album/wedding-timeless-hochzeit-A+A/page-8.jpg","complete-album/wedding-timeless-hochzeit-A+A/page-9.jpg","complete-album/wedding-timeless-hochzeit-A+A/page-6.jpg","complete-album/wedding-timeless-hochzeit-A+A/page-7.jpg","complete-album/wedding-timeless-hochzeit-A+A/page-4.jpg","complete-album/wedding-timeless-hochzeit-A+A/page-5.jpg","complete-album/wedding-timeless-hochzeit-A+A/page-2.jpg","complete-album/wedding-timeless-hochzeit-A+A/page-3.jpg"],n=["yellow-leather/inner-page/inner_page_base_leather_yellow_right.png","complete-album/wedding-timeless-hochzeit-A+A/page-122.jpg","yellow-leather/cover/cover.jpg"],t=["yellow-leather/cover/cover.jpg","yellow-leather/inner-page/inner_page_base_leather_yellow_left.png","complete-album/wedding-timeless-hochzeit-A+A/page-122.jpg"],o=document.querySelector("#app");if(o){let i=" ";n.forEach((e,t)=>{0===t&&(i+=`\n        <div class="page page__back-cover">\n          <div class="front last-page" style="background-image:url(images/large-square/${e})">`),1===t&&(i+=`\n              <div class="outer">\n                  <div class="content">\n                    <img src="images/large-square/${e}">\n                  </div>\n              </div>\n          </div>`),t===n.length-1&&(i+=`\n          <div class="back">\n              <div class="outer">\n                  <div class="content">\n                      <div class="helper-class-to-make-bug-visbile">\n                        <img src="images/large-square/${e}">\n                      </div>\n                  </div>\n              </div>\n          </div>\n        </div>`)}),e.forEach((e,n)=>{i+=n%2?` <div class="back">\n                      <div class="outer">\n                          <div class="content">\n                              <div class="helper-class-to-make-bug-visbile">\n                                <img src="images/large-square/${e}">\n                              </div>\n                          </div>\n                      </div>\n                    </div> </div>`:`<div class="page"> <div class="front">\n                      <div class="outer">\n                          <div class="content">\n                            <img src="images/large-square/${e}">\n                          </div>\n                      </div>\n                    </div>`}),t.forEach((e,n)=>{0===n&&(i+=`\n          <div class="page page__front-cover">\n            <div class="front">\n                <div class="outer">\n                    <div class="content">\n                      <img src="images/large-square/${e}">\n                    </div>\n                </div>\n            </div>`),1===n&&(i+=`\n            <div class="back first-page" style="background-image:url(images/large-square/${e})">\n                `),n===t.length-1&&(i+=`\n            \n                <div class="outer">\n                    <div class="content">\n                        <div class="helper-class-to-make-bug-visbile">\n                          <img src="images/large-square/${e}">\n                        </div>\n                    </div>\n                </div>\n            </div></div>`)}),o.innerHTML=i}}();const page=document.querySelectorAll(".page"),containerFlip=document.querySelector(".container-flip"),frontCover=document.querySelector(".page__front-cover"),backCover=document.querySelector(".page__back-cover"),shadow=document.querySelector(".box-shadow"),prev=document.querySelector(".flip-book__prev"),next=document.querySelector(".flip-book__next");function openBookFront(){frontCover.classList.contains("next")&&containerFlip.classList.add("shadow")}function closeBookFront(){frontCover.classList.contains("prev")&&containerFlip.classList.remove("shadow")}function openBookBack(){backCover.classList.contains("prev")&&containerFlip.classList.add("shadow")}function closeBookBack(){backCover.classList.contains("next")&&containerFlip.classList.remove("shadow")}frontCover&&frontCover.addEventListener("click",(function(){setTimeout(openBookFront,600),setTimeout(closeBookFront,200)})),backCover&&backCover.addEventListener("click",(function(){setTimeout(openBookBack,600),setTimeout(closeBookBack,200)})),page.forEach(e=>e.addEventListener("click",(function(){this.classList.contains("next")?(this.classList.add("prev"),this.classList.remove("next")):(this.classList.add("next"),this.classList.remove("prev"))}))),next.addEventListener("click",(function(){if(frontCover.classList.contains("next")){const e=document.querySelectorAll(".page.next"),n=page.length-e.length;(page.length=n)&&page[page.length-1-e.length].click()}else page[page.length-1].click()})),prev.addEventListener("click",(function(){if(frontCover.classList.contains("next")){const e=document.querySelectorAll(".page.next"),n=page.length-e.length;(page.length-e.length==0||(page.length=n))&&page[page.length-e.length].click()}}));const foundMaxZIndex=()=>{const e=[];return page.forEach(n=>{e.push(Number(n.style.zIndex))}),Math.max(...e)};function keyCodeArrow(e){"37"==(e=e||window.event).keyCode?prev.click():"39"==e.keyCode&&next.click()}containerFlip.addEventListener("click",e=>{e.target.closest(".page").style.zIndex=foundMaxZIndex()+1}),activator=document.querySelectorAll(".gallery__activator-js"),activator.forEach(e=>{e.addEventListener("click",(function(){document.addEventListener("keydown",keyCodeArrow)}))}),close=document.querySelector(".gallery__close"),close.addEventListener("click",(function(){document.removeEventListener("keydown",keyCodeArrow)})),document.addEventListener("keydown",(function(e){27==e.keyCode&&document.removeEventListener("keydown",keyCodeArrow)}));