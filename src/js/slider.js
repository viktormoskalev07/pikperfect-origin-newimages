/////// slider for four albums ///
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

////// slider for two images ////
if (document.querySelector(".swiperDescription")){
  var swiper123 = new Swiper(".swiperDescription", {
      loop:true,
      Infinity: false,
      autoplay: {
          delay: 5000,
        },
      pagination: {
        el: ".swiperDescription-pagination",
        clickable: true,
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
    video.style.background="#eeeeee";

    let checkVideo =1 ;
  function call (){ 
        if (videoSlide){ 
          if( videoSlide.matches('.swiper-slide-active')){  
            video.src=video.dataset.src; 
            checkVideo=0; 
            // observer.disconnect();
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
        video.src=video.dataset.src.replace('background=1',""); 
        checkVideo=0; 
       }
     }, 2000);
} 


 
if (document.querySelector('.section-hero__tab-activators')&&!document.querySelector('#no-video')){ 
  const activators = document.querySelectorAll('.section-hero__tab-activators .swiper-slide');

  var swiperTabsControl = new Swiper(".section-hero__tab-activators", {  
    slidesPerView: 6,
    direction:'vertical',
    spaceBetween: 15,
    allowTouchMove:false, 
    touchStartForcePreventDefault:true,
    updateOnWindowResize=false,
  });
  
  var swiperTabs = new Swiper(".section-hero__swiper", { 
      pagination: {
        el: ".section-hero__swiper-pagination",
        clickable: true,
      } ,   
      thumbs: {
        swiper: swiperTabsControl
      } 
    });     
     videoInSlider();   

   activators.forEach((activator, i)=>{ 
    activator.addEventListener('click', ()=>{
      swiperTabs.slideTo(i);
    })
   })
   
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
    const swiperTabsControl = new Swiper(".update-slider-a", {  
      slidesPerView: 5,
      direction:'vertical',
      // cssMode: true,
      spaceBetween: 11,
      draggable: true,
      allowTouchMove:false,
      touchStartForcePreventDefault:true,
    });
    const swiperTabs = new Swiper(".section-hero__swiper-a", { 
        pagination: {
          el: ".section-hero__swiper-pagination",
          clickable: true,
        } ,  
        thumbs: {
          swiper: swiperTabsControl
        } 
      });  
  }
  
  // (function(){
  //   const swiperTabsControl = document.querySelector(".update-slider-a");
  //   const swiperTabsControlImg = document.querySelector(".section-hero__tab-activator");

  //   swiperTabsControl.addEventListener('mouseover', function () {
  //     setTimeout(() => {
  //       let clickEvent = new Event('click'); 
  //       swiperTabsControlImg.dispatchEvent(clickEvent); 
  //       console.log();
  //     }, 1000);
  //   });
  // }());
/////////// slider second /////////
  if (document.querySelector('.update-slider-b')){ 
    var swiperTabsControl = new Swiper(".update-slider-b", {  
      slidesPerView: 5,
      direction:'vertical',
      // cssMode: true,
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
      // cssMode: true,
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


//////// slider 14.2 album /////
if (document.querySelector(".select-style__swiper")){
  var swiper123 = new Swiper(".select-style__swiper", {
      loop:true,
      // autoplay: {
      //     delay: 3000,
      //   },
      navigation: {
        nextEl: ".next",
        prevEl: ".prev",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        },
      }
    });
  }

  //////// slider 14.2  cards /////
if (document.querySelector(".select-style__swiper-card")){
  var swiper123 = new Swiper(".select-style__swiper-card", {
      loop:true,
      // autoplay: {
      //     delay: 3000,
      //   },
      navigation: {
        nextEl: ".next-card",
        prevEl: ".prev-card",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 10
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 8
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 8
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 8
        },
      }
    });
  }

  /////////// slider 16.0  first/////////
  if (document.querySelector('.section-hero__slider-half')){ 
    var swiperTabsControl = new Swiper(".section-hero__slider-half", {  
      slidesPerView: 6,
      direction:'vertical',
      // cssMode: true,
      spaceBetween: 10,
      allowTouchMove:false, 
      touchStartForcePreventDefault:true,
    });
    
    var swiperTabs = new Swiper(".section-hero__swiper-half", { 
        pagination: {
          el: ".section-hero__swiper-pagination",
          clickable: true
        } ,  
        thumbs: {
          swiper: swiperTabsControl
        } 
      });  
  }
  /////////// slider 16.0  second/////////
  if (document.querySelector('.section-hero__slider-half-second')){ 
    var swiperTabsControl = new Swiper(".section-hero__slider-half-second", {  
      slidesPerView: 6,
      direction:'vertical',
      // cssMode: true,
      spaceBetween: 10,
      allowTouchMove:false, 
      touchStartForcePreventDefault:true,
    });
    
    var swiperTabs = new Swiper(".section-hero__swiper-half-second", { 
        pagination: {
          el: ".section-hero__swiper-pagination",
          clickable: true
        } ,  
        thumbs: {
          swiper: swiperTabsControl
        } 
      });  
  }

/////// slider for Linen Box Colors ////
  if (document.querySelector('.swipercolor')){
    var swiperAlbum = new Swiper(".swipercolor", {
      loop:true,
      navigation: {
        nextEl: ".swiper-button-next-first",
        prevEl: ".swiper-button-prev-first",
      },
      breakpoints: {
        300: {
          slidesPerView: 3,
          spaceBetween: 5
        },
        360: {
          slidesPerView: 4,
          spaceBetween: 5
        },
        450: {
          slidesPerView: 5,
          spaceBetween: 5
        },
        550: {
          slidesPerView: 6,
          spaceBetween: 5
        },
        650: {
          slidesPerView: 7,
          spaceBetween: 10
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 10
        },
        1100: {
          slidesPerView: 6,
          spaceBetween: 10
        },
        1200: {
          slidesPerView: 7,
          spaceBetween: 10
        }, 
      }, 
  });
}
/////// slider for Leatherette Box Colors ////
if (document.querySelector('.swipercolorSecond')){
  var swiperAlbum = new Swiper(".swipercolorSecond", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next-second",
      prevEl: ".swiper-button-prev-second",
    },
    breakpoints: {
      300: {
        slidesPerView: 3,
        spaceBetween: 5
      },
      360: {
        slidesPerView: 4,
        spaceBetween: 5
      },
      450: {
        slidesPerView: 5,
        spaceBetween: 5
      },
      550: {
        slidesPerView: 6,
        spaceBetween: 5
      },
      650: {
        slidesPerView: 7,
        spaceBetween: 10
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 10
      },
      1100: {
        slidesPerView: 6,
        spaceBetween: 10
      },
      1200: {
        slidesPerView: 7,
        spaceBetween: 10
      }, 
    }, 
});
}

  @@include('modules/galery.js')