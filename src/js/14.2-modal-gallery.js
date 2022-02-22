(function(){
  const container = document.querySelector('.select-style__modal');
  let activator  ;
  let close      ;
  let slidePlace ;
  let fullscreen ;
  let closeGalery;
  let modalContent;
  if(container){
        activator = document.querySelectorAll('.gallery__activator-js');
        activator.forEach(i => {
          i.classList.add('cursor-pointer');
        });

        close = document.querySelector('.select-style__close');
        slidePlace =container.querySelector('.swiper-wrapper');
        modalContent =container.querySelector('.select-style__modal-content');
        fullscreen = container.querySelector('.gallery__fullscreen-btn')  
        closeGalery=()=>{
          container.classList.add('gallery__fade');
          container.classList.add('gallery__d-none');  
          GallerySlider.destroy(true, true);
          slidePlace.innerHTML=''; 
          modalContent.innerHTML=''; 
          document.body.classList.remove('overflow-h');
      } 
  }

  let slides;
  let GallerySlider 

const openGalery =function(){  

  const title = this.dataset.title;
  const text = this.dataset.text;
  if(title){ 
    modalText='';
    modalText=`
      <h2>${title}</h2> 
      <p>${text}</p>
      `; 
  modalContent.innerHTML=modalText; 
}
  const folder = this.dataset.folder;
  const images = this.dataset.galleryimages;
    if(images){ 
          const arrimages = images.split(' , ');  
          slides='';
          arrimages.forEach(imgName => { 
            imgName = imgName.replace(/\s/g, ''); 
            imgNameWebp = imgName.replace(/(\.png|\.jpg)/gm, ''); 
              slides+=`
              <div class="swiper-slide select-style__item">
              <figure class="select-style__image"> 
              <img class="swiper-lazy"
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
                nextEl: ".swiper-next",
                prevEl: ".swiper-prev",
              }, 
              pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
              },
            });
      }, 10);

    }

    document.body.classList.add('overflow-h');
    container.classList.remove('gallery__d-none');
    container.classList.remove('gallery__fade');
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
        GallerySlider.update(); 
        GallerySlider.updateSize();
      }
      container.classList.toggle('gallery__fullscreen-open');
        GallerySlider.update(); 
        GallerySlider.updateSize()
    })
  } 
}())