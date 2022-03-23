        let closedChecker  =true;
        let firstOpen = true;
        let keyboardArrows = ()=>{  };
        let zChange = ()=>{};
        let clickContainer = ()=>{};
        let prevArrow =()=>{};
        let nextArrow =()=>{};
        const prev = document.querySelector(".flip-book__prev");
        const next = document.querySelector(".flip-book__next");
        const progressBar = document.querySelector('#galleryProgres');
        const progressBarText = document.querySelector('.progressBar-text');
        const containerFlip = document.querySelector('.container-flip');
        const animationContinue ={status:false};
        const debounceHandler =()=>{
            animationContinue.status=false;
            if(prev){prev.style.opacity =  1;}

            if (next){next.style.opacity =  1;}
        } ;
        const debounce=  ()=>{
            const status =animationContinue.status;

                prev.style.opacity = 0.5 ;
                next.style.opacity =  0.5   ;

            if(!animationContinue.status){
                clearTimeout(debounceHandler);
                    setTimeout(debounceHandler ,900) ;

            }
            animationContinue.status=true;
            return status;
        };

         const clearProgressBar = ()=>{
          if( progressBar){progressBar.value =0;}
           if(progressBarText){progressBarText.innerHTML=0+'%';}
         };

const closeGallery =()=>{
    container.classList.add('gallery__fade');
    containerFlip.classList.remove('shadow');
    containerFlip.classList.remove('end');
    containerFlip.classList.remove('landscape');
    containerFlip.classList.remove('portrait');
    containerFlip.style='';
    preloader.classList.remove('loaded');
    clearProgressBar();
    document.removeEventListener('keydown', keyboardArrows); // keyboard input
    containerFlip.removeEventListener('click',clickContainer);
    closedChecker=true;
    next.removeEventListener('click', nextArrow);
    prev.removeEventListener('click', prevArrow);
    firstOpen=false;
    animationContinue.status=false;
    setTimeout(() => {
        container.classList.add('gallery__d-none');
    }, 400);
    document.body.classList.remove('overflow-h');
    app.innerHTML='';
  };
  