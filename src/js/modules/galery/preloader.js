     /////// preloader

  
     function preloaderAnimation(){ 
   
        if(preloader){  
            //// created array with first 5  images and covers
            let loadedImages =[];
            let imgList =[];
            const progress =(path)=>{
              const img = new Image();
              img.src =  path;
              imgList.push(img);

              const nextStep = ()=>{
                if(closedChecker){
                  loadedImages=[];
                  imgList=0;
                  clearProgressBar();

                  return ;
                }
                loadedImages.push(img);
                const prog=Math.floor(loadedImages.length/imgList.length*100 +1) ;

             if (progressBar){progressBar.value = prog;}
               if (progressBarText){progressBarText.innerHTML=prog+'%';}
                if(loadedImages.length === imgList.length ){
                    app.innerHTML=result; //add template
                    clearProgressBar();
                    afterLoad();
                    preloader.classList.add('loaded');
                }
              };
              img.addEventListener('load', nextStep  );
              img.addEventListener('error', nextStep  );
            };


            const len = arrImages.length>5?5 : arrImages.length;
            const baseFolder = 'images/8.0/';
            progress( baseFolder +'shadow-open.png');
            progress( imgFolder + 'front-cover.jpg');
            progress( imgFolder +'base-left.jpg');
            progress( imgFolder +'base-left.jpg');
            progress( baseFolder +'inner_page_botom_shadow_common.png');
            for(let i =1 ; i <len ; i++){
              progress( imgFolder + `page-${i}.jpg`);
           } 
         
        }
      }
      setTimeout(preloaderAnimation, 500);