
(function(){
  // Array img (front and back every pages)
  const images = [
    'complete-album/wedding-timeless-hochzeit-A+A/page-12.jpg',  // front
    'complete-album/wedding-timeless-hochzeit-A+A/page-13.jpg',  // back 

    'complete-album/wedding-timeless-hochzeit-A+A/page-10.jpg',  // front
    'complete-album/wedding-timeless-hochzeit-A+A/page-11.jpg',  // back

    'complete-album/wedding-timeless-hochzeit-A+A/page-8.jpg',  // front
    'complete-album/wedding-timeless-hochzeit-A+A/page-9.jpg',  // back

    'complete-album/wedding-timeless-hochzeit-A+A/page-6.jpg',  // front
    'complete-album/wedding-timeless-hochzeit-A+A/page-7.jpg',  // back

    'complete-album/wedding-timeless-hochzeit-A+A/page-4.jpg',  // front
    'complete-album/wedding-timeless-hochzeit-A+A/page-5.jpg',  // back

    'complete-album/wedding-timeless-hochzeit-A+A/page-2.jpg',  // front
    'complete-album/wedding-timeless-hochzeit-A+A/page-3.jpg',  // back
  ]

  // Array cover (3 last pages)
  const coverBack = [
    'yellow-leather/inner-page/inner_page_base_leather_yellow_right.png', //last page
    'complete-album/wedding-timeless-hochzeit-A+A/page-122.jpg',  // last white page
    'yellow-leather/cover/cover.jpg', //last page cover
  ]

  // Array cover (3 first pages)
  const coverFront = [
    'yellow-leather/cover/cover.jpg', //first page cover
    'yellow-leather/inner-page/inner_page_base_leather_yellow_left.png', //first page
    'complete-album/wedding-timeless-hochzeit-A+A/page-122.jpg',  // first white page

  ]
  const app = document.querySelector('#app');
  if(app){
    let result = ' ';


    // output last pages (cover)
    coverBack.forEach((image, i) =>{
      if(i===0){
        result+= `
        <div class="page page__back-cover">
          <div class="front last-page" style="background-image:url(images/large-square/${image})">`
      }
      if(i ===1){
        result+= `
              <div class="outer">
                  <div class="content">
                    <img src="images/large-square/${image}">
                  </div>
              </div>
          </div>`
      }
      if(i ===(coverBack.length - 1) ){
        result+= `
          <div class="back">
              <div class="outer">
                  <div class="content">
                      <div class="helper-class-to-make-bug-visbile">
                        <img src="images/large-square/${image}">
                      </div>
                  </div>
              </div>
          </div>
        </div>`
      }
    });

    // output of all main pages
    images.forEach((image , i)=>{
        if(i%2){ 
          result+= ` <div class="back">
                      <div class="outer">
                          <div class="content">
                              <div class="helper-class-to-make-bug-visbile">
                                <img src="images/large-square/${image}">
                              </div>
                          </div>
                      </div>
                    </div> </div>`
        } else {
          result+= `<div class="page"> <div class="front">
                      <div class="outer">
                          <div class="content">
                            <img src="images/large-square/${image}">
                          </div>
                      </div>
                    </div>`
        }  
      });

      // output first pages (cover)
      coverFront.forEach((image, i) =>{
        if(i ===0){
          result+= `
          <div class="page page__front-cover">
            <div class="front">
                <div class="outer">
                    <div class="content">
                      <img src="images/large-square/${image}">
                    </div>
                </div>
            </div>`
        }
        if(i===1){
          result+= `
            <div class="back first-page" style="background-image:url(images/large-square/${image})">
                `
        }
        if(i ===(coverFront.length - 1) ){
          result+= `
            
                <div class="outer">
                    <div class="content">
                        <div class="helper-class-to-make-bug-visbile">
                          <img src="images/large-square/${image}">
                        </div>
                    </div>
                </div>
            </div></div>`
        }  
      })
    app.innerHTML=result;
  }



}());

const page = document.querySelectorAll('.page');
const containerFlip = document.querySelector('.container-flip');
const frontCover = document.querySelector('.page__front-cover');
const backCover = document.querySelector('.page__back-cover');
const shadow = document.querySelector(".box-shadow");
const prev = document.querySelector(".flip-book__prev");
const next = document.querySelector(".flip-book__next");



function openBookFront(){
  if(frontCover.classList.contains('next')){
    containerFlip.classList.add('shadow');
  }
};
function closeBookFront(){
  if(frontCover.classList.contains('prev')){
    containerFlip.classList.remove('shadow');
  }
};

function openBookBack(){
  if(backCover.classList.contains('prev')){
    containerFlip.classList.add('shadow');
  }
};
function closeBookBack(){
  if(backCover.classList.contains('next')){
    containerFlip.classList.remove('shadow');
  }
};

// add/remove shadow for book
(function(){
  if(frontCover){
    frontCover.addEventListener("click" , function(){
      setTimeout(openBookFront, 600);
      setTimeout(closeBookFront, 200);
    });
  };
  if(backCover){
    backCover.addEventListener("click" , function(){
    setTimeout(openBookBack, 600);
    setTimeout(closeBookBack, 200);
  })
  }
}());


// click for every pages
  page.forEach((elem) =>
    elem.addEventListener("click", function () {
        if (this.classList.contains("next")) {
          this.classList.add('prev');
          this.classList.remove('next');
        } else {
          this.classList.add("next");
          this.classList.remove('prev');
        }
    })
  );

  // click for button "next"
  next.addEventListener('click', function(){
    if(frontCover.classList.contains('next')){

      const pageNext = document.querySelectorAll('.page.next');
      const thisNextLength = (page.length - pageNext.length);

      if(page.length = thisNextLength){
        page[page.length - 1 - pageNext.length].click();
      }

    }else{
      page[page.length - 1].click();
    }
  })

  // click for button "prev"
  prev.addEventListener('click', function(){
    if(frontCover.classList.contains('next')){

      const pageNext = document.querySelectorAll('.page.next');
      const thisNextLength = (page.length - pageNext.length);

      if((page.length - pageNext.length)==0){
        page[page.length - pageNext.length].click();
      }
      else{
        if(page.length = thisNextLength){
          page[page.length - pageNext.length].click();
        }
      }
    }
  })
    
  
// add zIndex for pages
  const foundMaxZIndex = ()=>{
    const arr = []
    page.forEach((item)=>{
    arr.push(Number(item.style.zIndex)); 
  })
  return( Math.max(...arr));
  }

  containerFlip.addEventListener('click', (e)=>{
  const targetCard =e.target.closest('.page');
  targetCard.style.zIndex = foundMaxZIndex() + 1;
});


// keyboard input click <- ->
function keyboardArrows(e){
  e = e || window.event;

  if (e.keyCode == '37') {
    prev.click();
  }
  else if (e.keyCode == '39') {
    next.click();
  }
};

// activator = document.querySelectorAll('.gallery__activator-js');
// activator.forEach((item) =>{
//   item.addEventListener('click', function(){
//     document.addEventListener('keydown', keyboardArrows)
//   })
// });

// close = document.querySelector('.gallery__close');
// close.addEventListener('click', function(){
//   document.removeEventListener('keydown', keyboardArrows)
// });

// document.addEventListener('keydown' , function(event){
//   if(event.keyCode==27){
//     document.removeEventListener('keydown', keyboardArrows)
//   } 
// });
