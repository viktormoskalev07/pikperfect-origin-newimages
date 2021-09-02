
if (document.querySelector('.swiperalbum')){
  var swiperAlbum = new Swiper(".swiperalbum", {
    pagination: {
      el: ".swiperalbum-pagination",
      clickable: true
    } ,
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      450: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 35
      }, 
    }, 
});
}
  
 
if (document.querySelector(".section-reviews__swiper")){
var swiper123 = new Swiper(".section-reviews__swiper", {
    loop:true,
    autoplay: {
        delay: 3000,
      },
    navigation: {
      nextEl: ".section-reviews__button-next",
      prevEl: ".section-reviews__button-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 100
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 100
      },
      1400: {
        slidesPerView: 3,
        spaceBetween: 115
      },
    }
  });
}
if (document.querySelector(".section-reviews-card__wrap")){
  var swiper312 = new Swiper(".section-reviews-card__wrap", {
    loop:true,
    autoplay: {
        delay: 3000,
      },
    navigation: {
      el: ".swiperalbum-pagination",
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 32
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 32
      },
    }
  });
}
 
  function videoInSlider(){ 
    const videoSlide = document.querySelector('.hero-video-slide'); 
    const videoPreloader = document.querySelector('.hero-video-slide__preloader'); 
    const video=document.getElementById('hero-video'); 
    let checkVideo =1 ;
  function call (){ 
        if (checkVideo&&videoSlide){ 
          if( videoSlide.matches('.swiper-slide-active')){ 
                        
                        video.src=video.dataset.src; 
                        checkVideo=0;
                        setTimeout(() => {
                          videoPreloader.style.opacity=0;
                        }, 300); 
                        observer.disconnect();
          } 
      }  
  }

  const observer = new MutationObserver(call)  
  observer.observe(videoSlide, {
    childList:false,
    attributes:true,
    characterData:false,
    attributeFilter:['class']
  })

     setTimeout(() => {
       if(checkVideo){
        video.src=video.dataset.src; 
        checkVideo=0;
        setTimeout(() => {
          videoPreloader.style.opacity=0;
        }, 300); 
        observer.disconnect();
       }
     }, 2000);
} 


 
if (document.querySelector('.section-hero__tab-activators')&&!document.querySelector('#no-video')){ 
  var swiperTabsControl = new Swiper(".section-hero__tab-activators", {  
    slidesPerView: 6,
    direction:'vertical',
    cssMode: true,
    spaceBetween: 15,
    allowTouchMove:false, 
    touchStartForcePreventDefault:true,
  });
  
  var swiperTabs = new Swiper(".section-hero__swiper", { 
      pagination: {
        el: ".section-hero__swiper-pagination",
        clickable: true
      } ,  
      thumbs: {
        swiper: swiperTabsControl
      } 
    });     
     videoInSlider(); 
 
}
if (document.querySelector('.swiperBigSlider')){ 
    const   BigSlider = new Swiper(".swiperBigSlider", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiperDescription-pagination",
        clickable: true,
      },
    }); 
  }
 
/////////// slider first /////////
  if (document.querySelector('.update-slider-a')){ 
    var swiperTabsControl = new Swiper(".update-slider-a", {  
      slidesPerView: 5,
      direction:'vertical',
      cssMode: true,
      spaceBetween: 16,
      allowTouchMove:false, 
      touchStartForcePreventDefault:true,
    });
    
    var swiperTabs = new Swiper(".section-hero__swiper-a", { 
        pagination: {
          el: ".section-hero__swiper-pagination",
          clickable: true
        } ,  
        thumbs: {
          swiper: swiperTabsControl
        } 
      });  
  }
/////////// slider second /////////
  if (document.querySelector('.update-slider-b')){ 
    var swiperTabsControl = new Swiper(".update-slider-b", {  
      slidesPerView: 5,
      direction:'vertical',
      cssMode: true,
      spaceBetween: 16,
      allowTouchMove:false, 
      touchStartForcePreventDefault:true,
    });
    
    var swiperTabs = new Swiper(".section-hero__swiper-b", { 
        pagination: {
          el: ".section-hero__swiper-pagination",
          clickable: true
        } ,  
        thumbs: {
          swiper: swiperTabsControl
        } 
      });  
  }
/////////// slider third /////////
  if (document.querySelector('.update-slider-c')){ 
    var swiperTabsControl = new Swiper(".update-slider-c", {  
      slidesPerView: 5,
      direction:'vertical',
      cssMode: true,
      spaceBetween: 16,
      allowTouchMove:false, 
      touchStartForcePreventDefault:true,
    });
    
    var swiperTabs = new Swiper(".section-hero__swiper-c", { 
        pagination: {
          el: ".section-hero__swiper-pagination",
          clickable: true
        } ,  
        thumbs: {
          swiper: swiperTabsControl
        } 
      });  
  }


  @@include('modules/galery.js')