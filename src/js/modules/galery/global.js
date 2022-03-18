        let closedChecker  =true;
        const prev = document.querySelector(".flip-book__prev");
        const next = document.querySelector(".flip-book__next"); 
        const animationContinue ={status:false};
        const debounceHandler =()=>{
            animationContinue.status=false;
            prev.style.opacity =  1 ;
            next.style.opacity =  1 ;
        }
        const debounce=  ()=>{ 
            const status =animationContinue.status
             
                prev.style.opacity = 0.5 ;
                next.style.opacity =  0.5   ;
            
            if(!animationContinue.status){
                clearTimeout(debounceHandler)
                    setTimeout(debounceHandler ,900) 
                  
            }
            animationContinue.status=true;
            return status
        }
         const progresBar = document.querySelector('#galleryProgres');
         const progresBarText = document.querySelector('.progressBar-text');
         const clearProgressBar = ()=>{
           progresBar&&(progresBar.value =0)
           progresBarText&&(progresBarText.innerHTML=0+'%');
         }
         
const closeGalery =()=>{
    container.classList.add('gallery__fade');
    containerFlip.classList.remove('shadow');
    containerFlip.classList.remove('end');
    containerFlip.classList.remove('landscape');
    containerFlip.classList.remove('portrait');
    preloader.classList.remove('loaded');
    clearProgressBar()
    closedChecker=true
    setTimeout(() => {
        container.classList.add('gallery__d-none');
    }, 400);   
    document.body.classList.remove('overflow-h');
    app.innerHTML=''
  };
  