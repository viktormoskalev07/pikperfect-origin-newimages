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
const loaderImg = 'src="images/8.0/spiner.gif"'
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
                <img ${loaderImg} class="lazypage" data-src="${albumCoverFolder+image}" alt="cover">
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
                    <img ${loaderImg}  class="lazypage" data-src="${albumCoverFolder+image}">
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
    thisImg.src=`${imgFolder+arrImages[arrImages.length-1]}`;
    thisImg.onload = function(){
      let width = thisImg.width;
      let height = thisImg.height;
   
        containerFlip.style.aspectRatio= width+ '/'+height ;
        containerFlip.style.height='auto';
        containerFlip.style.width='40%';
        containerFlip.classList.add( width/height<1 ?"portrait":'landscape');
        if(width === height){
          containerFlip.classList.remove('landscape');
        }
       
    };
  } 
    
  // format album
    if(i%2){
      result+= ` <div class="back">
                  <div class="outer">
                      <div class="content">
                          <div class="helper-class-to-make-bug-visbile">
                            <img ${loaderImg}  class="lazypage"  data-src="${imgFolder+imgName}">
                          </div>
                      </div>
                  </div>
                </div> </div>`;
    } else {
      result+= `<div class="page"> <div class="front">
                  <div class="outer">
                      <div class="content">
                        <img ${loaderImg}  class="lazypage"  data-src="${imgFolder+imgName}">
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
                  <img ${loaderImg}  class="lazypage" data-src="${albumCoverFolder+image}">
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
                      <img ${loaderImg}  class="lazypage"  data-src="${albumCoverFolder+image}">
                    </div>
                </div>
            </div>
        </div></div>`;
    }  
  });
