/////////// flip book ////////////////

(function(){
  const container = document.querySelector('.gallery__container');
  const containerFlip = document.querySelector('.container-flip');
  const preloader = document.querySelector('.preloader');
  let activator  ;
  let close      ;

  let closeGalery;
  if(container && containerFlip){
    activator = document.querySelectorAll('.gallery__activator-js');
    activator.forEach(i => {
      i.classList.add('cursor-pointer');
    });
  
  close = document.querySelector('.gallery__close');

  closeGalery=()=>{
    container.classList.add('gallery__fade');
    containerFlip.classList.remove('shadow');
    containerFlip.classList.remove('end');
    containerFlip.classList.remove('landscape');
    containerFlip.classList.remove('portrait');
    preloader.classList.remove('loaded');
    setTimeout(() => {
        container.classList.add('gallery__d-none');
    }, 400);   
    document.body.classList.remove('overflow-h');
  };
}
  

const openGalery =function(){  
  const app = document.querySelector('#app');
  if(app){
    let result = ' ';
    const imgFolder = this.dataset.folder;
    let pages =Number(this.dataset.pages) ;
    if ( pages<4 ||   isNaN(pages)){
      console.error('unsupported data-pages' );
      pages=4;
    }
     pages = pages%2>0? pages-1:pages;
    const albumCoverFolder = imgFolder;
    const albumFrontCover =  'front-cover.jpg , base-left.jpg , page-1.jpg';
    const albumBackCover =  `base-right.jpg , page-${pages}.jpg , back-cover.jpg`;
    const arrImagesBackCover = albumBackCover.split(' , '); 
    arrImagesBackCover.forEach((image, i) =>{
      if(i===0){
        result+= `
        <div class="page page__back-cover">
          <div class="front last-page" style="background-image:url(${albumCoverFolder+image})">`;
      }
      if(i ===1){
        result+= `
              <div class="outer">
                  <div class="content">
                    <img src="${albumCoverFolder+image}" alt="cover">
                  </div>
              </div>
          </div>`;
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
        </div>`;
      }
    });

    // output of all main pages



    let arrImages = [];
    for( let i = 2 ; i<pages  ; i++){

      const add = i%2 >0 ? 2:0;
      arrImages.push(`page-${pages-i+add}.jpg`);
    }


    arrImages.forEach((imgName , i)=>{

      // format album
      if(i === 0){
        let thisImg = new Image();
        thisImg.src=`${imgFolder+arrImages[0]}`;
        thisImg.onload = function(){
          let width = thisImg.width;
          let height = thisImg.height;
          let sum = width/height;
          if(sum > 1){
            containerFlip.classList.add("landscape");
          }
        };
      }
      if(i === 0){
        let thisImg = new Image();
        thisImg.src=`${imgFolder+arrImages[0]}`;
        thisImg.onload = function(){
          let width = thisImg.width;
          let height = thisImg.height;
          let sum = width/height;
          if(sum < 1){
            containerFlip.classList.add("portrait");
          }
        };
      }
        
      // format album
        if(i%2){
          result+= ` <div class="back">
                      <div class="outer">
                          <div class="content">
                              <div class="helper-class-to-make-bug-visbile">
                                <img src="${imgFolder+imgName}">
                              </div>
                          </div>
                      </div>
                    </div> </div>`;
        } else {
          result+= `<div class="page"> <div class="front">
                      <div class="outer">
                          <div class="content">
                            <img src="${imgFolder+imgName}">
                          </div>
                      </div>
                    </div>`;
        }  
      });

      // output first pages (cover)

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
            </div>`;
        }
        if(i===1){
          result+= `
            <div class="back first-page" style="background-image:url(${albumCoverFolder+image})">`;
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
            </div></div>`;
        }  
      });
    app.innerHTML=result;

  /////// preloader
  function preloaderAnimation(){
    if(preloader){
      let imgTempleate = new Image();
      imgTempleate.src = imgFrontCover.src;
      imgTempleate.addEventListener('load', function(){

        //// created array with last 5 img
        const newArr =[];
        const len = arrImages.length>5?5 : arrImages.length;
        let lastImgArr = arrImages.slice(-len);
        lastImgArr.forEach((item) => {
          let thisImg = new Image();
          let srcItemArray = imgFolder + item;
          thisImg.src = srcItemArray;
          thisImg.addEventListener('load', function(){
            newArr.push(thisImg);
            if(newArr.length == len){
              preloader.classList.add('loaded');
            }
          });
        });
      });
    }
  }
  setTimeout(preloaderAnimation, 500);
  }

  const page = document.querySelectorAll('.page');
  const containerFlip = document.querySelector('.container-flip');
  const frontCover = document.querySelector('.page__front-cover');
  const backCover = document.querySelector('.page__back-cover');

  const arrows = document.querySelector('.gallery__controls');
  const prev = document.querySelector(".flip-book__prev");
  const next = document.querySelector(".flip-book__next");

  const imgFrontCover = document.querySelector('.page__front-cover img');


  function openBookFront(){
    if(frontCover.classList.contains('next')){
      containerFlip.classList.add('shadow');
    }
  }
  function closeBookFront(){
    if(frontCover.classList.contains('prev')){
      containerFlip.classList.remove('shadow');
    }
  }
  function openBookBack(){
    if(backCover.classList.contains('prev')){
      containerFlip.classList.add('shadow');
    }
  }
  function closeBookBack(){
    if(backCover.classList.contains('next')){
      containerFlip.classList.remove('shadow');
    }
  }


  const removeCurrents = () => page.forEach(el => el.classList.remove('current', 'prev'));
    
  // click for every pages
  page.forEach((elem, index) => {
    const prevNode = elem.previousSibling;

    elem.addEventListener("click", function ( ) {
      removeCurrents();
      containerFlip.classList.remove('end');
      if (elem.classList.contains("next")) {
        elem.classList.remove('next');
        elem.classList.add('prev');
      } else {
        elem.classList.remove('prev');
        elem.classList.add("next");
      }

      if (prevNode.classList) prevNode.classList.add('current');
      if (index === 0 && containerFlip.classList.contains('shadow')) {
        setTimeout(() => containerFlip.classList.add('end'), 700);
      }
    });
  }
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

        clickFrontCover();
        setTimeout(closeBookBack, 600);
          page[page.length - 1 - pageNext.length].click();
      }else{
        page[page.length - 1].click();
      }
    }
    next.addEventListener('click', nextArrow);
  
    // click for button "prev"
    function prevArrow(){
      if(frontCover.classList.contains('next')){
        const pageNext = document.querySelectorAll('.page.next');
        if((page.length - pageNext.length)==0){
          page[page.length - pageNext.length].click();
        }
        else{
            page[page.length - pageNext.length].click();
        }
      }
    }
    prev.addEventListener('click', prevArrow);
    
  // add class click
  function clickContainer(){
    containerFlip.addEventListener('click', function(e){
      const parent = e.target.closest('.container-flip');
      parent.classList.add('click');
      arrows.classList.add('click');
      setTimeout(removeClick, 1000);
    });
  }
  function removeClick(){
    containerFlip.classList.remove('click');
    arrows.classList.remove('click');
  }
  clickContainer();

    
  // add zIndex for pages
    const foundMaxZIndex = ()=>{
      const arr = [];
      page.forEach((item)=>{
      arr.push(Number(item.style.zIndex)); 
    });
    return( Math.max(...arr));
    };

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
  }
  /////////// flip book ////////////////
    document.body.classList.add('overflow-h');
    container.classList.remove('gallery__d-none');
    document.addEventListener('keydown', keyboardArrows); // keyboard input
    setTimeout(() => { 
      container.classList.remove('gallery__fade');
    }, 1);
  };
    if(container&&activator){ 
      
        close.addEventListener('click' ,closeGalery); 
        document.addEventListener('keydown' , function(event){
            
            if(event.keyCode==27){
              closeGalery();
            } 
        }) ;
        activator.forEach(item => {
          item.addEventListener('click' , openGalery);
        });
    } 

}());
