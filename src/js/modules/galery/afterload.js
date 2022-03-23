function afterLoad (){
    let lazy = document.querySelectorAll('.lazypage');

  
    let i = lazy.length;
    const loading =()=>{
      if(closedChecker){
        lazy=[];
        i=0;
        return ;
      }
      const img = lazy[i-1]; 
      if(!img){return;}
      img.src=img.dataset.src;
      img.addEventListener('load' , ()=>{ 
         i--;
       
         if(i<1||closedChecker) {return false;}
         loading();
      });
    };
    loading();

    const page = document.querySelectorAll('.page');
    const frontCover = document.querySelector('.page__front-cover');
    const backCover = document.querySelector('.page__back-cover');
  
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
        nextArrow =()=>{

        if(debounce()){ return false;}

          if(frontCover.classList.contains('next')){
            const pageNext = document.querySelectorAll('.page.next');

            clickFrontCover();
            setTimeout(closeBookBack, 600);
           const  calculatedTarget =   page[page.length - 1 - pageNext.length];
           if(calculatedTarget){
             calculatedTarget.click();
           }

          }else{
           if(page[page.length - 1]) page[page.length - 1].click();
          }
        };



        next.addEventListener('click', nextArrow);
    // click for button "prev"
       prevArrow =()=>{

      if(debounce()){ return false;}
      if(frontCover.classList.contains('next')){
        const pageNext = document.querySelectorAll('.page.next');
        const calculatedTarget=  page[page.length - pageNext.length];
          if(calculatedTarget){
            calculatedTarget.click();
          }
      }
    };


     prev.addEventListener('click', prevArrow);
  const  removeClick=()=>{
    containerFlip.classList.remove('click');
    arrows.classList.remove('click');
  };
  // add class click
    clickContainer = (event)=>{
      event = event || window.event;

      const parent = event.target.closest('.container-flip');
      if(!parent) return;
      parent.classList.add('click');
      arrows.classList.add('click');
      setTimeout(removeClick, 1000);

  };

  containerFlip.addEventListener('click',clickContainer);


   clickContainer();
  // add zIndex for pages
  const foundMaxZIndex = ()=>{
    const arr = [];
    page.forEach((item)=>{
    arr.push(Number(item.style.zIndex)); 
  });
  return( Math.max(...arr));
  };
  zChange = (e)=>{
    const targetCard =e.target.closest('.page');
    targetCard.style.zIndex = foundMaxZIndex() + 1;
  };

  containerFlip.addEventListener('click',zChange );

      // keyboard input click <- ->
        keyboardArrows =(e)=>{

        if (e.code === 'ArrowLeft') {
          if(!(containerFlip.classList.contains('click'))){

            prevArrow();
          }
        }
        else if (e.code === 'ArrowRight') {
          if(!(containerFlip.classList.contains('click'))){
            nextArrow();
          }
        }
      };

      document.addEventListener('keydown', keyboardArrows); // keyboard input

  }