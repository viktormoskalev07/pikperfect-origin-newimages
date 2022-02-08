(function(){
  const container = document.querySelector('.gallery__container');
  const containerFlip = document.querySelector('.container-flip');
  let activator  ;
  let close      ;
  let slidePlace ;
  let fullscreen ;
  let closeGalery;
  if(!containerFlip && container){
          activator = document.querySelectorAll('.gallery__activator-js');
          activator.forEach(i => {
            i.classList.add('cursor-pointer');
          });
          
        close = document.querySelector('.gallery__close');
        slidePlace =container.querySelector('.swiper-wrapper');
        fullscreen = container.querySelector('.gallery__fullscreen-btn')  
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
   fullscreen = container.querySelector('.gallery__fullscreen-btn')  
    closeGalery=()=>{
      container.classList.add('gallery__fade');
      containerFlip.classList.remove('shadow');
      setTimeout(() => {
          container.classList.add('gallery__d-none');
      }, 400);   
      // GallerySlider.destroy(true, true);
      // slidePlace.innerHTML=''; 
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
    const albumImages = this.dataset.galleryalbumimages;
    const imgFolder = this.dataset.folder;
    
    const arrimages = albumImages.split(','); 
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
        fullscreen.addEventListener('click', function(){ 
            if(container.classList.contains('gallery__fullscreen-open')){
                  
                    setTimeout(() => { 
                        GallerySlider.update(); 
                        GallerySlider.updateSize();
                    },500);
            }
                            container.classList.toggle('gallery__fullscreen-open');
                            
                            setTimeout(() => { 
                                GallerySlider.update(); 
                                GallerySlider.updateSize()
                            }, 1);
                            
        })
    } 

}());

// @@include('flipBook.js');
