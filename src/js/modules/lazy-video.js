
const videoLoder=()=>{
  const video=document.querySelector('.lazy-video__activator-js');
  let loaded = 1;
  const videoStart=()=>{
    if(document.querySelector('.lazy-video')){ 
      const videoPreloader = document.querySelector('.lazy-video__preloader');    
         video.src=video.dataset.src;    
         loaded=0;  
        setTimeout(() => {
          videoPreloader.style.opacity=0;
         
          setTimeout(() => {
            video.style.opacity=1;
          }, 100);
        }, 900);   
    }
  } 
 
  if(video){
      let videoTimeout=2500; 
      if(mediaQuery){
        videoTimeout=8000;
      }   
      setTimeout(() => {
          if(loaded){
            videoStart();
          }
      }, videoTimeout);  
      const options = { 
        rootMargin: '-20px',
        threshold: 0.01
    }
    const callback = function(entries, observer) {
      entries.forEach(ent => {
          if(!ent.isIntersecting){
            return false
          } 
          if(loaded){
            videoStart();
          }
          observer.unobserve(ent.target)
        });
    };
    const observer = new IntersectionObserver(callback, options);
    observer.observe(video); 
  }
           
}

videoLoder();

(function(){
  const modalVideo = document.querySelector('#modalVideo');

  if(modalVideo){
    modalVideo.addEventListener('click',function(){
      videoLoder();
    })
  }
}());