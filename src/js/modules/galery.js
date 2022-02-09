(function(){
  const container = document.querySelector('.gallery__container');
  const containerFlip = document.querySelector('.container-flip');
  let activator  ;
  let close      ;
  let slidePlace ;
  let closeGalery;
  if(!containerFlip && container){
          activator = document.querySelectorAll('.gallery__activator-js');
          activator.forEach(i => {
            i.classList.add('cursor-pointer');
          });
          
        close = document.querySelector('.gallery__close');
        slidePlace =container.querySelector('.swiper-wrapper');
        closeGalery=()=>{
          container.classList.add('gallery__fade');
          setTimeout(() => {
              container.classList.add('gallery__d-none');
          }, 400);   
          GallerySlider.destroy(true, true);
          slidePlace.innerHTML=''; 
          document.body.classList.remove('overflow-h');
        } 
  }
  if(container && containerFlip){
    activator = document.querySelectorAll('.gallery__activator-js');
    activator.forEach(i => {
      i.classList.add('cursor-pointer');
    });
  
  close = document.querySelector('.gallery__close');
  slidePlace =container.querySelector('.swiper-wrapper');
  closeGalery=()=>{
    container.classList.add('gallery__fade');
    containerFlip.classList.remove('shadow');
    setTimeout(() => {
        container.classList.add('gallery__d-none');
    }, 400);   
    document.body.classList.remove('overflow-h');
    document.removeEventListener('keydown', keyboardArrows); // keyboard input
  } 
}

  let slides;
  let GallerySlider 
  
const openGalery =function(){  

    const folder = this.dataset.folder;
    const images = this.dataset.galleryimages;
    if(images){ 
      const arrimages = images.split(',');  
      slides='';
      arrimages.forEach(imgName => { 
        imgName = imgName.replace(/\s/g, ''); 
        imgNameWebp = imgName.replace(/(\.png|\.jpg)/gm, ''); 
          slides+=`
          <div class="swiper-slide gallery__item">
          <figure class="gallery__image"> 
          <img   class="swiper-lazy"
          data-src="${folder+imgName}"  
          data-srcset="${folder}${imgNameWebp}-2880.webp 2x ,    ${folder}${imgNameWebp}-1440.webp" 
          /> 
          </figure> 
          <div class="swiper-lazy-preloader swiper-lazy-preloader-white "></div>
              </div>  
          `; 
        });
        slidePlace.innerHTML=slides; 
        setTimeout(() => {
              GallerySlider   = new Swiper(".swiperGallery", { 
                effect: "fade",
                loop:true,
                grabCursor:true,
                resizeObserver:true,
                lazy: {
                    loadPrevNext: true,
                  },
                navigation: {
                  nextEl: ".gallery__next",
                  prevEl: ".gallery__prev",
                }, 
              });
        }, 100);
  
    }

/////////// flip book ////////////////
    const app = document.querySelector('#app');

  if(app){
    let result = ' ';
    
    // output last pages (cover)
    const albumCoverFolder = this.dataset.coverfolder;
    const albumBackCover = this.dataset.backcover;
    const arrImagesBackCover = albumBackCover.split(' , '); 
    arrImagesBackCover.forEach((image, i) =>{
      if(i===0){
        result+= `
        <div class="page page__back-cover">
          <div class="front last-page" style="background-image:url(${albumCoverFolder+image})">`
      }
      if(i ===1){
        result+= `
              <div class="outer">
                  <div class="content">
                    <img src="${albumCoverFolder+image}">
                  </div>
              </div>
          </div>`
      }
      if(i ===(arrImagesBackCover.length - 1) ){
        result+= `
          <div class="back">
              <div class="outer">
                  <div class="content">
                      <div class="helper-class-to-make-bug-visbile">
                        <img src="${albumCoverFolder+image}">
                      </div>
                  </div>
              </div>
          </div>
        </div>`
      }
    });

    // output of all main pages
    const albumImages = this.dataset.galleryalbumimages;
    const imgFolder = this.dataset.folder;
    const arrimages = albumImages.split(' , '); 
    arrimages.forEach((imgName , i)=>{
        if(i%2){ 
          result+= ` <div class="back">
                      <div class="outer">
                          <div class="content">
                              <div class="helper-class-to-make-bug-visbile">
                                <img src="${imgFolder+imgName}">
                              </div>
                          </div>
                      </div>
                    </div> </div>`
        } else {
          result+= `<div class="page"> <div class="front">
                      <div class="outer">
                          <div class="content">
                            <img src="${imgFolder+imgName}">
                          </div>
                      </div>
                    </div>`
        }  
      });

      // output first pages (cover)
      const albumFrontCover = this.dataset.frontcover;
      const arrImagesFrontCover = albumFrontCover.split(' , '); 
      arrImagesFrontCover.forEach((image, i) =>{
        if(i ===0){
          result+= `
          <div class="page page__front-cover">
            <div class="front">
                <div class="outer">
                    <div class="content">
                      <img src="${albumCoverFolder+image}">
                    </div>
                </div>
            </div>`
        }
        if(i===1){
          result+= `
            <div class="back first-page" style="background-image:url(${albumCoverFolder+image})">`
        }
        if(i ===(arrImagesFrontCover.length - 1) ){
          result+= `
                <div class="outer">
                    <div class="content">
                        <div class="helper-class-to-make-bug-visbile">
                          <img src="${albumCoverFolder+image}">
                        </div>
                    </div>
                </div>
            </div></div>`
        }  
      })
    app.innerHTML=result;
  }

  const page = document.querySelectorAll('.page');
  const containerFlip = document.querySelector('.container-flip');
  const frontCover = document.querySelector('.page__front-cover');
  const backCover = document.querySelector('.page__back-cover');
  const shadow = document.querySelector(".box-shadow");
  const arrows = document.querySelector('.gallery__controls');
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
  
  // add/remove shadow for book
  function clickBackCover(){
    setTimeout(openBookBack, 600);
    setTimeout(closeBookBack, 200);
  }
  function clickFrontCover(){
    setTimeout(openBookFront, 600);
    setTimeout(closeBookFront, 200);
  }
  frontCover.addEventListener('click', clickFrontCover);
  backCover.addEventListener('click', clickBackCover);
  
    // click for button "next"
    function nextArrow(){
      if(frontCover.classList.contains('next')){
        const pageNext = document.querySelectorAll('.page.next');
        const thisNextLength = (page.length - pageNext.length);
        setTimeout(closeBookBack, 600);
        if(page.length = thisNextLength){
          page[page.length - 1 - pageNext.length].click();
        }
      }else{
        page[page.length - 1].click();
      }
    };
    next.addEventListener('click', nextArrow);
  
    // click for button "prev"
    function prevArrow(){
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
    };
    prev.addEventListener('click', prevArrow);
    
  // add class click
  function clickContainer(){
    containerFlip.addEventListener('click', function(e){
      const parent = e.target.closest('.container-flip');
      parent.classList.add('click');
      arrows.classList.add('click');
      setTimeout(removeClick, 1000);
    })
  }
  function removeClick(){
    containerFlip.classList.remove('click');
    arrows.classList.remove('click');
  }
  clickContainer();

    
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
      if(!(containerFlip.classList.contains('click'))){
        prevArrow();
      }
    }
    else if (e.keyCode == '39') {
      if(!(containerFlip.classList.contains('click'))){
        nextArrow();
      }
    }
  };
  /////////// flip book ////////////////

    document.body.classList.add('overflow-h');
    container.classList.remove('gallery__d-none');
    document.addEventListener('keydown', keyboardArrows); // keyboard input
    setTimeout(() => { 
        container.classList.remove('gallery__fade');
    }, 1);
  }
    if(container&&activator){ 
      
        close.addEventListener('click' ,closeGalery); 
        document.addEventListener('keydown' , function(event){
            
            if(event.keyCode==27){
                closeGalery();
            } 
        }) 
        activator.forEach(item => {
            item.addEventListener('click' , openGalery);
        });
    } 

}());

// @@include('flipBook.js');


//orientation albums

// var imgLandscape = new Image();  
// var imgLargeSquare = new Image();     

// imgLandscape.onload = function() {      
//    var width1 = this.width;
//    var hight1 = this.height;
//    var sum1 = width1/hight1;
//    console.log('imgLandscape ' + sum1);
//  }  
//  imgLargeSquare.onload = function() {      
//   var width2 = this.width;
//   var hight2 = this.height;
//   var sum2 = width2/hight2;
//   console.log('imgLargeSquare '+ sum2);
// }    
// imgLandscape.src = 'https://uc9a9ea929f2d838c3518e359039.previews.dropboxusercontent.com/p/thumb/ABdR3Ghg4JExbfLJOEBYePIcF1SsgO6OBNpFN-HHL3Cco3iVlmolLBSkEPScExyziqTJ73bpxyRR8TSq4kZ6qfYryzOhlke2L3y8XKAe3gYUiTgvtlojvoT3qK6Y6Zca8HQdJHE200VxtqeW-0ln8pWkJ2UVVYE8fSnwZ-J5_TgZ-wWMKOwu7m45cM2F__4nXHfX72ekUlROWlBRcEkIWGgXPIBJ8Nczr-Nz-bjFHSCI4LTyaugjDbS2LQXN0_ADJbQNO3l7c94-4VTqLqoog2aPwrRDr9julPwbm8HjX8vow95f4oM8eLujKmDldH-vs4xC4p4aJfDeSdnWql2rxgWbsyLhPp2-xE1kEYWIklFfTmT1ThbrIvlfOJzni-neF7E/p.jpeg';
// imgLargeSquare.src='https://ucd6c5b9f02f3d34044145d1aad3.previews.dropboxusercontent.com/p/thumb/ABcfL9XapxKmQF5pvTGiTDmP_ecI1s0LStZ16UXUnfUCb7pro0JffMkGRseTnsZO6MucZJ62HbPza6xvbSATA_MukoayhF4pHti1v85WfbJVOJAtkRfsbreVr4yivWD67sLCjZu9hduRkuD5djoJn5U5jSXL67ssXqVgelz-4rrfzCqJBLACKkhrolGrSP89tCJFfzUUbFXeUDwV3A3m_PXgLcnlpuMOl7FT70dTUWmruG69QTDllnh1A7n0WMXEP7LsRzaBToYaj96JfzGT5B9h0RbBCUBwQJkfdyJszG5gcRAC-O-4f-l7ZpNt9_ZounOabEfCofn_QJpgPPe1PBTZQhJW8aUi0MSmKcnnN4C97w2wtEn5ZIR8iLb58cuVceo/p.jpeg';